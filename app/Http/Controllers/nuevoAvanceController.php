<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\nuevosAvance;
class nuevoAvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('cliente.nuevoAvance.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Comprobamos que el usuario sea cliente
        if (\Auth::user()->us_tipo_usuario == 'cliente') {
           if ($request->na_imc > 0 && $request->na_vct >0) {
                $nuevoAvance           = new nuevosAvance();
                $nuevoAvance->us_id    = \Auth::user()->id;
                $nuevoAvance->na_fecha = date('Y-m-d');
                $nuevoAvance->fill($request->all());
                
                if ($nuevoAvance->save()) {
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
