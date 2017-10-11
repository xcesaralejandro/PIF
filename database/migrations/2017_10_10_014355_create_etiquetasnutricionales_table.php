<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtiquetasNutricionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiquetasNutricionales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('us_id')->unsigned();
            $table->string('en_url_imagen',256);
            $table->string('en_titulo',100);
            $table->text('en_descripcion',1500);
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('us_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etiquetasNutricionales');
    }
}
