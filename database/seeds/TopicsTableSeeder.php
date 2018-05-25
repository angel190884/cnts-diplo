<?php

use App\SubModule;
use App\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subModules= SubModule::all();
        foreach ($subModules as $subModule){
            for ($i = 1; $i <= random_int(1,6); $i++) {
                factory(Topic::class)->create([
                    'order_topic' => $i,
                    'sub_module_id' => $subModule->id
                ]);
            }
        }
    }
}
