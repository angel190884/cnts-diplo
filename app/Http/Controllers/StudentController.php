<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fullName=$request->get('full_name');
        $email=$request->get('email');
        $course=$request->get('course');

        $users = User::with('course')
            ->role('student')
            ->active()
            ->inscribed()
            ->fullName($fullName)
            ->email($email)
            ->courseFilter($course)
            ->orderBy('name', 'ASC')
            ->paginate(10);

        $courses = Course::active()->pluck('short_name', 'id');

        return view('admin.studentsList', compact('users', 'courses', 'fullName', 'email', 'course'));
    }

    public function viewContent()
    {
        return view('student.content');
    }
}
