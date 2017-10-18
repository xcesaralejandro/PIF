<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubComidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subComidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cm_id')->unsigned();
            $table->string('sbc_nombre');
            $table->integer('sbc_porcentaje');
            $table->timestamps();
            // FOREIGN KEY 
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
        Schema::dropIfExists('subComidas');
    }
}
