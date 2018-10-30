<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\QuizAttempt;
use App\Course;

class QuizAttemptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $courses= Course::all();
        foreach ($courses as $course){
            foreach ($course->quizzes()->get() as $quiz){
                foreach ($course->users()->get() as $user){
                    factory(QuizAttempt::class)->create([
                        'alternative' => $faker->sentence(),
                        'quiz_id' => $quiz->id,
                        'attempt' => 1,
                        'score'   => $faker->randomDigitNotNull,
                        'active' => 1,
                        'user_id' => $user->id
                    ]);
                }
            }
        }
    }
}
