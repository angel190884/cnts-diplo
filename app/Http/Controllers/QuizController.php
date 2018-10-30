<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizStoreRequest;
use Illuminate\Http\Request;
use App\QuizAttempt;
use App\Question;
use App\Course;
use App\Quiz;
use App\User;
use Log;


class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::count();
        $users = User::role('student')->count();
        $quizzes = Quiz::active()->with('course')->orderBy('created_at','DESC')->get();
        $average = QuizAttempt::avg('score');
        return view('quizzes.index', compact('questions', 'users', 'quizzes', 'average'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::active()->get();
        return view('quizzes.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\QuizStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuizStoreRequest $request)
    {
        $title = $request['title'];
        $course_id = $request['course_id'];
        $number_questions= $request['number_questions'];
        $min_score= $request['min_score'];

        $quiz = new Quiz();

        $quiz->title = $title;
        $quiz->course_id = $course_id;
        $quiz->number_questions = $number_questions;
        $quiz->min_score = $min_score;

        if ($quiz->save()){
            $userID=auth()->user()->id;
            Log::info("el usuario $userID creó un examen con id $quiz->id");
        }

        return redirect(route('quizzes.index'))->with('success', "El examen fue creado Satisfactoriamente.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
