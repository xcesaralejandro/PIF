<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Comida_planes_alimentario extends Model
{
    protected $table = 'comida_planes_alimentario';

    protected $fillable = [
    	'id',
    	'pa_id',
    	'cm_id',
    	'created_at',
    	'updated_at'
    ];
}
