<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class comida_alimento extends Model
{
    protected $table = 'comida_alimento';

    protected $fillable = [
    	'id',
    	'al_id',
    	'cm_id',
    	'created_at',
    	'updated_at'
    ];
}
