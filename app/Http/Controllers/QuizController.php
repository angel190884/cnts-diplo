<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests\QuizStoreRequest;
use App\Mail\InscriptionRequestReceived;
use App\Mail\QuizPublished;
use App\QuestionOption;
use Illuminate\Http\Request;
use App\QuizAttempt;
use App\Question;
use App\Course;
use App\Quiz;
use App\User;
use Illuminate\View\View;
use Log;
use Mail;

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
        $average = QuizAttempt::active()->avg('score');
        return view('quizzes.index', compact('questions', 'users', 'quizzes', 'average'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStudent()
    {
        $quizzes = Quiz::active()->published()->orderBy('end','desc')->get();
        $quizzesAttach = auth()->user()->quizzes()->orderBy('end','desc')->get();
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
            /*$course = Course::findOrFail($quiz->course_id);
            $users = User::role('student')
                ->active()
                ->inscribed()
                ->courseFilter($course->id)
                ->orderBy('name', 'ASC')
                ->get();

            foreach ($users as $user){
                $quiz->users()->attach($user,[
                    'attempt' => 1,
                    'score' => 0,
                    'active' => 1
                ]);
            }
            dd($course,$users,$quiz->users()->get());
            $course->users()->attach();
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
        //dd($quiz->questions()->get());
        foreach ($quiz->users()->get() as $attempt){
            $quiz->users()->updateExistingPivot($attempt->id, ['active' => false]);
        }
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
            $users = $quiz->course->users()->active()->role('student')->get();
            //dd($users);
            foreach ($users as $user){
                Mail::to($user)->queue(new QuizPublished());
            }

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
     * Answer quiz
     *
     * @param \App\Quiz $quiz Quiz
     *
     * @return \Illuminate\Http\Response
     */
    public function answer(Quiz $quiz)
    {
        $questions = Question::where('quiz_id',$quiz->id)->with('options')->get();
        return view('quizzes.answer', compact('quiz','questions'));
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

    /**
     * Califica el examen
     *
     * @param \App\Quiz $quiz Quiz
     *
     * @return view
     */
    public function qualify(Quiz $quiz, Request $request)
    {
        $user = auth()->user();
        //dd($request->except('_token'));

        if ($user->quizzes()->where('quiz_id',$quiz->id)->count() > 0){
            $attempt = $user->quizzes()->where('quiz_id',$quiz->id)->count() + 1;
        }else{
            $attempt = 1;
        }


        $user->quizzes()->attach($quiz->id,[
            'attempt' => $attempt,
            'score' => 0,
        ]);
        //dd($quizAttempt);
        $quizAttempt=QuizAttempt::where('quiz_id',$quiz->id)
            ->where('user_id',auth()->user()->id)
            ->orderBy('created_at','desc')
            ->first();
        //dd($quizAttempt);
        //dd(auth()->user()->quizzes()->get());

        foreach ($request->except('_token') as $key => $answer) {
            Answer::create([
                'alternative' => '---',
                'question_id' => $key,
                'answer_id' => $answer,
                'quiz_attempt_id' => $quizAttempt->id
            ]);
            //dump(QuestionOption::findOrFail($answer)->correct);
            if(QuestionOption::findOrFail($answer)->correct == true){
                $quizAttempt->score += 1;
                $quizAttempt->save();
            }
        }

        $result= Answer::where('quiz_attempt_id',$quizAttempt->id)
            ->with('question','answer')->get();
        //todo : calificar examen
        //dd($result);
        //dd($quiz,$request);



        return redirect(route('quizzes.indexStudent'))->with('success','Hemos calificado tu examen correctamente!!!');
    }
}
