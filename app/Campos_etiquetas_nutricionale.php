<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Campos_etiquetas_nutricionale extends Model
{
    protected $table = 'campos_etiquetas_nutricionales';

    protected $fillable = [
    	'id',
    	'en_id',
    	'cen_nombre',
    	'cen_descripcion',
    	'created_at',
    	'updated_at'
    ];
}
