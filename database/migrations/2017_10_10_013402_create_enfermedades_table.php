<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('us_id')->unsigned();
            $table->string('ef_nombre',50);
            $table->string('ef_descripcion',256);
            $table->string('ef_url',256);
            $table->string('ef_url_imagen',256);
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
        Schema::dropIfExists('enfermedades');
    }
}
