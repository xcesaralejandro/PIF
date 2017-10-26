<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class comuna extends Model
{
    protected $table = 'comunas';

    protected $fillable = [
    	'id',
        'rg_id',
    	'co_nombre',
    	'created_at',
    	'updated_at'
    ];
    public function scopeSearch($query, $co_nombre){
        return $query->where('co_nombre', 'LIKE', "%$co_nombre%");
    }

    // SUS HIJOS
    public function Users(){
        return $this->hasMany('frust\User');
    }
        // SUS PADRES
    public function regione(){
        return $this->belongsTo('frust\Regione','rg_id','id');
    }

}
