<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contestant_id');
            $table->string('contents');
            $table->string('reviewed_by');
            $table->dateTime('date_reviewed');
            $table->string('status')->default('pending');
            $table->string('approved_by');
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
        Schema::drop('visitors_reviews');
    }
}
