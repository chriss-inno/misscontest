<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_setups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('description')->default();
            $table->string('postal_address')->default();
            $table->string('physical_address')->default();
            $table->string('contact_person')->default();
            $table->string('contact_person_title')->default();
            $table->string('website')->default();
            $table->string('email')->default();
            $table->string('phone1')->default();
            $table->string('phone2')->default();
            $table->string('phone3')->default();
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
        Schema::drop('site_setups');
    }
}
