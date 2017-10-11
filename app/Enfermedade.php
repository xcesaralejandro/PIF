<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class enfermedade extends Model
{
    protected $table = 'enfermedades';

    protected $fillable = [
    	'id',
    	'us_id',
    	'ef_nombre',
    	'ef_descripcion',
    	'ef_url',
    	'ef_url_imagen',
    	'created_at',
    	'updated_at'
    ];

    // SUS HIJOS
    // SUS PADRES
    public function User(){
        return $this->belongsTo('frust\User','us_id','id');
    }
}
