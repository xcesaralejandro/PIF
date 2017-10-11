<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Factore extends Model
{
    protected $table = 'factores';

    protected $fillable = [
    	'id',
    	'ft_proteinas',
    	'ft_lipidos',
    	'ft_carbohidratos',
    	'ft_g_proteinas',
    	'ft_g_lipidos',
    	'ft_g_carbohidratos',
    	'created_at',
    	'updated_at'
    ];
}
