<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamposEtiquetasNutricionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campos_etiquetas_nutricionales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('en_id')->unsigned();
            $table->string('cen_nombre',256);
            $table->text('cen_descripcion',300);
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('en_id')->references('id')->on('etiquetasnutricionales')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campos_etiquetas_nutricionales');
    }
}
