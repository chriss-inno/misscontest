<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestantQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestant_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_title');
            $table->string('question_type')->nullable();
            $table->string('question_category')->nullable();
            $table->integer('region_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('city')->nullable();
            $table->string('zone')->nullable();
            $table->string('input_by');
            $table->string('status');
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
        Schema::drop('contestant_questions');
    }
}
