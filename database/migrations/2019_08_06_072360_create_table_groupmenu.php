<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGroupmenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupmenu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->enum('active', ['Y','N']);
            $table->timestamps();
        });
        Schema::table('navmenu', function(Blueprint $table) {
            $table->foreign('id_groupmenu')
                ->references('id')
                ->on('groupmenu')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('navmenu', function(Blueprint $table) {
            $table->dropForeign('navmenu_id_groupmenu_foreign');
        });

        Schema::drop('groupmenu');
    }
}
