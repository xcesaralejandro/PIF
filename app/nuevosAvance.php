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

    // SUS HIJOS
    public function planesAlimentarios(){
        return $this->hasMany('planesAlimentario');
    }
    // SUS PADRES
    public function User(){
        return $this->belongsTo('frust\User','us_id','id');
    }
}
