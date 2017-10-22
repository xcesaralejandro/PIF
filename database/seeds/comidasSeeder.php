<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
            'us_id'      => 1,
            'cm_nombre'  => 'Comida inicial',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Desayuno',
			'sbc_porcentaje' => 20,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Primera colacion',
			'sbc_porcentaje' => 10,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Almuerzo',
			'sbc_porcentaje' => 25,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Segunda colacion',
			'sbc_porcentaje' => 10,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Once',
			'sbc_porcentaje' => 15,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('subcomidas')->insert([
			'cm_id'          => 1,
			'sbc_nombre'     => 'Cena',
			'sbc_porcentaje' => 20,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
