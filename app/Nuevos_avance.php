<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Nuevos_avance extends Model
{
    protected $table = 'nuevos_avances';

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
