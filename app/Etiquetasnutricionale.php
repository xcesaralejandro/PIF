<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Etiquetasnutricionale extends Model
{
    protected $table = 'etiquetasnutricionales';

    protected $fillable = [
    	'id',
    	'us_id',
    	'en_url_imagen',
    	'en_titulo',
    	'en_descripcion',
    	'created_at',
    	'updated_at'
    ];
}
