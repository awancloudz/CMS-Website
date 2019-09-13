<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('webname');
            $table->string('weburl');
            $table->string('metadescription');
            $table->string('keyword');
            $table->string('owner');
            $table->string('email');
            $table->string('phone');
            $table->string('fax');
            $table->text('address');
            $table->string('geocode');
            $table->string('favicon')->nullable;
            $table->string('logo')->nullable;
            $table->string('country');
            $table->string('region');
            $table->string('timezone');
            $table->enum('maintenance', ['Y','N']);
            $table->enum('registration', ['Y','N']);
            $table->enum('comment', ['Y','N']);
            $table->integer('itemperpage');
            $table->string('googleanalytics');
            $table->string('recaptchasitekey');
            $table->string('recaptchasecretkey');
            $table->string('mailprotocol');
            $table->string('mailhostname');
            $table->string('mailusername');
            $table->string('mailpassword');
            $table->string('mailport');
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
        Schema::drop('settings');
    }
}
