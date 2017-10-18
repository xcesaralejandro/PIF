<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('us_id')->unsigned();
            $table->string('cm_nombre',30);
            $table->enum('cm_estado',[0,1])->default(1);
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
        Schema::dropIfExists('comidas');
    }
}
