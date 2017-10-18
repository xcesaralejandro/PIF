<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\comuna;
use frust\Regione;
class comunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $comunas = comuna::orderBy('rg_id', 'DESC')->paginate(10);
        $regiones = Regione::orderBy('id', 'DESC')->pluck('rg_nombre', 'id');
        return view('admin.comunas.listar')->with('comunas',$comunas)->with('regiones',$regiones);
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
       $comunas = new comuna($request->all());
       $comunas ->save();
       alertify()->success('Enhorabuena se a agregado su comuna ')->persistent()->clickToClose();

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
     $comuna = comuna::find($id);
     $regiones = Regione::orderBy('rg_nombre', 'DESC')->pluck('rg_nombre', 'id');
     return view('admin.comunas.modificar')
     ->with('comuna',$comuna)
     ->with('regiones',$regiones);
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
     $comuna = comuna::find($id);
     $comuna->fill($request->all());
     $comuna->save();
     alertify()->success('Enhorabuena se a Modificado su comuna')->persistent()->clickToClose();
     return redirect()->route('comunas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comuna = comuna::find($id);
        $comuna->delete();
        alertify()->error('Se elimino correctamente ')->persistent()->clickToClose();
        return redirect()->back();
    }
}
