<?php

use Illuminate\Database\Seeder;

class regionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// --------------------------------------------------------------------------------------------
        DB::table('regiones')->insert([
            'rg_nombre' => 'Arica y Parinacota',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '1',
			'co_nombre' => 'Arica',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '1',
			'co_nombre' => 'Camarones',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '1',
			'co_nombre' => 'General Lagos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '1',
			'co_nombre' => 'Putre',
        ]);

		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Tarapacá',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '2',
			'co_nombre' => 'Alto Hospicio',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '2',
			'co_nombre' => 'Iquique',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '2',
			'co_nombre' => 'Camiña',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '2',
			'co_nombre' => 'Colchane',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '2',
			'co_nombre' => 'Huara',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '2',
			'co_nombre' => 'Pica',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '2',
			'co_nombre' => 'Pozo Almonte',
        ]);


		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Antofagasta',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '3',
			'co_nombre' => 'Antofagasta',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '3',
			'co_nombre' => 'Mejillones',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '3',
			'co_nombre' => 'Sierra Gorda',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '3',
			'co_nombre' => 'Taltal',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '3',
			'co_nombre' => 'Calama',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '3',
			'co_nombre' => 'Ollagüe',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '3',
			'co_nombre' => 'San Pedro de Atacama',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '3',
			'co_nombre' => 'María Elena',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '3',
			'co_nombre' => 'Tocopilla',
        ]);
		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Atacama',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '4',
			'co_nombre' => 'Chañaral',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '4',
			'co_nombre' => 'Diego de Almagro',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '4',
			'co_nombre' => 'Caldera',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '4',
			'co_nombre' => 'Copiapó',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '4',
			'co_nombre' => 'Tierra Amarilla',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '4',
			'co_nombre' => 'Alto del Carmen',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '4',
			'co_nombre' => 'Freirina',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '4',
			'co_nombre' => 'Huasco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '4',
			'co_nombre' => 'Vallenar',
        ]);
		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Coquimbo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Canela',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Illapel',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Los Vilos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Salamanca',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Andacollo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Coquimbo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'La Higuera',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'La Serena',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Paihuano',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Vicuña',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Combarbalá',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Monte Patria',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Ovalle',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Punitaqui',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '5',
			'co_nombre' => 'Río Hurtado',
        ]);
		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Valparaíso',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Isla de Pascua',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Calle Larga',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Los Andes',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Rinconada de Los Andes',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'San Esteban',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Limache',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Olmué',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Quilpué',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Villa Alemana',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Cabildo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'La Ligua',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Papudo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Petorca',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Zapallar',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Hijuelas',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'La Calera',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'La Cruz',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Nogales',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Quillota',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Algarrobo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Cartagena',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'El Quisco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'El Tabo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'San Antonio',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Santo Domingo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Catemu',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Llaillay',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Panquehue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Putaendo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'San Felipe',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Santa María',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Casablanca',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Concón',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Juan Fernández',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Puchuncaví',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Quintero',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Valparaíso',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '6',
			'co_nombre' => 'Viña del Mar',
        ]);

		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Libertador General Bernardo OHiggins',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Codegua',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Coínco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Coltauco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Doñihue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Graneros',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Las Cabras',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Machalí',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Malloa',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Olivar',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Peumo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Pichidegua',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Quinta de Tilcoco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Rancagua',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Requínoa',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Rengo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'San Francisco de Mostazal',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'San Vicente de Tagua Tagua',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'La Estrella',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Litueche',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Marchigüe',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Navidad',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Paredones',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Pichilemu',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Chépica',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Chimbarongo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Lolol',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Nancagua',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Palmilla',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Peralillo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Placilla',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Pumanque',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'San Fernando',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '7',
			'co_nombre' => 'Santa Cruz',
        ]);
		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Maule',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Cauquenes',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Chanco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Pelluhue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Curicó',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Hualañé',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Licantén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Molina',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Rauco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Romeral',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Sagrada Familia',
        ]);
        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Teno',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Vichuquén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Colbún',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Linares',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Longaví',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Parral',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Retiro',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'San Javier de Loncomilla',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Villa Alegre Yerbas Buenas',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Constitución',
        ]);
        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Curepto',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Empedrado',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Maule',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Pelarco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Pencahue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Río Claro',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'San Clemente',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'San Rafael',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '8',
			'co_nombre' => 'Talca',
        ]);
		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Biobío',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Arauco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Cañete',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Contulmo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Curanilahue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Lebu',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Los Álamos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Tirúa',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Alto Biobío',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Antuco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Cabrero',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Laja',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Los Ángeles',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Mulchén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Nacimiento',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Negrete',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Quilaco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Quilleco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'San Rosendo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Santa Bárbara',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Tucapel',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Yumbel',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Chiguayante',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Concepción',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Coronel',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Florida',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Hualpén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Hualqui',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Lota',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Penco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'San Pedro de la Paz',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Santa Juana',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Talcahuano',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Tomé',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Bulnes',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Chillán',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Chillán Viejo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Cobquecura',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Coelemu',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Coihueco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'El Carmen',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Ninhue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Ñiquén',
        ]);
        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Pemuco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Pinto',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Portezuelo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Quillón',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Quirihue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Ránquil',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'San Carlos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'San Fabián',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'San Ignacio',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'San Nicolás',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Treguaco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '9',
			'co_nombre' => 'Yungay',
        ]);
		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Araucanía',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Carahue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Cholchol',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Cunco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Curarrehue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Freire',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Galvarino',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Gorbea',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Lautaro',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Loncoche',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Melipeuco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Nueva Imperial',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Padre Las Casas',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Perquenco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Pitrufquén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Pucón',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Saavedra',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Temuco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Teodoro Schmidt',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Toltén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Vilcún',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Villarrica',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Angol',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Collipulli',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Curacautín',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Ercilla',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Lonquimay',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Los Sauces',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Lumaco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Purén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Renaico',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Traiguén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '10',
			'co_nombre' => 'Victoria',
        ]);

		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Los Ríos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Futrono',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'La Unión',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Lago Ranco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Río Bueno',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Corral',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Lanco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Los Lagos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Máfil',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Mariquina',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Paillaco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Panguipulli',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '11',
			'co_nombre' => 'Valdivia',
        ]);

		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Los Lagos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Ancud',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Castro',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Chonchi',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Curaco de Vélez',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Dalcahue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Puqueldón',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Queilén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Quellón',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Quemchi',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Quinchao',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Calbuco',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Cochamó',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Fresia',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Llanquihue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Frutillar',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Los Muermos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Maullín',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Puerto Montt',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Puerto Varas',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Osorno',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Puerto Octay',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Purranque',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Puyehue',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Río Negro',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'San Pablo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'San Juan de la Costa',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Chaitén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Futaleufú',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Hualaihué',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '12',
			'co_nombre' => 'Palena',
        ]);

		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Aysén del General Carlos Ibáñez del Campo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'Aysén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'Cisnes',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'Guaitecas',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'Cochrane',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'OHiggins',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'Tortel',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'Coyhaique',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'Lago Verde',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'Chile Chico',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '13',
			'co_nombre' => 'Río Ibáñez',
        ]);
		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Magallanes y de la Antártica Chilena',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Antártica',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Cabo de Hornos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Laguna Blanca',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Punta Arenas',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Río Verde',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'San Gregorio',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Porvenir',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Primavera',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Timaukel',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Natales',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '14',
			'co_nombre' => 'Torres del Paine',
        ]);
		// --------------------------------------------------------------------------------------------

        DB::table('regiones')->insert([
            'rg_nombre' => 'Metropolitana de Santiago',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Colina',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Lampa',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Tiltil',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Pirque',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Puente Alto',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'San José de Maipo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Buin',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Calera de Tango',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Paine',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'San Bernardo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Alhué',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Curacaví',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'María Pinto',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Melipilla',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'San Pedro',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Cerrillos',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Cerro Navia',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Conchalí',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'El Bosque',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Estación Central',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Huechuraba',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Independencia',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'La Cisterna',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'La Granja',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'La Florida',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'La Pintana',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'La Reina',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Las Condes',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Lo Barnechea',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Lo Espejo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Lo Prado',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Macul',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Maipú',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Ñuñoa',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Pedro Aguirre Cerda',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Peñalolén',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Providencia',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Pudahuel',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Quilicura',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Quinta Normal',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Recoleta',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Renca',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'San Miguel',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'San Joaquín',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'San Ramón',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Santiago',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Vitacura',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'El Monte',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Isla de Maipo',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Padre Hurtado',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Peñaflor',
        ]);

        DB::table('comunas')->insert([
			'rg_id'     => '15',
			'co_nombre' => 'Talagante',
        ]);

    }
}
