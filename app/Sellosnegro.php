<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class sellosNegro extends Model
{
    protected $table = 'sellosNegros';

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
