<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_post')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->text('comment');
            $table->timestamps();
        });
        Schema::table('replycomment', function(Blueprint $table) {
            $table->foreign('id_comments')
                ->references('id')
                ->on('comments')
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
        Schema::table('replycomment', function(Blueprint $table) {
            $table->dropForeign('replycomment_id_comments_foreign');
        });

        Schema::drop('comments');
    }
}
