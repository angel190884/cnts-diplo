<?php

use App\Course;
use App\Module;
use App\User;
use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = User::role('teacher')->get();
        $courses = Course::all();
        foreach ($courses as $course) {
            $i = 0;
            foreach ($teachers as $teacher) {
                $i++;
                factory(Module::class)->create([
                    'order_module' => $i,
                    'course_id' => $course->id,
                    'teacher_id' => $teacher->id
                ]);
            }
        }

    }
}
