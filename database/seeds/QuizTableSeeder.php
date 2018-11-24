<?php

use App\Answer;
use App\QuizAttempt;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\QuestionOption;
use App\Question;
use App\Course;
use App\Quiz;



class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $courses = Course::all();
        
        foreach ($courses as $course) {
            for ($i=1; $i <= 4; $i++) {
                $quiz = factory(Quiz::class)->create([
                    'title' => "examen $i",
                    'course_id' => $course->id,
                    'published' => true,
                    'active' => $course->active
                ]);
                for ($j=1; $j <= 12; $j++) {
                    $question = factory(Question::class)->create([
                        'question' => "pregunta  $i",
                        'quiz_id' => $quiz->id,
                        'active' => $quiz->active
                    ]);
                    for ($k=1; $k <= 1; $k++) {
                        factory(QuestionOption::class)->create([
                            'option' => "opcion correcta",
                            'correct' => true,
                            'question_id' => $question->id,
                        ]);
                    }
                    for ($m=1; $m <= 3; $m++) {
                        factory(QuestionOption::class)->create([
                            'option' => "opcion",
                            'correct' => false,
                            'question_id' => $question->id,
                        ]);
                    }
                }
            }
            foreach ($course->quizzes()->get() as $quiz){
                $quiz->users()->attach($course->users()->get(),[
                    'attempt' => 1,
                    'score' => $faker->randomDigitNotNull,
                    'alternative' => $faker->sentence
                ]);
            }
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

        $course = Course::findOrFail(1);
        $quiz = factory(Quiz::class)->create([
            'title' => "examen prueba sin contestar",
            'course_id' => $course->id,
            'published' => true,
            'active' => true
        ]);

        for ($i=1; $i <= 12; $i++) {
            $question = factory(Question::class)->create([
                'question' => "pregunta  $i",
                'quiz_id' => $quiz->id,
                'active' => $quiz->active
            ]);

            for ($k=1; $k <= 1; $k++) {
                factory(QuestionOption::class)->create([
                    'option' => "opcion correcta",
                    'correct' => true,
                    'question_id' => $question->id,
                ]);
            }
            for ($m=1; $m <= 3; $m++) {
                factory(QuestionOption::class)->create([
                    'option' => "opcion",
                    'correct' => false,
                    'question_id' => $question->id,
                ]);
            }

        }
        $quiz->users()->attach($course->users()->get(),[
            'attempt' => 1,
            'score' => '0',
            'alternative' => $faker->sentence
        ]);
    }
}
