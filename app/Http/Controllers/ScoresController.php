<?php

namespace App\Http\Controllers;

use App\Course;
use App\QuizAttempt;
use Illuminate\Http\Request;

class ScoresController extends Controller
{
    public function forums()
    {
        $courses=Course::active()->get();
        return view('scores.forums',compact('courses'));
    }

    public function activities()
    {
        $courses=Course::active()->get();
        return view('scores.activities',compact('courses'));
    }

    public function quizzes()
    {
        $attempts=QuizAttempt::active()->get();

        return view('scores.quizzes',compact('attempts'));
    }
}
