<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\gruposAlimento;

class gruposAlimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $grupos = gruposAlimento::orderBy('id', 'DESC')->paginate(10);
        return View('admin.gruposalimentarios.listar')->with('grupos',$grupos);
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
        $grupos = new gruposAlimento();
        $grupos->ga_nombre = ucfirst($request->ga_nombre);
        $grupos->save();
        alertify()->success('Enhorabuena se a agregado su nuevo grupo')->persistent()->clickToClose();

        return redirect()->back();
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
        $grupo = gruposAlimento::find($id);
        return view('admin.gruposalimentarios.modificar')->with('grupo',$grupo);
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
     $grupo = gruposAlimento::find($id);
     $grupo->fill($request->all());
     $grupo->save();
     alertify()->success('En hora buena se a Modificado su grupo')->persistent()->clickToClose();
     return redirect()->route('gruposalimentarios.index');
     
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo = gruposAlimento::find($id);
        $grupo->delete();
        alertify()->error('Se elimino correctamente ')->persistent()->clickToClose();
        return redirect()->back();
    }
}
