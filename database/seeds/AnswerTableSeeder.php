<?php

use App\Answer;
use Illuminate\Database\Seeder;
use App\QuizAttempt;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attempts= QuizAttempt::all();
        foreach ($attempts as $attempt){
            $quiz=$attempt->quiz()->first();
            foreach ($quiz->questions()->get() as $question){
                $response=$question->options()->get();
                factory(Answer::class)->create([
                    'question_id' => $question->id,
                    'answer_id' => $response->random()->id,
                    'quiz_attempt_id' => $attempt->id
                ]);
            }
        }
    }
}
