<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizStoreRequest;
use Illuminate\Http\Request;
use App\QuizAttempt;
use App\Question;
use App\Course;
use App\Quiz;
use App\User;
use Illuminate\View\View;
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
        $questions = Question::active()->count();
        $users = User::role('student')->count();
        $quizzes = Quiz::active()->with('course')->orderBy('created_at', 'DESC')->get();
        $average = QuizAttempt::avg('score');
        return view('quizzes.index', compact('questions', 'users', 'quizzes', 'average'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStudent()
    {
        $quizzes = Quiz::active()->published()->get();
        $quizzesAttach = auth()->user()->quizzes()->get();
        $quizzesPending =$quizzes->diff($quizzesAttach);

        //dd($quizzes,$quizzesAttach,$quizzesPending);
        return view('quizzes.indexStudent', compact('quizzesAttach', 'quizzesPending', 'quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::active()->get();
        return view('quizzes.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\QuizStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuizStoreRequest $request)
    {
        $title = $request->get('title');
        $courseId = $request->get('course_id');
        $numberQuestions= $request->get('number_questions');
        $minScore= $request->get('min_score');
        $end = $request->get('end');


        $quiz = new Quiz();

        $quiz->title = $title;
        $quiz->course_id = $courseId;
        $quiz->number_questions = $numberQuestions;
        $quiz->min_score = $minScore;
        $quiz->end = $end;

        if ($quiz->save()) {
            /**
             * Todo: Attach usuarios del curso
             */
            $userID = auth()->user()->id;
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
        $courses = Course::active()->get();
        return view('quizzes.edit', compact('courses', 'quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request Request
     * @param \App\Quiz $quiz Quiz
     * @return \Illuminate\Http\Response
     */
    public function update(QuizStoreRequest $request, Quiz $quiz)
    {
        $title = $request['title'];
        $courseId = $request['course_id'];
        $numberQuestions = $request['number_questions'];
        $minScore = $request['min_score'];
        $end = $request['end'];

        $quiz->title = $title;
        $quiz->course_id = $courseId;
        $quiz->number_questions = $numberQuestions;
        $quiz->min_score = $minScore;
        $quiz->end = $end;

        if ($quiz->save()) {
            $userID=auth()->user()->id;
            Log::info("el usuario $userID actualizó un examen con id $quiz->id $quiz");
        }

        return redirect(route('quizzes.index'))->with('success', "El examen fue actualizado Satisfactoriamente.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz  $quiz Quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->active = false;
        $quiz->published = false;
        if ($quiz->save()) {
            $userID=auth()->user()->id;
            Log::warning("el usuario $userID eliminó un examen con id $quiz->id $quiz");
        }
        return redirect(route('quizzes.index'))->with('success', "El examen fue eliminado correctamente.");
    }

    /**
     * Publish the quiz
     *
     * @param \App\Quiz $quiz
     *
     * @return \Illuminate\Http\Response
     */
    public function publish(Quiz $quiz)
    {
        $quiz->published = true;
        if ($quiz->save()) {
            $userID=auth()->user()->id;
            Log::info("el usuario $userID publicó un examen con id $quiz->id $quiz");
        }
        return redirect(route('quizzes.index'))->with('success', "El examen fue publicado correctamente.");
    }

    /**
     * Disable the quiz
     *
     * @param \App\Quiz $quiz Quiz
     *
     * @return \Illuminate\Http\Response
     */
    public function disable(Quiz $quiz)
    {
        $quiz->published = false;
        if ($quiz->save()) {
            $userID=auth()->user()->id;
            Log::info("el usuario $userID quito publicación de un examen con id $quiz->id $quiz");
        }
        return redirect(route('quizzes.index'))->with('success', "El examen fue deshabilitado correctamente.");
    }

    /**
     * Contestar Examen
     *
     * @return View
     */
    public function answer()
    {
        $quiz = (object) [
            'title' => "American History",
            'showProgressBar' => "bottom",
            'showTimerPanel' => "top",
            'maxTimeToFinishPage' => 10,
            'maxTimeToFinish' => 25,
            'firstPageIsStarted' => true,
            'startSurveyText' => "Start Quiz",
            'pages' => [
                (object) [
                    'questions' => (object) [
                        'type' => "html",
                        'html' => "You are about to start quiz by history. <br/>You have 10 seconds for every page and 25 seconds for the whole survey of 3 questions.<br/>Please click on <b>'Start Quiz'</b> button when you are ready."
                    ]
                ]
            ]
        ];
        return view('quizzes.answer', compact('quiz'));
    }
    
    /**
     * Devuelve la vista de answer
     *
     * @param \App\Quiz $quiz Quiz
     *
     * @return view
     */
    public function start(Quiz $quiz)
    {
        return view('quizzes.answer', compact('quiz'));
    }
}
