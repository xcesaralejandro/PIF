<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Regione extends Model
{
     protected $table = 'regiones';

    protected $fillable = [
    	'id',
    	'rg_nombre',
    	'created_at',
    	'updated_at'
    ];
    // SUS HIJOS
    public function comunas(){
    	return $this->hasmany('frust\comuna');
}
    public function Users(){
        return $this->hasmany('frust\User');
}
    // SUS PADRES
}
