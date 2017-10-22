<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
			'rg_id'                 => 1,
			'co_id'                 => 1,
			'us_email'              => 'nutricionista@frust.cl',
			'password'              => bcrypt('asd123'),
			'us_nombres'            => 'Nutricionista',
			'us_apellido_paterno'   => 'Frust',
			'us_apellido_materno'   => 'Frust',
			'us_sexo'               => 'M',
			'us_fecha_nacimiento'   => '2017-10-10',
			'us_peso'               => 0,
			'us_estatura'           => 0,
			'us_tipo_usuario'       => 'nutricionista',
			'us_fecha_caducacion'   => '2999-12-12',
			'us_estado'             => 1,
			'us_rut'				=>'00000000-0',
			'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('users')->insert([
			'rg_id'                 => 1,
			'co_id'                 => 1,
			'us_email'              => 'admin@frust.cl',
			'password'              => bcrypt('asd123'),
			'us_nombres'            => 'Administrador',
			'us_apellido_paterno'   => 'Frust',
			'us_apellido_materno'   => 'Frust',
			'us_sexo'               => 'M',
			'us_fecha_nacimiento'   => '2017-10-10',
			'us_peso'               => 0,
			'us_estatura'           => 0,
			'us_tipo_usuario'       => 'administrador',
			'us_fecha_caducacion'   => '2999-12-12',
			'us_estado'             => 1,
			'us_rut'				=>'00000000-0',
			'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
			'rg_id'                 => 1,
			'co_id'                 => 1,
			'us_email'              => 'cesar.mcid@gmail.com',
			'password'              => bcrypt('waskjasxd123'),
			'us_nombres'            => 'César Alejandro',
			'us_apellido_paterno'   => 'Mora',
			'us_apellido_materno'   => 'Cid',
			'us_sexo'               => 'M',
			'us_fecha_nacimiento'   => '1995-12-20',
			'us_peso'               => 75,
			'us_estatura'           => 180,
			'us_tipo_usuario'       => 'cliente',
			'us_fecha_caducacion'   => '2999-12-12',
			'us_estado'             => 1,
			'us_rut'				=>'19121367-0',
			'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

       
    }
}
