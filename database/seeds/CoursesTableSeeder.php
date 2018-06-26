<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            factory(Course::class)->create([
                'short_name' => 'diplo-gen-' . $i,
                'generation' => $i
            ]);
        }
        for ($i = 4; $i <= 6; $i++) {
            factory(Course::class)->create([
                'short_name' => 'diplo-gen-' . $i,
                'generation' => $i,
                'active' => false,
            ]);
        }
    }
}
