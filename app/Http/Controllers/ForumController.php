<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForumStoreRequest;
use App\Mail\ForumPublished;
use Illuminate\Support\Facades\Input;
use Faker\Generator as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Forum;
use App\Course;
use App\User;
use Mail;
use Redirect;
use Log;
use DB;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request 
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        if (auth()->user()->hasRole('teacher')) {
            $course = $request->get('course');
            $forums = Forum::with('teacher')->where('teacher_id', '=', auth()->user()->id)
                ->courseFilter($course)
                ->orderBy('start', 'DESC')->paginate(10);
            $courses = Course::active()->pluck('short_name', 'id');
            return view('teacher.listForums', compact('forums', 'courses', 'course'));
        }
        if (auth()->user()->hasRole('student')) {
            $teacher = $request->get('teacher');
            $forums = Forum::with('teacher')
                ->courseFilter(auth()->user()->course->id)
                ->teacherFilter($teacher)
                ->orderBy('start', 'DESC')
                ->paginate(10);
            $teachers = User::role('teacher')
                ->pluck('last_name', 'id');
            return view('teacher.listForums', compact('forums', 'teachers', 'teacher'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request 
     * @param Faker                    $faker 
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ForumStoreRequest $request, Faker $faker)
    {
        $forum = new Forum;
        $forum->forum = request('forum');
        $slug=$faker->randomNumber(8, false) . ' ' . $forum->forum;
        $forum->slug             = str_slug($slug, '-');
        $forum->teacher_id       = auth()->user()->id;
        $forum->course_id        = request('course');
        $forum->observations     = request('observations');
        $forum->start            = request('start');
        $forum->end              = request('end');

        if ($forum->save()) {
            $userID=auth()->user()->id;
            Log::info("el prof. con id  $userID publicó un foro con id $forum->id $forum");
            $users = $forum->course->users()->active()->role('student')->get();
            //dd($users);
            foreach ($users as $user){
                Mail::to($user)->queue(new ForumPublished());
            }

        }

        $users = User::courseFilter(request('course_id'))
            ->role('student')
            ->get();

        $forum->users()->attach($users);

        info('el usario:' . auth()->user()->id . 'agrego la pregunta ' . $forum->id);

        return Redirect::route('forums.index')->with('success', 'Se agrego correctamente el nuevo foro de discusión');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Forum $slug 
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $forum = Forum::where('slug', '=', $slug)->firstOrFail();

        $today=today('America/Mexico_City');

        return view('teacher.showForum', compact('forum', 'today'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Forum $forum 
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request 
     * @param \App\Forum               $forum 
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Forum $forum 
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }

    /**
     * View score Forums.
     *
     * @param \App\Forum $slug 
     * 
     * @return \Illuminate\Http\Response
     */
    public function scoreForum($slug)
    {
        $forum = Forum::where('slug', '=', $slug)->firstOrFail();

        if (auth()->user()->hasAnyRole('teacher')) {
            return view('teacher.scoreForum', compact('forum'));
        }

        error('usuario intento entrar a ruta sin autorización  | '.'user:'. auth()->user()->id);
        
        return abort(403, 'Unauthorized action.');
    }

    /**
     * Change score forum.
     *
     * @param \App\User $user 
     * @param Request   $request 
     * 
     * @return \Illuminate\Http\Response
     */
    public function changeScore(User $user,Request $request)
    {
        $this->validate(
            $request,
            [
                'forum_id' => 'required',
                'score'=>'required'
            ]
        );

        if ($user->forums()->updateExistingPivot($request->post('forum_id'), ['score' => $request->post('score')])) {
            info("el usuario " . auth()->user()->id . "cambio la calificación de usuario $user->id");
            return back();
        }

        info("el usuario " . auth()->user()->id . "quizo cambiar calificación a user $user->id pero no se concreto la operación");
        
        return back();
    }
}
