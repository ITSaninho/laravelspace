<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolarSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solar_system', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('parent_id')->default(0);
            $table->string('name',255);
            $table->text('keywords');
            $table->text('description');

            $table->timestamps();

            //$table->foreign('id')->references('solar_system_id')->on('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solar_system');
    }
}
