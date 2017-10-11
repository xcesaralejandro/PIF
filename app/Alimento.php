<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $table = 'alimentos';

    protected $fillable = [
    	'id',
    	'ct_id',
    	'al_nombre',
    	'al_gramos',
    	'al_proteina',
    	'al_lipidos',
    	'al_carbohidratos',
    	'created_at',
    	'updated_at'
    ];
}
