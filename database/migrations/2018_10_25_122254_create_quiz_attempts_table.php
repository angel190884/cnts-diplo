<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizAttemptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alternative')->nullable();
            $table->unsignedInteger('quiz_id');
            $table->foreign('quiz_id')
                ->references('id')
                ->on('quizzes');
            $table->unsignedInteger('attempt');
            $table->unsignedInteger('score');
            $table->boolean('active')->default(true);
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
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
        Schema::table('quiz_attempts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['quiz_id']);
        });
        Schema::dropIfExists('quiz_attempts');
    }
}
