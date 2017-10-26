<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class sellosNegro extends Model
{
    protected $table = 'sellosNegros';

    protected $fillable = [
    	'id',
    	'us_id',
    	'sn_nombre',
    	'sn_descripcion',
    	'sn_url_imagen',
    	'created_at',
    	'updated_at'
    ];
    public function scopeSearch($query, $sn_nombre){
        return $query->where('sn_nombre', 'LIKE', "%$sn_nombre%");
    }

    // SUS HIJOS
    // SUS PADRES
    public function User(){
        return $this->belongsTo('frust\User','us_id','id');
    }
}
