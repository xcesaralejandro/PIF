<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\planesAlimentario;
use frust\Http\Requests\registroDiarioRequest;
use frust\consumosDiario;
class consumoDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planes = planesAlimentario::select('id','pa_apodo')
                                    ->where('us_id',\Auth::user()->id)
                                    ->where('pa_estado','1')
                                    ->pluck('pa_apodo','id');
        return view('cliente.consumoDiario.create')
        ->with('planes',$planes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(registroDiarioRequest $request)
    {
        $us   = (int)\Auth::user()->id;
        $date = date('Y-m-d');
        $findcd = consumosDiario::where('us_id', $us)->where('cs_fecha',$date)->count();

        if ($findcd > 0) {
          alertify()->error('Ya ha guardado un registro hoy, actualize dicho registro.')->delay(10000)->clickToClose()->position('bottom left');
          return redirect()->back();
        }else{
          $cd = new consumosDiario();
          $cd->fill($request->all());
          $cd->us_id = $us;
          $cd->cs_fecha = date('Y-m-d');
          if ($cd->save()) {
            alertify()->success('Se ha guardado el registro con éxito.')->delay(10000)->clickToClose()->position('bottom left');
            return redirect()->back();
          }else{
            alertify()->error('No se ha podido guardar el registro, intentelo nuevamente.')->delay(10000)->clickToClose()->position('bottom left');
            return redirect()->back();
          }
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
        //
    }
}
