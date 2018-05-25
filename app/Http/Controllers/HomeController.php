<?php

namespace App\Http\Controllers;

use App\Module;
use App\User;
use Auth;
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
        if (Auth::user()->hasRole('student'))
        {
            $modules=Module::where('course_id','=',Auth::user()->course_id)
                ->get();

            return view('home',compact('modules'));
        }
        return view('home');
    }
}
