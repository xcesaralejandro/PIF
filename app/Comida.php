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
    public function planesAlimentarios(){
    	return $this->belongsToMany('frust\planesAlimentario');
    }

    public function alimentos(){
		return $this->belongsToMany('frust\alimento');
	}
    // SUS PADRES
}
