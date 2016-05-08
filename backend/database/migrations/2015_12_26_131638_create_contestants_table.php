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
<<<<<<< HEAD
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('nick_name')->nullable();
            $table->string('full_name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();;
=======
            $table->string('reference_no',20);
            $table->string('contestant_name');
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
>>>>>>> e213ec86866ec1fb505e1c2cfaba6a0c5ccb7467
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
