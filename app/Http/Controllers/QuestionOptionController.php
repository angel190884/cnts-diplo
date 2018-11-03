<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionOptionStoreRequest;
use App\Question;
use App\QuestionOption;
use Illuminate\Http\Request;
use Log;

class QuestionOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $question Question
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return view('questionOptions.index', compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $question Question
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Question $question)
    {
        return view('questionOptions.create', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionOptionStoreRequest $request)
    {
        $option = $request->get('option');
        $question_id = $request->get('question_id');
        $correct = $request->get('correct');

        $questionOption = new QuestionOption();

        $questionOption->option = $option;
        $questionOption->question_id = $question_id;
        $questionOption->correct = $correct;

        if ($questionOption->save()){
            $userID=auth()->user()->id;
            Log::info("el usuario $userID creó una opción con id $questionOption->id que corresponde a la pregunta $questionOption->question_id");
        }

        $question = Question::findOrFail($question_id);

        return redirect()->route('questionOptions.index', $question)->with('success', "La opcion de la pregunta fue creada Satisfactoriamente.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionOption  $questionOption
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionOption $questionOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionOption  $questionOption
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionOption $questionOption)
    {
        return 'QuestionOptions edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionOption  $questionOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionOption $questionOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionOption  $questionOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionOption $questionOption)
    {
        //
    }
}
