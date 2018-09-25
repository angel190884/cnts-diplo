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

        if (auth()->user()->hasRole('teacher'))
        {
            $activities=Activity::with('topic.subModule.module.course')->teacher()->paginate(4);
            $questions=Question::with('teacher')->where('teacher_id','=',auth()->user()->id)->orderBy('start','DESC')->paginate(4);
            //dd($activities,$questions);e
            return view('home',compact('activities','questions'));
        }
        return view('home');
    }
}
