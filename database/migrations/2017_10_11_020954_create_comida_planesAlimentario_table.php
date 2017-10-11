<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComidaPlanesAlimentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comida_planesAlimentario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pa_id')->unsigned();
            $table->integer('cm_id')->unsigned();
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('pa_id')->references('id')->on('planesAlimentarios')->onDelete('cascade');
            $table->foreign('cm_id')->references('id')->on('comidas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comida_planesAlimentario');
    }
}
