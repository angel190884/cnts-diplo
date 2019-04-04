<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alternative', 'question_id', 'answer_id', 'quiz_attempt_id','id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];


    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function attempt()
    {
        return $this->belongsTo(QuizAttempt::class);
    }

    public function answer()
    {
        return $this->belongsTo(QuestionOption::class);
    }
}
