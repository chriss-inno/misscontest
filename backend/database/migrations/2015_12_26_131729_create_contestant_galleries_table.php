<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestantGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestant_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contestant_id');
            $table->string('gallery_path');
            $table->integer('position');
            $table->string('created_by');
            $table->dateTime('publish_up');
            $table->dateTime('publish_down');
            $table->integer('hits');
            $table->integer('access');
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
        Schema::drop('contestant_galleries');
    }
}
