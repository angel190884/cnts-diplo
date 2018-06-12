<?php

use App\Activity;
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
        $topics= Topic::all();
        $x=1;
        foreach ($topics as $topic){
            for ($i = 1; $i <= rand(0,3); $i++) {
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
