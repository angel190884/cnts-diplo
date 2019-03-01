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
                        'order_topic' => 2,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_2_Módulos.pdf'
                    ]);
                    $name = 'PAPEL DEL TUTOR';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 3,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_4_Papel_del_Tutor.pdf'
                    ]);
                    $name = 'EVALUACIÓN';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 4,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_5_Evaluación.pdf'
                    ]);
                    $name = 'MÓDULO INTRODUCTORIO GUÍAS Y PRINCIPIOS PARA UNA PRÁCTICA TRANSFUSIONAL SEGURA';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 5,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_6_Módulo_introductorio_Guías_y_principios_para_una_práctica_transfusional_segura.pdf'
                    ]);
                    $name = 'OBJETIVOS DEL MÓDULO';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 6,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_7_Objetivos_del_Módulo.pdf'
                    ]);
                    $name = 'PLANIFICACIÓN DEL ESTUDIO';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 7,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_1_introducción/1_8_Planificación_del_estudio.pdf'
                    ]);


            $subModule = factory(SubModule::class)->create([
                'name' => 'PROFESIONALISMO',
                'order_submodule' => 2,
                'module_id' => $module->id
            ]);
                    $name = 'PAPEL DEL PERSONAL DE ENFERMERÍA EN LA DONACIÓN DE SANGRE';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_2_profesionalismo/2_1_Papel_del_personal_de_enfermería_en_la_donación_de_sangre.pdf'
                    ]);
                    $name = 'PAPEL DEL PERSONAL TÉCNICO EN LOS SERVICIOS DE MEDICINA TRANSFUNCIONAL';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 2,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_2_profesionalismo/2_2_Papel_del_personal_técnico_en_los_servicios_de_medicina_transfusional.pdf'
                    ]);
                    $name = 'CONFIDENCIALIDAD';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 3,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_2_profesionalismo/2_3_Confidencialidad.pdf'
                    ]);
                    $name = 'CONDUCTA Y VESTIMENTA';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 4,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_2_profesionalismo/2_4_Conducta_y_vestimenta.pdf'
                    ]);
                    $name = 'ORGANIZACIONES PROFESIONALES';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 5,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_2_profesionalismo/2_5_Organizaciones_profesionales.pdf'
                    ]);

            $subModule = factory(SubModule::class)->create([
                'name' => 'PROCEDIMIENTOS DE SEGURIDAD',
                'order_submodule' => 3,
                'module_id' => $module->id
            ]);
                    $name = 'RESPONSABILIDAD POR LA SEGURIDAD';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_3_procedimientos_de_seguridad/3_1_Responsabilidad_por_la_seguridad.pdf'
                    ]);
                    $name = 'IDENTIFICACIÓN DE LOS RIESGOS POTENCIALES';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 2,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_3_procedimientos_de_seguridad/3_2_Identificación_de_los_riesgos_potenciales.pdf'
                    ]);
                    $name = 'ROPA Y EQUIPOS PROTECTORES';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 3,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_3_procedimientos_de_seguridad/3_3_Ropa_y_equipos_protectores.pdf'
                    ]);
                    $name = 'ENVIO DEL MATERIAL DESDE LAS UNIDADES MÓVILES HASTA EL BANCO DE SANGRE';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 4,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_3_procedimientos_de_seguridad/3_4_Envío_del_material_desde_las_unidades_móviles_hasta_el_banco_de_sangre.pdf'
                    ]);
                    $name = 'ENVÍO DE MUESTRAS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 5,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_3_procedimientos_de_seguridad/3_5_Envío_de_muestras.pdf'
                    ]);
                    $name = 'ELIMINACIÓN SEGURA DE RESIDUOS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 6,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_3_procedimientos_de_seguridad/3_6_Eliminación_segura_de_residuos.pdf'
                    ]);
                    $name = 'PROCEDIMIENTOS DE DESINFECCIÓN';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 7,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_3_procedimientos_de_seguridad/3_7_Procedimientos_de_desinfección.pdf'
                    ]);

            $subModule = factory(SubModule::class)->create([
                'name' => 'CALIDAD Y GARANTÍA DE CALIDAD',
                'order_submodule' => 4,
                'module_id' => $module->id
            ]);
                    $name = 'CALIDAD';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_4_calidad_y_garantia_de_calidad/4_1_Calidad.pdf'
                    ]);
                    $name = 'NECESIDADES DE CALIDAD';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 2,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_4_calidad_y_garantia_de_calidad/4_2_Necesidades_de_calidad.pdf'
                    ]);
                    $name = 'GARANTÍA Y CONTROL DE CALIDAD';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 3,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_4_calidad_y_garantia_de_calidad/4_3_Garantía_y_Control_de_calidad.pdf'
                    ]);
                    $name = 'PROCEDIMIENTOS ESTÁNDAR';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 4,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_4_calidad_y_garantia_de_calidad/4_4_Procedimientos_estándar.pdf'
                    ]);
                    $name = 'REGISTROS Y ARCHIVOS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 5,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_4_calidad_y_garantia_de_calidad/4_5_Registros_y_archivos.pdf'
                    ]);
                    $name = 'MONITOREO DE LA CALIDAD';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 6,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_4_calidad_y_garantia_de_calidad/4_6_Monitoreo_de_la_calidad.pdf'
                    ])
                    ;$name = 'AUDITORÍAS DE CALIDAD';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 7,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_4_calidad_y_garantia_de_calidad/4_7_Auditorías_de_calidad.pdf'
                    ]);
                    $name = 'RESPONSABILIDAD';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 8,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_4_calidad_y_garantia_de_calidad/4_8_Responsabilidad.pdf'
                    ]);

            $subModule = factory(SubModule::class)->create([
                'name' => 'CONSERVACIÓN CORRECTA DE SANGRE Y PLASMA',
                'order_submodule' => 5,
                'module_id' => $module->id
            ]);
                    $name = 'IMPORTANCIA DE LA CONSERVACIÓN CORRECTA';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_5_conservacion_correcta_de_sangre_y_plasma/5_1_Importancia_de_la_conservación_correcta.pdf'
                    ]);
                    $name = 'CADENA DE FRÍO';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 2,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_5_conservacion_correcta_de_sangre_y_plasma/5_2_Cadena_de_frío.pdf'
                    ]);
                    $name = 'CONSERVACIÓN DE LA SANGRE';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 3,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_5_conservacion_correcta_de_sangre_y_plasma/5_3 _Conservación_de_la_sangre.pdf'
                    ]);
                    $name = 'TRANSPORTE DE LA SANGRE';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 4,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_5_conservacion_correcta_de_sangre_y_plasma/5_4_Transporte_de_la_sangre.pdf'
                    ]);
                    $name = 'RECEPCIÓN EN EL BANCO DE SANGRE';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 5,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_5_conservacion_correcta_de_sangre_y_plasma/5_5_Recepción_en_el_banco_de_sangre.pdf'
                    ]);
                    $name = 'TRANSPORTE DENTRO DEL BANCO DE SANGRE O EL HOSPITAL';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 6,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_5_conservacion_correcta_de_sangre_y_plasma/5_6_Transporte_dentro_del_banco_de_sangre_o_el_hospital.pdf'
                    ]);
                    $name = 'CONSERVACIÓN Y TRANSPORTE DEL PLASMA';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 7,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_5_conservacion_correcta_de_sangre_y_plasma/5_7_Conservación_y_transporte_del_plasma.pdf'
                    ]);
            $subModule = factory(SubModule::class)->create([
                'name' => 'MANTENIMIENTO DE LA CADENA DE FRÍO',
                'order_submodule' => 6,
                'module_id' => $module->id
            ]);
                    $name = 'MANTENIMIENTO DEL REFRIGERADOR';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_6_mantenimiento_de_la_cadena_de_frio/6_1_Mantenimiento_del_refrigerador.pdf'
                    ]);
                    $name = 'IDENTIFICACIÓN Y SOLUCIÓN DE PROBLEMAS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 2,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_6_mantenimiento_de_la_cadena_de_frio/6_2_Identificación_y_resolución_de_problemas.pdf'
                    ]);
                    $name = 'CORTES DE ENERGÍA';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 3,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_6_mantenimiento_de_la_cadena_de_frio/6_3_Cortes_de_energía.pdf'
                    ]);

            $subModule = factory(SubModule::class)->create([
                'name' => 'PREPARACIÓN DE SOLUCIONES BÁSICAS',
                'order_submodule' => 7,
                'module_id' => $module->id
            ]);
                    $name = 'SOLUCIONES DE SULFATO DE COBRE';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_7_preparacion_de_soluciones_basicas/7_1_Soluciones_de_sulfato_de_cobre.pdf'
                    ]);
                    $name = 'SOLUCIONES ANTISÉPTICAS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 2,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_7_preparacion_de_soluciones_basicas/7_2_Soluciones_antisépticas.pdf'
                    ]);
                    $name = 'SOLUCIONES SALINAS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 3,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_7_preparacion_de_soluciones_basicas/7_3_Soluciones_salinas.pdf'
                    ]);
                    $name = 'SOLUCIONES DESINFECTANTES';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 4,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_7_preparacion_de_soluciones_basicas/7_4_Soluciones_desinfectantes.pdf'
                    ]);

            $subModule = factory(SubModule::class)->create([
                'name' => 'CONTROL DE EXISTENCIAS',
                'order_submodule' => 8,
                'module_id' => $module->id
            ]);
                    $name = 'CONTROL DE EXISTENCIAS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_8_control_de_existencias/8_4_Control_de_existencias.pdf'
                    ]);
                    $name = 'SOLICITUD DE SUMINISTROS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 2,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_8_control_de_existencias/8_3_Solicitud_de_suministros.pdf'
                    ]);
                    $name = 'PLANTILLA DE EXISTENCIAS';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 3,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_8_control_de_existencias/8_2_Plantilla_de_existencias.pdf'
                    ]);
                    $name = 'MATERIAL PERECEDERO';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 4,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_8_control_de_existencias/8_1_Material_perecedero.pdf'
                    ]);

            $subModule = factory(SubModule::class)->create([
                'name' => 'PLAN DE ACCIÓN',
                'order_submodule' => 9,
                'module_id' => $module->id
            ]);
                    $name = 'REVISIÓN DE LOS AVANCES';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 1,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_9_plan_de_accion/9_1_Revisión_de_los_avances.pdf'
                    ]);
                    $name = 'EVALUACIÓN DEL PLAN DE ACCIÓN';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 2,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_9_plan_de_accion/9_2_Evaluación_del_plan_de_acción.pdf'
                    ]);
                    $name = 'IMPLEMENTACIÓN DEL PLAN DE ACCIÓN';
                    factory(\App\Topic::class)->create([
                        'name'  => $name,
                        'order_topic' => 3,
                        'slug'  => Str::slug($faker->randomNumber($nbDigits = 8, $strict = false). '-'. $name),
                        'sub_module_id' => $subModule->id,
                        'file_topic' => 'content/mod_1_introductorio/submod_9_plan_de_accion/9_3_Implementación_del_plan_de_acción.pdf'
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
