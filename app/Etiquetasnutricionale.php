<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class etiquetasNutricionale extends Model
{
    protected $table = 'etiquetasNutricionales';

    protected $fillable = [
    	'id',
    	'us_id',
    	'en_url_imagen',
    	'en_titulo',
    	'en_descripcion',
    	'created_at',
    	'updated_at'
    ];
    // SUS HIJOS
    public function camposEtiquetasNutricionales(){
        return $this->hasMany('frust\camposEtiquetasNutricionale');
    }
    // SUS PADRES
     public function User(){
        return $this->belongsTo('frust\User','us_id','id');
    }
}
