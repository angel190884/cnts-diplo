<?php

use App\Activity;
use App\Course;
use App\Topic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $courses= Course::active()->with('modules.subModules.topics')->get();

        //$topics= Topic::all();
        foreach ($courses as $course)
        {
            $x=1;
            foreach ($course->modules as $module)
            {
                foreach ($module->subModules as $subModule)
                {
                    foreach ($subModule->topics as $topic){
                        for ($i = 1; $i <= array_random([0,1,2]); $i++) {
                            $name= $faker->realText(rand(15,20),2);
                            factory(Activity::class)->create([
                                'name' => $name,
                                'topic_id' => $topic->id,
                                'number_activity'  => $x,
                                'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name)
                            ]);
                            $x++;
                        }
                    }
                }
            }

        }
    }
}
