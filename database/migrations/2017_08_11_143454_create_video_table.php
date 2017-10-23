<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('video', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('img');
            $table->text('link');
            $table->text('text');
            $table->float('rank');
            $table->integer('rank_count')->unsigned()->default(0);
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('deslikes')->default(0);
            $table->text('keywords');
            $table->text('description');
            $table->integer('public')->default(1);
            $table->integer('user_id')->unsigned()->default(NULL);
            $table->foreign('user_id')->references('id')->on('user');

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
        Schema::dropIfExists('video');
    }
}
