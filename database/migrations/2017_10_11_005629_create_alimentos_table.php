<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ct_id')->unsigned();
            $table->string('al_nombre',150);
            $table->integer('al_kcal');
            $table->integer('al_gramos');
            $table->float('al_proteina');
            $table->float('al_lipidos');
            $table->float('al_carbohidratos');
            $table->timestamps();

            // FOREIGN KEY 
            $table->foreign('ct_id')->references('id')->on('categoriasAlimentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimentos');
    }
}
