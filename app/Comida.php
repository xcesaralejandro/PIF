<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    protected $table = 'comidas';

    protected $fillable = [
    	'id',
    	'cm_nombre',
    	'cm_porcentaje',
    	'created_at',
    	'updated_at'
    ];
}
