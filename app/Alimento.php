<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class alimento extends Model
{
    protected $table = 'alimentos';

    protected $fillable = [
    	'id',
    	'ct_id',
    	'al_nombre',
        'al_kcal',
    	'al_gramos',
    	'al_proteina',
    	'al_lipidos',
        'al_kcal',
    	'al_carbohidratos',
    	'created_at',
    	'updated_at'
    ];
    public function scopeSearch($query, $al_nombre){
        return $query->where('al_nombre', 'LIKE', "%$al_nombre%");
    }
    // SUS HIJOS

    public function detalleAlimentos(){
        return $this->hasMany('frust\detalleAlimento','al_id','id');
    }

    // SUS PADRES
    public function categoriasAlimento(){
        return $this->belongsTo('frust\categoriasAlimento','ct_id','id');
    }
}
