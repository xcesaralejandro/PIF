<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class gruposAlimento extends Model
{
    protected $table = 'gruposAlimentos';

    protected $fillable = [
    	'id',
    	'ga_nombre',
    	'created_at',
    	'updated_at'
    ];
}