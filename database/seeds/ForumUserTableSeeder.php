<?php

use App\Forum;
use App\User;
use Illuminate\Database\Seeder;

class ForumUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forums= new Forum();
        $users= User::role('student')->get();

        foreach ($forums->all() as $forum) {
            $users->where('course_id', $forum->course_id)->all();
            $forum->users()->attach($users);
        }

    }
}
