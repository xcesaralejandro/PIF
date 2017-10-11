<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class planesAlimentario extends Model
{
    protected $table = 'planesAlimentarios';

    protected $fillable = [
    	'id',
    	'ft_id',
    	'na_id',
    	'us_id',
    	'pa_apodo',
    	'pa_fecha_caducacion',
    	'pa_estado',
    	'created_at',
    	'updated_at'
    ];

    // SUS HIJOS
    public function consumosDiarios(){
        return $this->hasMany('frust\consumosDiario');
    }

    public function comida_planesAlimentarios(){
        return $this->belongsToMany('frust\comida_planesAlimentario');
    }

    // SUS PADRES
    public function User(){
        return $this->belongsTo('frust\User','us_id','id');
    }

    public function factore(){
        return $this->belongsTo('frust\factore','ft_id','id');
    }
}
