<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\nuevosAvance;
use frust\planesAlimentario;
class nuevoAvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nuevosAvance = nuevosAvance::orderBy('id','desc')
                         ->where('na_fecha',date('Y-m-d'))
                         ->where('us_id',\Auth::user()->id)
                         ->get();

        //Traemos los ultimos 5 registros para el grafico
        $paraGraficar = nuevosAvance::orderBy('id','desc')
                         ->where('us_id',\Auth::user()->id)
                         ->take(5)
                         ->get();


        if(count($paraGraficar) != 0){
            foreach ($paraGraficar as $value) {
                $lastPeso[]   = $value->na_peso;
                $lastFecha[]  = $value->na_fecha;
                $lastAltura[] = $value->na_altura;
                $lastImc[] = $value->na_imc;
            }

        return  View('cliente.nuevoAvance.create')
                ->with('lastPeso'  , $lastPeso)
                ->with('lastFecha' ,$lastFecha)
                ->with('lastAltura',$lastAltura)
                ->with('lastImc'   ,$lastImc)
                ->with('avances'   ,  $nuevosAvance);
        }else{

            $lastPeso[]   = 0;
            $lastFecha[]  = 0;
            $lastAltura[] = 0;
            $lastImc[]    = 0;

            return  View('cliente.nuevoAvance.create')
                ->with('lastPeso'  , $lastPeso)
                ->with('lastFecha' , $lastFecha)
                ->with('lastAltura', $lastAltura)
                ->with('lastImc'   , $lastImc)
                ->with('avances'   ,  $nuevosAvance);

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'na_altura' => 'min:60|max:220|numeric|required',
            'na_peso'   => 'min:30|max:150|numeric|required',
            'na_vct'    => 'min:30|numeric|required',
            'na_imc'    => 'min:10|numeric|required'
        ]);

        //Comprobamos que el usuario sea cliente
        if (!\Auth::guest() && \Auth::user()->us_tipo_usuario == 'cliente') {
           if ($request->na_imc > 0 && $request->na_vct > 0) {
                $nuevoAvance           = new nuevosAvance();
                $nuevoAvance->us_id    = \Auth::user()->id;
                $nuevoAvance->na_fecha = date('Y-m-d');
                $nuevoAvance->fill($request->all());

                if ($nuevoAvance->save()) {
                  //  Ahora desactivamos sus planes
                  $pa = planesAlimentario::with(['nuevosAvance'])
                                          ->where('us_id',\Auth::user()->id)
                                          ->get();
                  foreach ($pa as $p) {
                    $p->pa_estado = '0';
                    $p->save();
                    if ($p->nuevosAvance->na_vct == $nuevoAvance->na_vct) {
                      $p->pa_estado = '1';
                      $p->save();
                    }
                  }
                   alertify()->success('Ha registrado un nuevo avance con éxito.')->delay(10000)->clickToClose()->position('bottom left');
                    return redirect()->back();
                }else{
                    alertify()->error('Ha ocurrido un error al guardar el nuevo avance, intentelo más tarde.')->delay(10000)->clickToClose()->position('bottom left');
                    return redirect()->back();
                }
           }else{
                alertify()->error('Debe cambiar los valores iniciales.')->delay(10000)->clickToClose()->position('bottom left');
                return redirect()->back();
           }
        }else{
                alertify()->error('No posee permisos para realizar esta acción.')->delay(10000)->clickToClose()->position('bottom left');
                return redirect()->back();
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $na = nuevosAvance::find($id);

        if ($na->us_id === \Auth::user()->id) {
            if ($na->delete()) {
                alertify()->success('El registro se ha eliminado con éxito.')->delay(10000)->clickToClose()->position('bottom left');
                return redirect()->back();
            }else{
                alertify()->error('No se puede eliminar el registro ya que está siendo utilizado.')->delay(10000)->clickToClose()->position('bottom left');
                return redirect()->back();
            }
        }else{
            alertify()->error('No posee permisos para realizar esta acción.')->delay(10000)->clickToClose()->position('bottom left');
                return redirect()->back();
        }
    }
}
