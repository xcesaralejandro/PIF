<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comunas';

    protected $fillable = [
    	'id',
    	'co_nombre',
    	'created_at',
    	'updated_at'
    ];
}
