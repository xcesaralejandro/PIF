<?php

namespace frust;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'co_id',
        'us_email',
        'us_contrasenia',
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
}
