<?php

use Illuminate\Database\Seeder;
use App\QuestionOption;
use App\Question;

class QuestionOptionTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = Question::all();
        
        foreach ($questions as $question) {
            for ($i=1; $i <= 1; $i++) { 
                factory(QuestionOption::class)->create([
                    'option' => "opcion correcta",
                    'correct' => true,
                    'question_id' => $question->id,
                ]);
            }
            for ($i=1; $i <= 3; $i++) { 
                factory(QuestionOption::class)->create([
                    'option' => "opcion",
                    'correct' => false,
                    'question_id' => $question->id,
                ]);
            }
        }
    }
}
