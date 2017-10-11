<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class relNM1 extends Model
{
    protected $table = 'comida_planesAlimentario';

    protected $fillable = [
    	'id',
    	'pa_id',
    	'cm_id',
    	'created_at',
    	'updated_at'
    ];

    // SUS HIJOS
    // SUS PADRES
    public function planesAlimentario(){
		return $this->belongsTo('frust\planesAlimentario','pa_id','id');
	}
	public function comida(){
		return $this->belongsTo('frust\comida','cm_id','id');
	}
}
