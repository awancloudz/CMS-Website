<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category')->unsigned();
            $table->string('title');
            $table->string('link');
            $table->text('description');
            $table->string('picture')->nullable;
            $table->enum('active', ['Y','N']);
            $table->text('tags');
            $table->integer('hits');
            $table->timestamps();
        });
        Schema::table('comments', function(Blueprint $table) {
            $table->foreign('id_post')
                ->references('id')
                ->on('post')
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
        Schema::table('comments', function(Blueprint $table) {
            $table->dropForeign('comments_id_post_foreign');
        });

        Schema::drop('post');
    }
}
