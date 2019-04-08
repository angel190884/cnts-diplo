<?php

namespace App\Http\Controllers;

use Faker\Generator as Faker;
use Illuminate\Http\Request;
use App\Activity;
use App\Course;
use App\Topic;
use App\User;
use Auth;
use Log;
use Redirect;

class ActivityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user=auth()->user();
        if ($user->hasRole('teacher'))
        {
            $activities=Activity::with('topic.subModule.module.course')->teacher()->get();
            return view('teacher.listActivities',compact('activities'));
        }
        if ($user->hasRole('student'))
        {
            $activities=auth()->user()->activities()->with('topic.subModule.module.course')->orderBy('number_activity')->get();
            return view('student.listActivities',compact('activities'));
        }
        Log::error('un usuario quiso ver una url que no le corresponde | '.'user:'. Auth::user()->id);
        return abort(403, 'Unauthorized action.');
    }

    public function show($slug)
    {
        $activity = Activity::where('slug', '=', $slug)->firstOrFail();

        if (Auth::user()->hasAnyRole('student'))
        {
            return view('student.showActivity',compact('activity'));
        }
        Log::error('un usuario quiso ver una url que no le corresponde | '.'user:'. Auth::user()->id);
        return abort(403, 'Unauthorized action.');
    }

    public function scoreActivity($slug)
    {
        $activity = Activity::where('slug', '=', $slug)
            ->with('topic.subModule.module.course','users')
            ->firstOrFail();
        //dd($activity->pivot->file);
        if (Auth::user()->hasAnyRole('teacher'))
        {
            return view('teacher.scoreActivity',compact('activity'));
        }
        Log::error('usuario intento entrar a ruta sin autorización  | '.'user:'. Auth::user()->id);
        return abort(403, 'Unauthorized action.');
    }

    public function changeScore(User $user,Request $request)
    {
        $this->validate($request, [
            'score'=>'required'
        ]);

        if ($user->activities()->updateExistingPivot($request->post('activity_id'), ['score' => $request->post('score')]))
        {
            Log::info("el usuario: ". auth()->user()->id . " cambio calificación de actividad  al user $user->id | calif: " . $request->post('score'));
            return back();
        }else{
            Log::info("el usuario ". auth()->user()->id . " quizo cambiar calificación de actividad a user $user->id pero no se concreto la operación");
            return back();
        }
    }

    public function showFormActivity(){
        $topics=Topic::all();
        return view('admin.showFormActivity',compact('topics'));
    }

    public function createActivity(Request $request, Faker $faker){
        //dd($request);

        $activity = new Activity;
        $activity->name =               request('name');
        $slug=$faker->randomNumber(8, false) . ' ' . $activity->name;
        $activity->slug             = str_slug($slug, '-');
        $activity->number_activity =    request('number_activity');
        $activity->topic_id =           request('topic_id');
        $activity->description =        request('description');

        $activity->save();

        $users = User::courseFilter(request('course_id'))
            ->role('student')
            ->get();

        $activity->users()->attach($users);

        info('el usario:' . auth()->user()->id . 'agrego la actividad ' . $activity->id);

        /*
         * TODO: mandar mail a todos los estudiantes del diplomado queue
         */

        return Redirect::route('activity.create')->with('success', 'Se agrego correctamente la nueva actividad  al diplomado');
    }

}
