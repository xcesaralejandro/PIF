<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class planesAlimentario extends Model
{
    protected $table = 'planesAlimentarios';

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
