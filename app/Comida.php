<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class comida extends Model
{
    protected $table = 'comidas';

    protected $fillable = [
    	'id',
    	'cm_nombre',
    	'cm_porcentaje',
    	'created_at',
    	'updated_at'
    ];
    // SUS HIJOS
    public function comida_planesAlimentarios(){
    	return $this->belongsToMany('frust\comida_planesAlimentario');
    }

    public function comida_alimentos(){
		return $this->belongsToMany('frust\comida_alimento');
	}
    // SUS PADRES
}
