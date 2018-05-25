<?php

use App\Module;
use App\SubModule;
use Illuminate\Database\Seeder;

class SubModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules= Module::all();
        foreach ($modules as $module){
            for ($i = 1; $i <= random_int(1,6); $i++) {
                factory(SubModule::class)->create([
                    'order_submodule' => $i,
                    'module_id' => $module->id
                ]);
            }
        }
    }
}
