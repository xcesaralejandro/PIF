<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Planes_alimentario extends Model
{
    protected $table = 'planes_alimentarios';

    protected $fillable = [
    	'id',
    	'ft_id',
    	'na_id',
    	'us_id',
    	'pa_apodo',
    	'pa_fecha_caducacion',
    	'pa_estado',
    	'created_at',
    	'updated_at'
    ];
}
