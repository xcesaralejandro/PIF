<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rg_id') ->unsigned();
            $table->integer('co_id') ->unsigned();
            $table->string('us_email',150);
            $table->string('password',250);
            $table->string('us_nombres',150);
            $table->string('us_apellido_paterno',80);
            $table->string('us_apellido_materno',80);
            $table->string('us_sexo',15);
            $table->date('us_fecha_nacimiento');
            $table->integer('us_peso');
            $table->integer('us_estatura');
            $table->enum('us_tipo_usuario',['cliente','administrador','nutricionista'])->default('cliente');
            $table->date('us_fecha_caducacion');
            $table->string('us_rut',10);
            $table->string('us_img_titulo',256)->nullable();
            $table->string('us_img_carnet_f',256)->nullable();
            $table->string('us_img_carnet_p',256)->nullable();
            $table->string('us_registro_profesion',256)->nullable();
            $table->integer('us_id_nutricionista')->default(1);
            $table->enum('us_estado',[0,1])->default(1);
            $table->rememberToken();
            $table->timestamps();

            // FOREIGN KEY
             $table->foreign('rg_id')->references('id')->on('regiones')->onDelete('cascade');
            $table->foreign('co_id')->references('id')->on('comunas')->onDelete('cascade');
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
