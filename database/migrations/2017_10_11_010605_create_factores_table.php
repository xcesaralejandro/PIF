<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ft_proteinas');
            $table->integer('ft_lipidos');
            $table->integer('ft_carbohidratos');
            $table->float('ft_g_proteinas',5,5);
            $table->float('ft_g_lipidos',5,5);
            $table->float('ft_g_carbohidratos',5,5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factores');
    }
}
