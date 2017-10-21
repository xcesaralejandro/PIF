<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleAlimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_alimento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sbc_id')->unsigned();
            $table->integer('pa_id')->unsigned();
            $table->string('rga_nombre',150);
            $table->integer('rga_gramos');
            $table->integer('rga_kcal');
            $table->float('rga_proteina');
            $table->float('rga_lipidos');
            $table->float('rga_carbohidratos');
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('sbc_id')->references('id')->on('subcomidas')->onDelete('cascade');
            $table->foreign('pa_id')->references('id')->on('planesalimentarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_alimento');
    }
}
