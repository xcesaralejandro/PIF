<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Comida_alimento extends Model
{
    protected $table = 'comida_alimentos';

    protected $fillable = [
    	'id',
    	'al_id',
    	'cm_id',
    	'created_at',
    	'updated_at'
    ];
}
