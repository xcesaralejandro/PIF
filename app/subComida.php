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
    	'updated_at'
    ];
    // SUS HIJOS
    // SUS PADRES
        public function Comida(){
        return $this->belongsTo('frust\Comida','cm_id','id');
    }
}
