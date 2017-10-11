<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class Sellosnegro extends Model
{
    protected $table = 'sellosnegros';

    protected $fillable = [
    	'id',
    	'us_id',
    	'sn_nombre',
    	'sn_descripcion',
    	'sn_url_imagen',
    	'created_at',
    	'updated_at'
    ];
}
