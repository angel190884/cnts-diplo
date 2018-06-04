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
        $users= User::all();
        $activities=Activity::all();

        foreach ($activities as $activity){
            for ($i = 1; $i <= rand(0,4); $i++) {
                $user= $users->random();
                if($user->hasRole('student'))
                {
                    $activity->users()->attach($user);
                }
            }
        }
    }
}
