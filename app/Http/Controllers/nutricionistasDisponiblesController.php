<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\User;
use frust\peticione;
class nutricionistasDisponiblesController extends Controller
{
	public function listar(){
		$perfiles = User::orderBy('id','desc')
		->where('us_tipo_usuario','nutricionista')
		->where('us_estado','1')
		->where('pf_descripcion','!=',null)
		->get();

		$pt = peticione::where('us_id',\Auth::user()->id)
									 ->where('pt_estado','1')
									 ->count();

		return View('nutricionista.perfil.listar')->with('perfiles',$perfiles)->with('pt',$pt);

	}


	public function detalle($id){
		$perfil = user::find($id);
		return View('nutricionista.perfil.detalle')->with('perfil',$perfil);
	}

	public function solicitud($id){
		$nutria = User::find($id);
		if (count($nutria)>0) {
			if (strtoupper($nutria->us_tipo_usuario) === 'NUTRICIONISTA' && $nutria->us_estado == 1) {
				$pets = peticione::all()
								->where('us_id',\Auth::user()->id);

				if (count($pets)>0) {
					foreach ($pets as $pet) {
						$pet->pt_estado = '0';
						$pet->save();
					}
				}
				$pt = new peticione();
				$pt->us_id = \Auth::user()->id;
				$pt->pt_estado = '1';
				$pt->pt_fecha = date('Y-m-d');
				$pt->pt_id_nut = $id;
				if ($pt->save()) {
					alertify()->success('¡Ha enviado la petición con éxito!')->delay(10000)->clickToClose()->position('bottom left');
					return redirect()->back();
				}
			}
		}else{
			abort(404);
		}
	}


	public function verSolicitudes(Request $request){
		$pts = peticione::with(['User'])
									 ->where('pt_estado','1')
									 ->where('pt_id_nut',\Auth::user()->id)
									 ->get();

		return View ('nutricionista.solicitudes.listado')->with('pts',$pts);
	}


	public function aceptarSol($id){
		$ownerUser = peticione::find($id);
		if (count($ownerUser) > 0) {
			if ($ownerUser->pt_id_nut == \Auth::user()->id) {
					if ($ownerUser->pt_estado == '1') {
						/*  Acá hago mis acciones */
						$usuario = User::find($ownerUser->us_id);
						$usuario->us_id_nutricionista = \Auth::user()->id;
						if ($usuario->save()) {
							if ($ownerUser->delete()) {
								alertify()->success($usuario->us_nombres . ' Ahora es tu cliente.')->delay(10000)->clickToClose()->position('bottom left');
								return redirect()->back();
							}

						}else{
							alertify()->error('La petición no ha podido procesarse.')->delay(10000)->clickToClose()->position('bottom left');
							return redirect()->back();
						}

					}else{
						alertify()->error('La petición no existe.')->delay(10000)->clickToClose()->position('bottom left');
						return redirect()->back();
					}
			}else{
				alertify()->error('La petición no existe.')->delay(10000)->clickToClose()->position('bottom left');
				return redirect()->back();
			}
		}else{
			alertify()->error('La petición no existe.')->delay(10000)->clickToClose()->position('bottom left');
			return redirect()->back();
		}
	}


	public function eliminarSol($id){
		$ownerUser = peticione::find($id);
		if (count($ownerUser) > 0) {
			if ($ownerUser->pt_id_nut == \Auth::user()->id) {
					if ($ownerUser->pt_estado == '1') {
						/*  Acá hago mis acciones */
						$ownerUser->pt_estado = '0';
						if ($ownerUser->save()) {
							alertify()->success('¡Ha eliminado la solicitud con éxito!')->delay(10000)->clickToClose()->position('bottom left');
							return redirect()->back();
						}else{
							alertify()->error('La petición no ha podido procesarse.')->delay(10000)->clickToClose()->position('bottom left');
							return redirect()->back();
						}

					}else{
						alertify()->error('La petición no existe.')->delay(10000)->clickToClose()->position('bottom left');
						return redirect()->back();
					}
			}else{
				alertify()->error('La petición no existe.')->delay(10000)->clickToClose()->position('bottom left');
				return redirect()->back();
			}
		}else{
			alertify()->error('La petición no existe.')->delay(10000)->clickToClose()->position('bottom left');
			return redirect()->back();
		}
	}

}
