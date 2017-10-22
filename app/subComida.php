<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class subComida extends Model

{
    protected $table = 'subComidas';    
    protected $fillable = [
    	'id',
        'sbc_nombre',
        'sbc_porcentaje',
        'created_at',
        'cm_id',
    	'updated_at'
    ];

    protected $primaryKey = 'id';
    
    // SUS HIJOS
    public function detalleAlimentos(){
        return $this->hasMany('frust\detalleAlimento','sbc_id','id');
    }
    // SUS PADRES
        public function Comida(){
            return $this->belongsTo('frust\Comida','cm_id','id');
    }
}
