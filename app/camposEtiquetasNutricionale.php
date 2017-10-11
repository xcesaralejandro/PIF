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
}
