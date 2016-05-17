<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contest_name');
            $table->string('description')->default();
            $table->string('main_organiser');
            $table->string('start_date')->default();
            $table->string('end_date')->default();
            $table->string('event_location')->default();
            $table->string('address')->default();
            $table->string('phone1')->default();
            $table->string('phone2')->default();
            $table->string('phone3')->default();
            $table->string('default')->default('No');
            $table->string('status')->default('enabled');
            $table->string('input_by')->default();
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
        Schema::drop('contests');
    }
}
