<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class alimentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// GRUPO ALIMENTO
        DB::table('gruposalimentos')->insert([
            'ga_nombre' => 'Huevos, Lácteos y Helados',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // CATEGORIAS
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '1',
            'ct_nombre' => 'Huevos',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        // Alimentos
        DB::table('alimentos')->insert([
			'ct_id'            => '1',
			'al_nombre'        => 'Huevo clara',
			'al_gramos'        => 100,
			'al_kcal'          => 53,
			'al_proteina'      => 11.1,
			'al_lipidos'       => 0.2,
			'al_carbohidratos' => 0.7,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('alimentos')->insert([
			'ct_id'            => '1',
			'al_nombre'        => 'Huevo cocido',
			'al_gramos'        => 88,
			'al_kcal'          => 147,
			'al_proteina'      => 12.3,
			'al_lipidos'       => 3.1,
			'al_carbohidratos' => 0.7,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('alimentos')->insert([
            'ct_id'            => '1',
            'al_nombre'        => 'Alimento uno',
            'al_gramos'        => 100,
            'al_kcal'          => 162.5,
            'al_proteina'      => 8.1,
            'al_lipidos'       => 4.5,
            'al_carbohidratos' => 22.3,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('alimentos')->insert([
            'ct_id'            => '1',
            'al_nombre'        => 'Alimento dos',
            'al_gramos'        => 100,
            'al_kcal'          => 162.5,
            'al_proteina'      => 8.1,
            'al_lipidos'       => 4.5,
            'al_carbohidratos' => 22.3,
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
