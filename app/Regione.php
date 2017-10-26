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
    public function scopeSearch($query, $rg_nombre){
        return $query->where('rg_nombre', 'LIKE', "%$rg_nombre%");
    }    
    // SUS HIJOS
    public function comunas(){
    	return $this->hasmany('frust\comuna');
}
    public function Users(){
        return $this->hasmany('frust\User');
}
    // SUS PADRES
}
