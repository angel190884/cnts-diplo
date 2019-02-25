<?php

use App\Module;
use App\SubModule;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //$modules= Module::all();
        $modules1= Module::where('name','LIKE','%1%')->get();
        $modules2= Module::where('name','LIKE','%2%')->get();
        $modules3= Module::where('name','LIKE','%3%')->get();
        $modules4= Module::where('name','LIKE','%4%')->get();
        foreach ($modules1 as $module){
            $subModule = factory(SubModule::class)->create([
                'name' => 'INTRODUCCIÓN',
                'order_submodule' => 1,
                'module_id' => $module->id
            ]);
                    $name = 'PROGRAMA DE EDUCACIÓN A DISTANCIA';
                    factory(\App\Topic::class)->create([
                    'name'  => $name,
                    'order_topic' => 1,
                    'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                    'sub_module_id' => $subModule->id,
                    'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_1_Programa_de_educación_a_distancia.pdf'
                    ]);
                    $name = 'MÓDULOS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_2_Módulos.pdf'
                    ]);

                    $name = 'PAPEL DEL TUTOR';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_4_Papel_del_Tutor.pdf'
                    ]);

                    $name = 'EVALUACIÓN';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_5_Evaluación.pdf'
                    ]);

                    $name = 'MÓDULO INTRODUCTORIO GUÍAS Y PRINCIPIOS PARA UNA PRÁCTICA TRANSFUSIONAL SEGURA';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_6_Módulo_introductorio_Guías_y_principios_para_una_práctica_transfusional_segura.pdf'
                    ]);

                    $name = 'OBJETIVOS DEL MÓDULO';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_7_Objetivos_del_Módulo.pdf'
                    ]);

                    $name = 'PLANIFICACIÓN DEL ESTUDIO';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_8_Planificación_del_estudio.pdf'
                    ]);

            factory(SubModule::class)->create([
                'name' => 'PROFESIONALISMO',
                'order_submodule' => 2,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'PROCEDIMIENTOS DE SEGURIDAD',
                'order_submodule' => 3,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'CALIDAD Y GARANTÍA DE CALIDAD',
                'order_submodule' => 4,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'CONSERVACIÓN CORRECTA DE SANGRE Y PLASMA',
                'order_submodule' => 5,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'MANTENIMIENTO DE LA CADENA DE FRÍO',
                'order_submodule' => 6,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'PREPARACIÓN DE SOLUCIONES BÁSICAS',
                'order_submodule' => 7,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'CONTROL DE EXISTENCIAS',
                'order_submodule' => 8,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'PLAN DE ACCIÓN',
                'order_submodule' => 9,
                'module_id' => $module->id
            ]);
        }
        foreach ($modules2 as $module){
            factory(SubModule::class)->create([
                'name' => 'INTRODUCCIÓN',
                'order_submodule' => 1,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'IDENTIFICACIÓN DE DONANTES DE BAJO RIESGO',
                'order_submodule' => 2,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'ESTIMACIÓN DE LOS REQUERIMIENTOS DE SANGRE',
                'order_submodule' => 3,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'EDUCACIÓN, MOTIVACIÓN Y RECLUTAMIENTO DE DONANTES',
                'order_submodule' => 4,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'ORGANIZACIÓN DE CENTROS DE DONACIÓN',
                'order_submodule' => 5,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'SELECCIÓN DE LOS DONANTES',
                'order_submodule' => 6,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'ATENCIÓN DE LOS DONANTES',
                'order_submodule' => 7,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'REGISTROS DE DONANTES',
                'order_submodule' => 8,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'RETENCIÓN Y LLAMADO DE DONANTES',
                'order_submodule' => 9,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => '10 PLAN DE ACCIÓN',
                'order_submodule' => 10,
                'module_id' => $module->id
            ]);
        }
        foreach ($modules3 as $module){
            factory(SubModule::class)->create([
                'name' => 'INTRODUCCIÓN',
                'order_submodule' => 1,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'INFECCIÓN Y AGENTES INFECCIOSOS',
                'order_submodule' => 2,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'VIRUS DE LA INMUNODEFICIENCIA HUMANA',
                'order_submodule' => 3,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'PRINCIPIOS DE LAS PRUEBAS DE DETECCIÓN ANTI VIH',
                'order_submodule' => 4,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'SELECCIÓN DE LAS PRUEBAS DE DETECCIÓN ANTI VIH',
                'order_submodule' => 5,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'UTILIZACIÓN DE LAS PRUEBAS DE DETECCIÓN ANTI VIH',
                'order_submodule' => 6,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'GARANTÍA DE CALIDAD',
                'order_submodule' => 7,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'DETECCIÓN DE OTROS AGENTES INFECCIOSOS TRANSMISIBLES',
                'order_submodule' => 8,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'PLAN DE ACCIÓN',
                'order_submodule' => 9,
                'module_id' => $module->id
            ]);
        }
        foreach ($modules4 as $module){
            factory(SubModule::class)->create([
                'name' => 'GRUPOS SANGUÍNEOS ABO',
                'order_submodule' => 1,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'BASES GENÉTICAS DE LOS GRUPOS SANGUÍNEOS ABO',
                'order_submodule' => 2,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'DEMOSTRACIÓN DE LOS GRUPOS SANGUÍNEOS ABO',
                'order_submodule' => 3,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'DESARROLLO Y DISTRIBUCIÓN DE LOS GRUPOS',
                'order_submodule' => 4,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'SUBGRUPOS DEL ANTÍGENO A',
                'order_submodule' => 5,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'ANTI AB Y ANTI A',
                'order_submodule' => 6,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'ESTADO SECRETOR',
                'order_submodule' => 7,
                'module_id' => $module->id
            ]);
            factory(SubModule::class)->create([
                'name' => 'ANTI A Y ANTI B IGM E IGG',
                'order_submodule' => 8,
                'module_id' => $module->id
            ]);
        }
    }
}
