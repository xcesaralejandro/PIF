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
            $table->integer('co_id') ->unsigned();
            $table->string('us_email',150);
            $table->string('us_contrasenia',250);
            $table->string('us_nombres',150);
            $table->string('us_apellido_paterno',80);
            $table->string('us_apellido_materno',80);
            $table->string('us_sexo',15);
            $table->date('us_fecha_nacimiento');
            $table->integer('us_peso');
            $table->integer('us_estatura');
            $table->enum('us_tipo_usuario',['cliente','administrador'])->default('cliente');
            $table->date('us_fecha_caducacion');
            $table->enum('us_estado',[0,1])->default(1);
            $table->rememberToken();
            $table->timestamps();

            // FOREIGN KEY
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
