<?php

use App\Course;
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
        /*$subModules= SubModule::all();
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
        }*/

        $courses = Course::with('modules.subModules.topics')->get();

        foreach ($courses as $course){
            foreach ($course->modules()->where('name', 'like', '%1%')->get() as $module){
                foreach ($module->subModules()->where('name', 'like', '%INTRODUCCIÓN%') as $subModule){
                    $name = 'PROGRAMA DE EDUCACIÓN A DISTANCIA';
                    factory(Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/MOD_1_INTRODUCTORIO/SUBMOD_1_INTRODUCCIÓN/1_1_Programa_de_educación_a_distancia.pdf'
                    ]);

                    /*for ($i = 1; $i <= random_int(2,4); $i++) {
                        $name= $faker->realText(rand(15,20),2);
                        factory(Topic::class)->create([
                            'name'  => $name,
                            'order_topic' => $i,
                            'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                            'sub_module_id' => $subModule->id
                        ]);
                    }*/
                }
            }
        }
    }
}
