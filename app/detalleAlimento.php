<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class detalleAlimento extends Model
{
    protected $table = 'detalle_alimento';

    protected $fillable = [
    	'id',
    	'sbc_id',
    	'pa_id',
    	'rga_nombre',
    	'rga_gramos',
    	'rga_kcal',
    	'rga_proteina',
    	'rga_lipidos',
    	'rga_carbohidratos'
    ];

    // SUS HIJOS
    
    // SUS PADRES
    public function subComida(){
    	return $this->belongsTo('frust\subComida','sbc_id','id');
    }

    public function planesAlimentario(){
    	return $this->belongsTo('frust\planesAlimentario','pa_id','id');
    }
}
