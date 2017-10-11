<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class nuevosAvance extends Model
{
    protected $table = 'nuevosAvances';

    protected $fillable = [
    	'id',
    	'us_id',
    	'na_peso',
    	'na_altura',
    	'na_fecha',
    	'na_imc',
    	'na_vct',
    	'created_at',
    	'updated_at'
    ];
}
