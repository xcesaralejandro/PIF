<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class gruposAlimento extends Model
{
    protected $table = 'gruposAlimentos';

    protected $fillable = [
    	'id',
    	'ga_nombre'
    ];

    // SUS HIJOS
    public function categoriasAlimentos(){
		return $this->hasMany('frust\categoriasAlimento');
	}

	// SUS PADRES
}
