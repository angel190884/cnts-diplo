<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(SubModulesTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(ActivityUserTableSeeder::class);
        $this->call(ForumsTableSeeder::class);
        $this->call(ForumUserTableSeeder::class);
        $this->call(QuizTableSeeder::class);
        //$this->call(QuestionTableSeeder::class);
        //$this->call(QuestionOptionTableSedeer::class);
        //$this->call(QuizAttemptTableSeeder::class);
        //$this->call(AnswerTableSeeder::class);
    }
}
