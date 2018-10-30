<?php

use App\Course;
use App\Forum;
use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ForumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker instancia de la clase Faker.
     * 
     * @return void
     */
    public function run(Faker $faker)
    {
        $teachers= User::role('teacher')->get();
        $courses= Course::active()->get();
        $slug= new Str();
        $end=   new Carbon();
        for ($i=0;$i <= 1;$i++) {
            $forum = $faker->realText(rand(15, 20), 2);
            factory(Forum::class)->create(
                [
                    'forum' => $forum,
                    'teacher_id' => $teachers->random()->id,
                    'course_id' => $courses->random()->id,
                    'slug'  => $slug->slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $forum),
                    'end' => $end->now()
                ]
            );
        }

        for ($i=0;$i <= 10;$i++) {
            $forum = $faker->realText(rand(15, 20), 2);
            factory(Forum::class)->create(
                [
                    'forum' => $forum,
                    'teacher_id' => $teachers->random()->id,
                    'course_id' => $courses->random()->id,
                    'slug'  => $slug->slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $forum)
                ]
            );
        }
    }
}
