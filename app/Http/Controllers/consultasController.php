<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\User;
use frust\planesAlimentario;
use frust\detalleAlimento;
use frust\nuevosAvance;
class consultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $datos= User::BuscarEmail($request->correo)->orderBy('id','DESC')->paginate(1);
        $usuario = User::BuscarEmail($request->correo)->pluck('id');
        $id_limpia = $usuario->pop();
        if( $request->correo == ''){
          return redirect()->back();
      }elseif($id_limpia == null){
        alertify()->error('No se ha podido encontrar el correo ingresado')->persistent()->clickToClose()->delay(10000)->position('bottom left');
        return redirect()->back();
    }else{
        $planes = planesAlimentario::orderBy('id','desc')
        ->where('us_id','=',$id_limpia)->limit(6)
        ->get();
        $paraGraficar = nuevosAvance::orderBy('id','desc')
        ->where('us_id','=',$id_limpia)
        ->take(5)
        ->get();
        if(count($paraGraficar) != 0){
            foreach ($paraGraficar as $value) {
                $lastPeso[]   = $value->na_peso;
                $lastFecha[]  = $value->na_fecha;
                $lastAltura[] = $value->na_altura;
                $lastImc[] = $value->na_imc;
            }

            return view('consulta.seguimiento')
            ->with('usuario',$id_limpia)
            ->with('datos',$datos)
            ->with('planes',$planes)
            ->with('lastPeso'  , $lastPeso)
            ->with('lastFecha' ,$lastFecha)
            ->with('lastAltura',$lastAltura)
            ->with('lastImc'   ,$lastImc);
        }else{

            $lastPeso[]   = 0;
            $lastFecha[]  = 0;
            $lastAltura[] = 0;
            $lastImc[]    = 0;

            return view('consulta.seguimiento')
            ->with('usuario',$id_limpia)
            ->with('datos',$datos)
            ->with('planes',$planes)
            ->with('lastPeso'  , $lastPeso)
            ->with('lastFecha' , $lastFecha)
            ->with('lastAltura', $lastAltura)
            ->with('lastImc'   , $lastImc);

        }

    }
}
public function show($id)
{
    $plan = planesAlimentario::with(['nuevosAvance', 'factore', 'detalleAlimentos'])->find($id);
    // if ($plan->us_id == $usuario ) {
    $alimentos = detalleAlimento::with(['subComida', 'Alimento'])
    ->where('pa_id', $id)
    ->get();

    return View('cliente.planAlimentario.detalle')
    ->with('plan', $plan)
    ->with('alimentos', $alimentos);

    // } else {
    //   alertify()->error('No se ha encontrado el plan alimentario.')->delay(10000)->clickToClose()->position('bottom left');
    //   return redirect()->back();
    // }
}


}
