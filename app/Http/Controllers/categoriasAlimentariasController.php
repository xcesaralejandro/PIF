<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\categoriasAlimento;
use frust\gruposAlimento;
class categoriasAlimentariasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = categoriasAlimento::orderBy('id', 'DESC')->paginate(10);
        $grupos = gruposAlimento::orderBy('id', 'DESC')->pluck('ga_nombre', 'id');

        return view('admin.categoriasalimentarias.listar')->with('categorias',$categorias)->with('grupos',$grupos);
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
        $categorias = new categoriasAlimento($request->all());

        $categorias ->save();
        alertify()->success('Enhorabuena se a agregado su nueva categoria')->persistent()->clickToClose();

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
       $categoria = categoriasAlimento::find($id);
       $grupos = gruposAlimento::orderBy('id', 'DESC')->pluck('ga_nombre', 'id');
        return view('admin.categoriasAlimentarias.modificar')
        ->with('categoria',$categoria)
        ->with('grupos',$grupos);
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
     $categoria = categoriasAlimento::find($id);
     $categoria->fill($request->all());
     $categoria->save();
     alertify()->success('En hora buena se a Modificado su grupo')->persistent()->clickToClose();
     return redirect()->route('categoriasalimentarias.index');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = categoriasAlimento::find($id);
        $categoria->delete();
        alertify()->error('Se elimino correctamente ')->persistent()->clickToClose();
        return redirect()->back();
    }
}
