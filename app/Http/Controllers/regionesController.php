<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\comuna;
use frust\Regione;
class regionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regiones = regione::orderBy('id', 'DESC')->paginate(15);
        return view('admin.regiones.listar')->with('regiones',$regiones);
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
        $region = new Regione();
        $region->rg_nombre = ucfirst($request->rg_nombre);
        $region->save();
        alertify()->success('Enhorabuena se a agregado su region')->persistent()->clickToClose();

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
        $region = Regione::find($id);
        return view('admin.regiones.modificar')->with('region',$region);
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
       $region = Regione::find($id);
       $region->fill($request->all());
       $region->save();
       alertify()->success('Se ha modificado exitosamente')->persistent()->clickToClose();
       return redirect()->route('regiones.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = Regione::find($id);
        $region->delete();
        alertify()->success('Se elimino correctamente ')->persistent()->clickToClose();
        return redirect()->back();
    }

    public function getComunas($regionId = 1){
      $comunas = comuna::where('rg_id',$regionId)
                        ->select('id','co_nombre')
                        ->get();

      return response()->json($comunas);
    }
}
