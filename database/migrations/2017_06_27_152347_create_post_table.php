<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
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
            $table->string('title',255);
            //$table->integer('category_id')->unsigned()->default(0);
            $table->text('text');
            //$table->integer('user_id')->unsigned()->default(1);
            $table->string('img');
            $table->float('rank');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('deslikes')->default(0);
            //$table->integer('news')->default(0);
            //$table->integer('video')->default(0);
            //$table->integer('planets_id')->default(0);
            //$table->integer('solar_system_id')->default(0);
            $table->text('keywords');
            $table->text('description');
            $table->text('tags');
            $table->integer('public')->default(1);

            //$table->foreign('id')->references('post_id')->on('comment');
            //$table->foreign('planets_id')->references('id')->on('planet');
            //$table->foreign('solar_system_id')->references('id')->on('solar_system');
            //$table->foreign('user_id')->references('id')->on('user');
            //$table->foreign('category_id')->references('id')->on('category');

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
        Schema::dropIfExists('post');
    }
}
