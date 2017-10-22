<?php

use Illuminate\Database\Seeder;

class factoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factores')->insert([
			'us_id'            => 1,
			'ft_proteinas'     => 20,
			'ft_lipidos'       => 25,
			'ft_carbohidratos' => 55,
        ]);
    }
}
