<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class comida_planesAlimentario extends Model
{
    protected $table = 'comida_planesAlimentario';

    protected $fillable = [
    	'id',
    	'pa_id',
    	'cm_id',
    	'created_at',
    	'updated_at'
    ];
}
