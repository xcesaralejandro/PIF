<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class consumosDiario extends Model
{
    protected $table = 'consumosDiarios';

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

    // SUS HIJOS
    // SUS PADRES
    public function User(){
        return $this->belongsTo('frust\User','us_id','id');
    }

    public function planesAlimentario(){
        return $this->belongsTo('frust\planesAlimentario','pa_id','id');
    }
}
