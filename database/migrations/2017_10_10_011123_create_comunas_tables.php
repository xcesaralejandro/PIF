<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rg_id')->unsigned();
            $table->string('co_nombre',256);
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('rg_id')->references('id')->on('regiones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunas');
    }
}
