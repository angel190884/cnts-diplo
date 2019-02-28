<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alternative');
            $table->unsignedInteger('question_id');
            $table->foreign('question_id')
                ->references('id')
                ->on('questions')->onDelete('cascade');
            $table->unsignedInteger('answer_id');
            $table->foreign('answer_id')
                ->references('id')
                ->on('question_options')->onDelete('cascade');
            $table->unsignedInteger('quiz_attempt_id');
            $table->foreign('quiz_attempt_id')
                ->references('id')
                ->on('quiz_attempts')->onDelete('cascade');
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
        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign(['question_id']);
            $table->dropForeign(['answer_id']);
            $table->dropForeign(['quiz_attempt_id']);
        });
        Schema::dropIfExists('answers');
    }
}
