<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
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

    public function index(Request $request)
    {
        $full_name=$request->get('full_name');
        $email=$request->get('email');
        $course=$request->get('course');

        $users = User::with('course')
            ->role('student')
            ->active()
            ->inscribed()
            ->fullName($full_name)
            ->email($email)
            ->courseFilter($course)
            ->orderBy('name','ASC')
            ->paginate(10);

        $courses=Course::active()->pluck('short_name', 'id');

        return view('admin.studentsList',compact('users', 'courses', 'full_name','email','course'));
    }

    public function viewContent()
    {
        return view('student.content');
    }
}
