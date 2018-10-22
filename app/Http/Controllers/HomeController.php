<?php

namespace App\Http\Controllers;

use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use App\Activity;
use App\Course;
use App\Module;
use App\Forum;
use App\User;
use Auth;

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

        if ($user->hasRole('teacher')) {
            $activities=Activity::with('topic.subModule.module.course')
                ->teacher()
                ->paginate(4);

            $forums=Forum::with('teacher')
                ->where('teacher_id', '=', auth()->user()->id)
                ->orderBy('start', 'DESC')
                ->paginate(4);

            return view('home', compact('activities', 'forums'));
        }

        if ($user->hasRole('student')) {
            $activities= $user->activities()
                ->wherePivot('score', '!=', 0)
                ->orderBy('activity_user.updated_at', 'DESC')
                ->get();

            $forums=$user->forums()
                ->wherePivot('score', '!=', 0)
                ->orderBy('Forum_user.updated_at', 'DESC')
                ->get();

            return view('home', compact('activities', 'forums'));
        }
        if ($user->hasRole('admin')) {
            $courses=Course::active()
                ->with('users')
                ->get();
            
            $users=User::role('student')
                ->active()
                ->inscribed()
                ->with('course')
                ->get();
            
            $authenticated=User::role('authenticated')
                ->active()
                ->inscribed()
                ->get();
            
            $forums=Forum::all();
            
            $activities=Activity::all();
            
            return view('home', compact('courses', 'users', 'authenticated', 'forums', 'activities'));
        }
        return view('home');
    }
}
