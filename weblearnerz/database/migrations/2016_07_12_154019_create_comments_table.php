<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
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
            $table -> integer('user_id') -> unsigned() ->default(0);
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table -> integer('post_id') -> unsigned() ->default(0);
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('comment');
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
        Schema::drop('comments');
    }
}
