<?php

namespace frust;

use Illuminate\Database\Eloquent\Model;

class peticione extends Model
{
	protected $table = 'peticiones';

	protected $fillable = [
		'id',
		'us_id',
		'pt_id_nut',
		'pt_estado',
		'pt_fecha',
		'created_at',
		'updated_at'
	];
    // SUS HIJOS
    // SUS PADRES
	public function User()
	{
		return $this->belongsTo('frust\User','us_id','id');
	}
}
