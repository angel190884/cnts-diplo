<?php

use App\Course;
use App\Question;
use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $teachers= User::role('teacher')->get();
        $courses= Course::active()->get();

        for ($i=0;$i <= 1;$i++) {
            $question= $faker->realText(rand(15,20),2);
            factory(Question::class)->create([
                'question' => $question,
                'teacher_id' => $teachers->random()->id,
                'course_id' => $courses->random()->id,
                'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $question),
                'end' => Carbon::now()
            ]);
        }

        for ($i=0;$i <= 100;$i++)
        {
            $question= $faker->realText(rand(15,20),2);
            factory(Question::class)->create([
                'question' => $question,
                'teacher_id' => $teachers->random()->id,
                'course_id' => $courses->random()->id,
                'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $question)
            ]);
        }
    }
}
