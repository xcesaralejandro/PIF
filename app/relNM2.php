<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class relNM2 extends Model
{
    protected $table = 'comida_alimento';

    protected $fillable = [
    	'id',
    	'al_id',
    	'cm_id',
    	'created_at',
    	'updated_at'
    ];

    // SUS HIJOS
    // SUS PADRES
    public function alimento(){
		return $this->belognsTo('frust\alimento','al_id','id');
	}

	public function comida(){
		return $this->belongsTo('frust\comida','cm_id','id');
	}
}
