<?php

namespace frust\Http\Controllers;

use frust\camposEtiquetasNutricionale;
use frust\etiquetasNutricionale;
use frust\Http\Requests\campEtiquetaNutricionalRequest;
use Illuminate\Http\Request;

class campEtiquetaNutricionalController extends Controller
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
        $en_cont = etiquetasNutricionale::pluck('id', 'id');
        $en_cont = count($en_cont);
        return view('admin.etiquetanutricional.campoEtiqueta.agregarCampo')->with('en_cont', $en_cont);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(campEtiquetaNutricionalRequest $request)
    {
        $etiqueta = etiquetasNutricionale::orderBy('id', 'DESC')->first();
        $campo    = new camposEtiquetasNutricionale($request->all());
        $campo->etiquetasNutricionale()->associate($etiqueta);
        $campo->save();
        alertify()->success('Enhorabuena se a agregado un nuevo campo')->persistent()->clickToClose();

        return redirect()->route('etiquetanutricional.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalle($id) 
    {
        $campo   = camposEtiquetasNutricionale::find($id);
        $en_cont = etiquetasNutricionale::pluck('id', 'id');
        $en_cont = count($en_cont);
        return View('admin.etiquetanutricional.campoEtiqueta.detalleCampo')
        ->with('campo', $campo)
        ->with('en_cont', $en_cont);
    }
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
        $en_cont = etiquetasNutricionale::pluck('id', 'id');
        $en_cont = count($en_cont);
        $campo   = camposEtiquetasNutricionale::find($id);
        return view('admin.etiquetanutricional.campoEtiqueta.mod_etiqueta')->with('campo', $campo)->with('en_cont', $en_cont);
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
        $this->validate($request, [
            'cen_descripcion' =>'required|min:5|max:256'
        ]);
        $campo = camposEtiquetasNutricionale::find($id);
        $campo->fill($request->all());
        $campo->save();
        alertify()->success('Se ha modificado exitosamente')->persistent()->clickToClose();

        return redirect()->route('etiquetanutricional.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campo = camposEtiquetasNutricionale::find($id);
        $campo->delete();
        alertify()->success('Se elimino correctamente ')->persistent()->clickToClose();
        return redirect()->route('etiquetanutricional.index');
    }
}
