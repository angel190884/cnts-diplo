<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Module;
use App\Question;
use App\User;
use Auth;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=auth()->user();
        if ($user->hasRole('teacher'))
        {
            $activities=Activity::with('topic.subModule.module.course')->teacher()->paginate(4);
            $questions=Question::with('teacher')->where('teacher_id','=',auth()->user()->id)->orderBy('start','DESC')->paginate(4);
            //dd($activities,$questions);e
            return view('home',compact('activities','questions'));
        }
        if ($user->hasRole('student'))
        {
            $activities= $user->activities()->wherePivot('score','!=',0)->orderBy('activity_user.updated_at','DESC')->get();
            $forums=$user->questions()->wherePivot('score','!=',0)->orderBy('question_user.updated_at','DESC')->get();
            //dd($forums);
            return view('home',compact('activities','forums'));
        }
        return view('home');
    }
}
