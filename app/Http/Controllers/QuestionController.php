<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\QuestionStoreRequest;
use App\Question;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Log;
use Redirect;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        if(auth()->user()->hasRole('teacher'))
        {
            $course=$request->get('course');
            $questions=Question::with('teacher')->where('teacher_id','=',auth()->user()->id)
                ->courseFilter($course)
                ->orderBy('start','DESC')->paginate(10);
            $courses=Course::active()->pluck('short_name', 'id');
            return view('teacher.listQuestions', compact('questions','courses','course'));
        }
        if (auth()->user()->hasRole('student'))
        {
            $teacher=$request->get('teacher');
            $questions=Question::with('teacher')->courseFilter(auth()->user()->course->id)
                ->teacherFilter($teacher)
                ->orderBy('start','DESC')->paginate(10);
            $teachers=User::role('teacher')->pluck('last_name', 'id');
            return view('teacher.listQuestions', compact('questions','teachers','teacher'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(QuestionStoreRequest $request,Faker $faker)
    {
        $question = new Question;
        $question->question         = Input::get('question');
        $question->slug             = Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. Input::get('question'));
        $question->teacher_id       = auth()->user()->id;
        $question->course_id        = Input::get('course');
        $question->observations     = Input::get('observations');
        $question->start            = Input::get('start');
        $question->end              = Input::get('end');

        $question->save();

        $users = User::courseFilter(Input::get('course_id'))->role('student')->get();

        $question->users()->attach($users);

        Log::info('el usario:' . auth()->user()->id . 'agrego la pregunta ' . $question->id);
        /*
         * todo: mandar mail a todos los estudiantes del diplomado queue
         */

        return Redirect::route('questions.index')->with('success','Se agrego correctamente la nueva discusión');
        //dump($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $question = Question::where('slug', '=', $slug)->firstOrFail();
        $today=Carbon::today('America/Mexico_City');
        return view('teacher.showQuestion',compact('question','today'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }

    public function scoreQuestion($slug)
    {
        $question = Question::where('slug', '=', $slug)->firstOrFail();

        if (auth()->user()->hasAnyRole('teacher'))
        {
            return view('teacher.scoreQuestion',compact('question'));
        }
        Log::error('usuario intento entrar a ruta sin autorización  | '.'user:'. auth()->user()->id);
        return abort(403, 'Unauthorized action.');
    }

    public function changeScore(User $user,Request $request)
    {
        $this->validate($request, [
            'question_id' => 'required',
            'score'=>'required'
        ]);

        if ($user->questions()->updateExistingPivot($request->post('question_id'), ['score' => $request->post('score')]))
        {
            Log::info("el usurio ". auth()->user()->id . "cambio calificación a user $user->id");
            return back();
        }else{
            Log::info("el usuario ". auth()->user()->id . "quizo cambiar calificación a user $user->id pero no se concreto la operación");
            return back();
        }
        //dump($user->activities()->findOfFail($request->post('activity_id')));
    }
}
