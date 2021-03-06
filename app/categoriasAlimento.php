<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class categoriasAlimento extends Model
{
    protected $table = 'categoriasAlimentos';

    protected $fillable = [
    	'id',
    	'ga_id',
    	'ct_nombre',
    	'created_at',
    	'updated_at'
    ];
    public function scopeSearch($query, $ct_nombre){
        return $query->where('ct_nombre', 'LIKE', "%$ct_nombre%");
    }
    // SUS HIJOS
    public function alimentos(){
    	return $this->hasMany('frust\alimento');
    }
    // SUS PADRES
    public function gruposAlimento(){
    	return $this->belongsTo('frust\gruposAlimento','ga_id','id');
    }
}
