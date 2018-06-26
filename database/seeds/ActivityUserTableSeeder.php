<?php

use App\Activity;
use App\User;
use Illuminate\Database\Seeder;

class ActivityUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= User::where('course_id','=','1')->role('student')->get();
        $activities = Activity
            ::join('topics', 'topics.id', '=', 'activities.topic_id')
            ->join('sub_modules', 'sub_modules.id', '=', 'topics.sub_module_id')
            ->join('modules', 'modules.id', '=', 'sub_modules.module_id')
            ->join('courses', 'courses.id', '=', 'modules.course_id')
            ->select('activities.*', 'sub_modules.id as sub_module_id', 'modules.id as module_id', 'courses.id as course_id')
            ->where('courses.id','=', '1')
            ->getQuery()
            ->get();
        foreach ($activities as $activity){
            $x=Activity::findOrfail($activity->id);
            foreach ($users as $user){
                $x->users()->attach($user);
            }
        }
    }
}
