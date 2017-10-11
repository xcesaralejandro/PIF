<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Consumos_diario extends Model
{
    protected $table = 'consumos_diarios';

    protected $fillable = [
    	'id',
    	'us_id',
    	'pa_id',
    	'cs_ingesta_agua',
    	'cs_alimentacion_familia',
    	'cs_alimentos_extra',
    	'cs_fecha',
    	'created_at',
    	'updated_at'
    ];
}
