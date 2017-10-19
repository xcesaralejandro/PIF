<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'rg_id'               => 1,
			'co_id'               => 1,
			'us_email'            => 'admin@frust.cl',
			'password'            => bcrypt('asd123'),
			'us_nombres'          => 'Administrador',
			'us_apellido_paterno' => 'Frust',
			'us_apellido_materno' => 'Frust',
			'us_sexo'             => 'M',
			'us_fecha_nacimiento' => '2017-10-10',
			'us_peso'             => 0,
			'us_estatura'         => 0,
			'us_tipo_usuario'     => 'administrador',
			'us_fecha_caducacion' => '2999-12-12',
			'us_estado'           => 1,
        ]);
    }
}
