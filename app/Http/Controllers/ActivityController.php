<?php

namespace App\Http\Controllers;

use App\Activity;
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
        $activities=auth()->user()->activities()->with('topic.submodule.module')->get();
        return view('student.listActivities',compact('activities'));
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
}
