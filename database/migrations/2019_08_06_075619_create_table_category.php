<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('link');
            $table->text('description');
            $table->string('picture')->nullable;
            $table->enum('active', ['Y','N']);
            $table->text('tags');
            $table->integer('hits');
            $table->timestamps();
        });
        Schema::table('post', function(Blueprint $table) {
            $table->foreign('id_category')
                ->references('id')
                ->on('category')
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
        Schema::table('post', function(Blueprint $table) {
            $table->dropForeign('post_id_category_foreign');
        });

        Schema::drop('category');
    }
}
