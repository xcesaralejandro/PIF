<?php

use Illuminate\Database\Seeder;

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
        ]);

        // CATEGORIAS
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '1',
            'ct_nombre' => 'Huevos',
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
        ]);

        DB::table('alimentos')->insert([
			'ct_id'            => '1',
			'al_nombre'        => 'Huevo cocido',
			'al_gramos'        => 88,
			'al_kcal'          => 147,
			'al_proteina'      => 12.3,
			'al_lipidos'       => 3.1,
			'al_carbohidratos' => 0.7,
        ]);
    }
}
