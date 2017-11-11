<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumosDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumosDiarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('us_id')->unsigned();
            $table->integer('pa_id')->unsigned();
            $table->integer('cs_ingesta_agua');
            $table->text('cs_alimentacion_familia',2000)->nullable();
            $table->text('cs_alimentos_extra',2000)->nullable();
            $table->date('cs_fecha');
            $table->timestamps();

            // FOREIGN  KEY
            $table->foreign('us_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pa_id')->references('id')->on('planesAlimentarios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumosDiarios');
    }
}
