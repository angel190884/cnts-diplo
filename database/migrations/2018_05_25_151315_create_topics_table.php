<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->unsignedTinyInteger('order_topic');
            $table->string('slug')->unique();
            $table->unsignedInteger('sub_module_id');
            $table->foreign('sub_module_id')->references('id')->on('sub_modules')->onDelete('cascade');
            $table->string('file_topic')->default('content/test.pdf');
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
        Schema::dropIfExists('topics');
    }
}
