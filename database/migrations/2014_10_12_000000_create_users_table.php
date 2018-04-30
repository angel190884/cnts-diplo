<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name')->default('xxx');
            $table->string('email')->unique();
            $table->string('avatar')->default('no_user.png');
            $table->string('password');

            $table->string('curp')->nullable();
            $table->string('rfc')->nullable();
            $table->string('homoclave')->nullable();



            $table->string('calle')->nullable();
            $table->string('colonia')->nullable();
            $table->string('municipio')->nullable();
            $table->string('entidad')->nullable();
            $table->string('cp')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('fax')->nullable();

            $table->string('titulo')->nullable();
            $table->string('cedula')->nullable();
            $table->string('institucion')->nullable();
            $table->date('date_examen_profesional')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('especialidad_inst')->nullable();
            $table->string('maestria')->nullable();
            $table->string('maestria_inst')->nullable();
            $table->string('doctorado')->nullable();
            $table->string('doctorado_inst')->nullable();
            $table->string('trabajo_inst')->nullable();
            $table->string('cargo')->nullable();
            $table->string('file_titulo')->nullable();
            $table->string('file_cedula')->nullable();
            $table->string('file_carta')->nullable();



            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
