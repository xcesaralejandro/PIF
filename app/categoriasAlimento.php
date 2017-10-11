<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class categoriasAlimento extends Model
{
    protected $table = 'categoriasAlimentos';

    protected $fillable = [
    	'id',
    	'ga_id',
    	'ct_nombre',
    	'created_at',
    	'updated_at'
    ];
}
