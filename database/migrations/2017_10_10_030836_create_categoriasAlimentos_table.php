<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoriasAlimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ga_id')->unsigned();
            $table->string('ct_nombre',100);
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('ga_id')->references('id')->on('gruposAlimentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoriasAlimentos');
    }
}
