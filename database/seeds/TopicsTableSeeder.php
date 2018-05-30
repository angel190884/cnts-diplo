<?php

use App\SubModule;
use App\Topic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $subModules= SubModule::all();
        //$name= $faker->realText(rand(15,20),2);
        foreach ($subModules as $subModule){
            for ($i = 1; $i <= random_int(2,4); $i++) {
                $name= $faker->realText(rand(15,20),2);
                factory(Topic::class)->create([
                    'name'  => $name,
                    'order_topic' => $i,
                    'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                    'sub_module_id' => $subModule->id
                ]);
            }
        }
    }
}
