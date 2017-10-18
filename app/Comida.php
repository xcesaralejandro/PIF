<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class comida extends Model
{
    protected $table = 'comidas';

    protected $fillable = [
    	'id',
        'us_id',
        'cm_nombre',
        'created_at',
        'updated_at'
    ];
    // SUS HIJOS
    public function planesAlimentarios()
    {
    	return $this->belongsToMany('frust\planesAlimentario');
    }
    public function alimentos()
    {
      return $this->belongsToMany('frust\alimento');
    }
    public function subComidas()
    {
    return $this->hasMany('frust\subComida');
    }
    // SUS PADRES
    public function User()
    {
    return $this->belongsTo('frust\User','us_id','id');
    }
}
