<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\User;
class nutricionistasDisponiblesController extends Controller
{
	public function listar(){
		$perfiles = User::orderBy('id','desc')
		->where('us_tipo_usuario','nutricionista')
		->where('us_estado','1')
		->where('pf_descripcion','!=',null)
		->get();
		return View('nutricionista.perfil.listar')->with('perfiles',$perfiles);	
		
	}
	public function detalle($id){
		$perfil = user::find($id);
		return View('nutricionista.perfil.detalle')->with('perfil',$perfil);
	}
}
