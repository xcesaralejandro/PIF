<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesAlimentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes_alimentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ft_id')->unsigned();
            $table->integer('na_id')->unsigned();
            $table->integer('us_id')->unsigned();
            $table->string('pa_apodo',50);
            $table->date('pa_fecha_caducacion');
            $table->enum('pa_estado',[0,1])->default(1);
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('ft_id')->references('id')->on('factores')->onDelete('cascade');
            $table->foreign('na_id')->references('id')->on('nuevos_avances')->onDelete('cascade');
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
        Schema::dropIfExists('planes_alimentarios');
    }
}
