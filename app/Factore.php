<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class factore extends Model
{
    protected $table = 'factores';

    protected $fillable = [
    	'id',
        'us_id',
    	'ft_proteinas',
    	'ft_lipidos',
    	'ft_carbohidratos',
        'ft_estado',
    	'created_at',
    	'updated_at'
    ];

    // SUS HIJOS
    // SUS PADRES
         public function User(){
        return $this->belongsTo('frust\User','us_id','id');
    }
}
