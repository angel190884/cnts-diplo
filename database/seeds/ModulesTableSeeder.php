<?php

use App\Module;
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
        for ($x = 1; $x <= 50; $x++){
            for ($i = 1; $i <= random_int(2,8); $i++) {
                factory(Module::class)->create([
                    'order_module' => $i,
                    'course_id' => $x
                ]);
            }
        }
    }
}
