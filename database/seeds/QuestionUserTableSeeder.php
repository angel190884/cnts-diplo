<?php

use App\Question;
use App\User;
use Illuminate\Database\Seeder;

class QuestionUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions= Question::all();
        $users= User::role('student')->get();

        foreach ($questions as $question)
        {
            $users->where('course_id',$question->course_id)->all();
            $question->users()->attach($users);
        }

    }
}
