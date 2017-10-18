<?php

namespace frust;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use frust\regione;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'co_id',
        'rg_id',
        'us_email',
        'password',
        'us_nombres',
        'us_apellido_paterno',
        'us_apellido_materno',
        'us_sexo',
        'us_fecha_nacimiento',
        'us_peso',
        'us_estatura',
        'us_tipo_usuario',
        'us_fecha_caducacion',
        'us_estado',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'us_contrasenia', 'remember_token',
    ];

    // SUS HIJOS

    public function enfermedades(){
        return $this->hasMany('frust\enfermedade');
    }

    public function sellosNegros(){
        return $this->hasMany('frust\sellosNegro');
    }

    public function etiquetasNutricionales(){
        return $this->hasMany('frust\etiquetasNutricionale');
    }

    public function planesAlimentarios(){
        return $this->hasMany('frust\planesAlimentario');
    }

    public function nuevosAvances(){
        return $this->hasMany('frust\nuevosAvance');
    }

    public function consumosDiarios(){
        return $this->hasMany('frust\consumosDiario');
    }
    public function comidas(){
        return $this->hasMany('frust\Comida');
    }
    public function factores(){
        return $this->hasMany('frust\Factore');
    }

    // SUS PADRES
    public function comuna(){
        return $this->belongsTo('frust\comuna','co_id','id');
    }
        public function regione(){
        return $this->belongsTo('frust\regione','rg_id','id');
    }

}
