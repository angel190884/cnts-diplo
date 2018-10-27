<?php

use Illuminate\Database\Seeder;
use App\Course;
use App\Quiz;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::all();
        
        foreach ($courses as $course) {
            for ($i=1; $i <= 4; $i++) { 
                factory(Quiz::class)->create([
                    'title' => "examen $i",
                    'course_id' => $course->id
                ]);
            }
        }
    }
}
