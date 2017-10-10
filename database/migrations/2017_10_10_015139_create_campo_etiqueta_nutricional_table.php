<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampoEtiquetaNutricionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campo_etiqueta_nutricional', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('en_id')->unsigned();
            $table->string('cen_nombre',256);
            $table->text('cen_descripcion',300);
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('en_id')->references('id')->on('etiquetanutricional')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campo_etiqueta_nutricional');
    }
}
