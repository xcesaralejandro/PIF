<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComidaAlimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comida_alimento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('al_id')->unsigned();
            $table->integer('cm_id')->unsigned();
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('al_id')->references('id')->on('alimentos')->onDelete('cascade');
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
        Schema::dropIfExists('comida_alimento');
    }
}
