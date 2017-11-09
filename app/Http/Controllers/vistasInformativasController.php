<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\Enfermedade;
use frust\Etiquetasnutricionale;
use frust\Sellosnegro;

class vistasInformativasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sellosnegros()
    {
        $sn = Sellosnegro::all();
        return view('Informacion.sellosNegros')
        ->with('sn',$sn);
    }

    public function enfermedades()
    {
        $ef = Enfermedade::orderBy('id','desc')->paginate(6);

        return view('Informacion.enfermedades')
        ->with('ef',$ef);
    }

    public function etiquetanutricional()
    {
        $et = Etiquetasnutricionale::with(['camposEtiquetasNutricionales'])->get();

        if(count($et) == 0){
           alertify()->error('No se ha podido localzar informacion en la etiqueta nutricional')->persistent()->clickToClose();
           return redirect()->back();
       }else{
        $et = $et[0];
        return view('Informacion.etiquetaNutricional')
        ->with('et',$et);
    }
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
        //
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
