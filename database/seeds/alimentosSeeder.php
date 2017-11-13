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
            'ga_nombre' => 'Constructores',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('gruposalimentos')->insert([
            'ga_nombre' => 'Energéticos',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('gruposalimentos')->insert([
            'ga_nombre' => 'Reguladores',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('gruposalimentos')->insert([
            'ga_nombre' => 'Bebestibles',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('gruposalimentos')->insert([
            'ga_nombre' => 'Comidad preparadas',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // CATEGORIAS
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '5',
            'ct_nombre' => 'Sopas',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '4',
            'ct_nombre' => 'Acalóricas',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '4',
            'ct_nombre' => 'Refrescantes',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '3',
            'ct_nombre' => 'Frutas',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '3',
            'ct_nombre' => 'Cereales y derivados',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '2',
            'ct_nombre' => 'Grasas',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '1',
            'ct_nombre' => ' Carnes, pescados y huevos',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '3',
            'ct_nombre' => 'Verduras',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '2',
            'ct_nombre' => 'Frutos secos',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '1',
            'ct_nombre' => 'Leche y derivados',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '1',
            'ct_nombre' => 'Legumbres',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categoriasalimentos')->insert([
            'ga_id' => '5',
            'ct_nombre' => 'Secos',
            'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // Alimentos
        DB::table('alimentos')->insert([
         'ct_id'            => '7',
         'al_nombre'        => 'Huevo',
         'al_gramos'        => 100,
         'al_kcal'          => 60,
         'al_proteina'      => 4,
         'al_lipidos'       => 3,
         'al_carbohidratos' => 17,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '7',
         'al_nombre'        => 'Pescado a la plancha',
         'al_gramos'        => 100,
         'al_kcal'          => 114,
         'al_proteina'      => 3.8,
         'al_lipidos'       => 2.2,
         'al_carbohidratos' => 10.6,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '7',
         'al_nombre'        => 'Pechuga fileteada',
         'al_gramos'        => 100,
         'al_kcal'          => 40,
         'al_proteina'      => 8,
         'al_lipidos'       => 3,
         'al_carbohidratos' => 45,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '7',
         'al_nombre'        => 'Pechuga',
         'al_gramos'        => 100,
         'al_kcal'          => 36,
         'al_proteina'      => 4,
         'al_lipidos'       => 3,
         'al_carbohidratos' => 30,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '10',
         'al_nombre'        => 'Queso',
         'al_gramos'        => 100,
         'al_kcal'          => 416,
         'al_proteina'      => 28,
         'al_lipidos'       => 13,
         'al_carbohidratos' => 11.6,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '10',
         'al_nombre'        => 'Leche',
         'al_gramos'        => 100,
         'al_kcal'          => 205,
         'al_proteina'      => 3,
         'al_lipidos'       => 3.5,
         'al_carbohidratos' => 0.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '10',
         'al_nombre'        => 'Yogur',
         'al_gramos'        => 100,
         'al_kcal'          => 98,
         'al_proteina'      => 0.3,
         'al_lipidos'       => 2,
         'al_carbohidratos' => 0.6,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '9',
         'al_nombre'        => 'Nueces',
         'al_gramos'        => 100,
         'al_kcal'          => 182,
         'al_proteina'      => 15,
         'al_lipidos'       => 5,
         'al_carbohidratos' => 41.7,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
           'ct_id'            => '9',
           'al_nombre'        => 'Almendras',
           'al_gramos'        => 100,
           'al_kcal'          => 150,
           'al_proteina'      => 4.5,
           'al_lipidos'       => 6,
           'al_carbohidratos' => 50,
           'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
       ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '9',
         'al_nombre'        => 'avellanas',
         'al_gramos'        => 100,
         'al_kcal'          => 140,
         'al_proteina'      => 12,
         'al_lipidos'       => 7,
         'al_carbohidratos' => 45.3,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '5',
         'al_nombre'        => 'Arroz integral',
         'al_gramos'        => 100,
         'al_kcal'          => 227,
         'al_proteina'      => 7.5,
         'al_lipidos'       => 4.6,
         'al_carbohidratos' => 20.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '5',
         'al_nombre'        => 'Arroz blanco',
         'al_gramos'        => 100,
         'al_kcal'          => 290,
         'al_proteina'      => 4.5,
         'al_lipidos'       => 4.6,
         'al_carbohidratos' => 28.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '5',
         'al_nombre'        => 'Pan blanco',
         'al_gramos'        => 100,
         'al_kcal'          => 300,
         'al_proteina'      => 6.5,
         'al_lipidos'       => 9.6,
         'al_carbohidratos' => 28.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '5',
         'al_nombre'        => 'Pan molde',
         'al_gramos'        => 100,
         'al_kcal'          => 110,
         'al_proteina'      => 4.1,
         'al_lipidos'       => 2,
         'al_carbohidratos' => 19.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '5',
         'al_nombre'        => 'Avena',
         'al_gramos'        => 100,
         'al_kcal'          => 150,
         'al_proteina'      => 4.1,
         'al_lipidos'       => 2,
         'al_carbohidratos' => 19.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '5',
         'al_nombre'        => 'Tallarines',
         'al_gramos'        => 100,
         'al_kcal'          => 110,
         'al_proteina'      => 4.1,
         'al_lipidos'       => 2,
         'al_carbohidratos' => 19.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '4',
         'al_nombre'        => 'Manzana',
         'al_gramos'        => 100,
         'al_kcal'          => 91,
         'al_proteina'      => 7.5,
         'al_lipidos'       => 4.6,
         'al_carbohidratos' => 20.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '4',
         'al_nombre'        => 'Palta hass',
         'al_gramos'        => 100,
         'al_kcal'          => 73,
         'al_proteina'      => 10.8,
         'al_lipidos'       => 6.2,
         'al_carbohidratos' => 19.9,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '4',
         'al_nombre'        => 'Naranja',
         'al_gramos'        => 100,
         'al_kcal'          => 73,
         'al_proteina'      => 2.8,
         'al_lipidos'       => 6.2,
         'al_carbohidratos' => 19.9,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '4',
         'al_nombre'        => 'Platano',
         'al_gramos'        => 100,
         'al_kcal'          => 60,
         'al_proteina'      => 5.8,
         'al_lipidos'       => 6.2,
         'al_carbohidratos' => 19.9,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]); 
        DB::table('alimentos')->insert([
         'ct_id'            => '2',
         'al_nombre'        => 'Cafe caliente',
         'al_gramos'        => 100,
         'al_kcal'          => 45,
         'al_proteina'      => 0.1,
         'al_lipidos'       => 0.5,
         'al_carbohidratos' => 1,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '2',
         'al_nombre'        => 'Cafe helado',
         'al_gramos'        => 100,
         'al_kcal'          => 45,
         'al_proteina'      => 0.1,
         'al_lipidos'       => 0.5,
         'al_carbohidratos' => 1,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '2',
         'al_nombre'        => 'Te caliente',
         'al_gramos'        => 100,
         'al_kcal'          => 45,
         'al_proteina'      => 0.1,
         'al_lipidos'       => 0.5,
         'al_carbohidratos' => 1,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '2',
         'al_nombre'        => 'Te helado',
         'al_gramos'        => 100,
         'al_kcal'          => 45,
         'al_proteina'      => 0.1,
         'al_lipidos'       => 0.5,
         'al_carbohidratos' => 1,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '1',
         'al_nombre'        => 'Guiso de carne',
         'al_gramos'        => 100,
         'al_kcal'          => 182,
         'al_proteina'      => 7.5,
         'al_lipidos'       => 4.6,
         'al_carbohidratos' => 20.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '1',
         'al_nombre'        => 'Sopa de pollo',
         'al_gramos'        => 100,
         'al_kcal'          => 140,
         'al_proteina'      => 7.5,
         'al_lipidos'       => 4.6,
         'al_carbohidratos' => 20.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
        DB::table('alimentos')->insert([
         'ct_id'            => '1',
         'al_nombre'        => 'Carbonada',
         'al_gramos'        => 100,
         'al_kcal'          => 140,
         'al_proteina'      => 7.5,
         'al_lipidos'       => 4.6,
         'al_carbohidratos' => 20.8,
         'created_at' =>Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' =>Carbon::now()->format('Y-m-d H:i:s'),
     ]);
    }
}
