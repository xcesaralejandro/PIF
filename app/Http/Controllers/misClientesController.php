<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\User;
use frust\planesAlimentario;
use frust\detalleAlimento;
use frust\nuevosAvance;
class misClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $clientes = User::BuscarEmail($request->correo)->orderBy('id','desc')
        ->where('us_tipo_usuario','cliente')
        ->where('us_estado','1')
        ->where('us_id_nutricionista', \Auth::user()->id)
        ->get();
        return view('nutricionista.misClientes.listar')->with('clientes',$clientes);
    }

    public function eliminar($id){
        $ownerUser = User::find($id);
        $porDefecto = 1;
        if (count($ownerUser) > 0) {
            if ($ownerUser->us_id_nutricionista == \Auth::user()->id) {
                $ownerUser->us_id_nutricionista = $porDefecto;
                $ownerUser->save();
                alertify()->success('¡Ha eliminado al cliente de manera éxito!')->delay(10000)->clickToClose()->position('bottom left');
                return redirect()->back();
            }

        }
    }
    public function detalle($id){
     $cliente = User::find($id);
     $nuevosAvance = nuevosAvance::orderBy('id','desc')
                         ->where('na_fecha',date('Y-m-d'))
                         ->find($id);
    $paraGraficar = nuevosAvance::orderBy('id','desc')
                         ->where('us_id', $id)
                         ->take(5)
                         ->get();
        $planes = planesAlimentario::orderBy('id','desc')
        ->where('us_id','=',$cliente)->limit(6)
        ->get();

        if(count($paraGraficar) != 0){
            foreach ($paraGraficar as $value) {
                $lastPeso[]   = $value->na_peso;
                $lastFecha[]  = $value->na_fecha;
                $lastAltura[] = $value->na_altura;
                $lastImc[] = $value->na_imc;
            }

        return  View('nutricionista.misclientes.detalle')
                ->with('lastPeso'  , $lastPeso)
                ->with('lastFecha' ,$lastFecha)
                ->with('lastAltura',$lastAltura)
                ->with('lastImc'   ,$lastImc)
                 ->with('planes',$planes)
                ->with('avances'   ,  $nuevosAvance);
        }else{

            $lastPeso[]   = 0;
            $lastFecha[]  = 0;
            $lastAltura[] = 0;
            $lastImc[]    = 0;

            return  View('nutricionista.misclientes.detalle')
                ->with('lastPeso'  , $lastPeso)
                ->with('lastFecha' , $lastFecha)
                ->with('lastAltura', $lastAltura)
                ->with('lastImc'   , $lastImc)
                 ->with('planes',$planes)
                ->with('avances'   ,  $nuevosAvance);

        }

}

}