<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('nick_name')->nullable();
            $table->string('email')->unique();
            $table->integer('category_id')->nullable();
            $table->string('registration_date');
            $table->mediumText('profile_note');
            $table->string('status');
            $table->date('dob');
            $table->string('blocked')->default('No');
            $table->date('contest_year');
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
        Schema::drop('contestants');
    }
}
