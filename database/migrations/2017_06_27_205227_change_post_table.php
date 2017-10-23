<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post', function (Blueprint $table) {
            //$table->foreign('id')->references('post_id')->on('comment');
            $table->integer('planets_id')->unsigned()->default(NULL);
            $table->foreign('planets_id')->references('id')->on('planet');
            $table->integer('solar_system_id')->unsigned()->default(NULL);
            $table->foreign('solar_system_id')->references('id')->on('solar_system');
            $table->integer('user_id')->unsigned()->default(NULL);
            $table->foreign('user_id')->references('id')->on('user');
            $table->integer('category_id')->unsigned()->default(NULL);
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post', function (Blueprint $table) {
            //
        });
    }
}
