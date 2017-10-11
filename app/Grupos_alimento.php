<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Grupos_alimento extends Model
{
    protected $table = 'grupos_alimentos';

    protected $fillable = [
    	'id',
    	'ga_nombre',
    	'created_at',
    	'updated_at'
    ];
}
