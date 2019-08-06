<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNavmenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navmenu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_groupmenu')->unsigned();
            $table->string('title');
            $table->string('link');
            $table->enum('active', ['Y','N']);
            $table->integer('ordernumber');
            $table->integer('parent');
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
        Schema::drop('navmenu');
    }
}
