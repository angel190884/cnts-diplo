<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Course;
use App\Topic;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Log;

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
            $activities=auth()->user()->activities()->with('topic.subModule.module.course')->get();
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
            Log::info("el usurio ". auth()->user()->id . "cambio calificación a user $user->id");
            return back();
        }else{
            Log::info("el usuario ". auth()->user()->id . "quizo cambiar calificación a user $user->id pero no se concreto la operación");
            return back();
        }
        //dump($user->activities()->findOfFail($request->post('activity_id')));
    }
}
