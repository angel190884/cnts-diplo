<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
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
