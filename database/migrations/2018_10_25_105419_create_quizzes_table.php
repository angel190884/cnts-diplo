<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('course_id');
            $table->foreign('course_id')
                ->references('id')
                ->on('courses');
            $table->dateTime('end');
            $table->unsignedInteger('number_questions');
            $table->unsignedInteger('min_score');
            $table->boolean('active')->default(true);
            $table->boolean('published')->default(false);
            $table->unsignedInteger('hours')->default(2);
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
        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropForeign(['course_id']);
        });
        
        Schema::dropIfExists('quizzes');
    }
}
