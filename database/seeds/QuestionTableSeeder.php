<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Quiz;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizzes = Quiz::all();
        
        foreach ($quizzes as $quiz) {
            for ($i=1; $i <= 20; $i++) { 
                factory(Question::class)->create([
                    'question' => "pregunta  $i",
                    'quiz_id' => $quiz->id
                ]);
            }
        }
    }
}
