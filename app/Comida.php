<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class comida extends Model
{
    protected $table = 'comidas';
    protected $fillable = [
        'id',
        'cm_nombre',
        'cm_estado',
        'created_at',
        'us_id',
        'updated_at'
    ];

    protected $primaryKey = 'id';
    

    // SUS HIJOS
    public function subComidas(){
        return $this->hasMany('frust\subComida','cm_id','id');
    }

    // SUS PADRES
    public function User(){
        return $this->belongsTo('frust\User','us_id','id');
    }
}
