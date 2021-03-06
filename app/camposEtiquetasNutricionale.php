<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class camposEtiquetasNutricionale extends Model
{
    protected $table = 'camposEtiquetasNutricionales';

    protected $fillable = [
    	'id',
    	'en_id',
    	'cen_nombre',
    	'cen_descripcion',
    	'created_at',
    	'updated_at'
    ];
    public function scopeSearch($query, $cen_nombre){
        return $query->where('cen_nombre', 'LIKE', "%$cen_nombre%");
    }
    // SUS HIJOS

    // SUS PADRES
    public function etiquetasNutricionale(){
    	return $this->belongsTo('frust\etiquetasNutricionale','en_id','id');
    }
}
