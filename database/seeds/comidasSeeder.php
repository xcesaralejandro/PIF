<?php

use Illuminate\Database\Seeder;

class comidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comidas')->insert([
			'us_id'     => 1,
			'cm_nombre' => 'Comida inicial',
			'cm_estado' => 1,
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Desayuno',
			'sbc_porcentaje' => 20,
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Primera colacion',
			'sbc_porcentaje' => 10,
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Almuerzo',
			'sbc_porcentaje' => 25,
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Segunda colacion',
			'sbc_porcentaje' => 10,
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Once',
			'sbc_porcentaje' => 15,
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Cena',
			'sbc_porcentaje' => 20,
        ]);
    }
}
