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
            $table->string('reference_no',20);
            $table->string('contestant_name');
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->integer('region_id');
            $table->integer('district_id');
            $table->string('city')->nullable();
            $table->string('zone')->nullable();
            $table->string('address')->nullable();
            $table->integer('category_id')->nullable();
            $table->date('registration_date');
            $table->mediumText('profile_note')->nullable();
            $table->string('profile_image')->nullable();;
            $table->string('status')->nullable();;
            $table->date('dob')->nullable();;
            $table->string('blocked')->default('No');
            $table->integer('contest_year');
            $table->integer('hints');
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
