<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Categorias_alimento extends Model
{
    protected $table = 'categorias_alimentos';

    protected $fillable = [
    	'id',
    	'ga_id',
    	'ct_nombre',
    	'created_at',
    	'updated_at'
    ];
}
