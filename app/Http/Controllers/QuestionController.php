<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionStoreRequest;
use App\Question;
use App\Quiz;
use Illuminate\Http\Request;
use Log;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Quiz $quiz)
    {
        return view('questions.index',compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Quiz $quiz)
    {
        return view('questions.create', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionStoreRequest $request)
    {
        $questionText = $request->get('question');
        $quiz_id = $request->get('quiz_id');
        $type = $request->get('type');

        $question = new Question();

        $question->question = $questionText;
        $question->quiz_id = $quiz_id;
        $question->type = $type;

        if ($question->save()){
            $userID=auth()->user()->id;
            Log::info("el usuario $userID creó un pregunta con id $question->id que corresponde al examen $question->quiz_id");
        }

        $quiz = Quiz::findOrFail($quiz_id);

        return redirect()->route('questions.index', $quiz)->with('success', "La pregunta del examen fue creada Satisfactoriamente.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionStoreRequest $request, Question $question)
    {
        $questionText = $request->get('question');
        $quizId = $request->get('quiz_id');
        $type= $request->get('type');

        $question->question = $questionText;
        $question->quiz_id = $quizId;
        $question->type = $type;

        if ($question->save()){
            $userID=auth()->user()->id;
            Log::info("el usuario $userID actualizó la pregunta $question->id del examen $question->quiz_id | $question");
        }

        return redirect(route('questions.index',$question->quiz))->with('success', "La pregunta fue actualizada Satisfactoriamente.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
