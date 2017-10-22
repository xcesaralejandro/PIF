<?php

namespace frust\Http\Controllers;
use frust\alimento;
use Illuminate\Http\Request;
use frust\categoriasAlimento;
use frust\gruposAlimento;
use Carbon\Carbon;
use frust\Http\Requests\alimentoRequest;
class alimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimentos = alimento::orderBy('id','DESC')->paginate(15);
        return view('admin.alimentos.listar')->with('alimentos',$alimentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = gruposAlimento::orderBy('ga_nombre', 'ASC')->pluck('ga_nombre', 'id');
        $categorias = categoriasAlimento::orderBy('ct_nombre', 'ASC')->pluck('ct_nombre', 'id');
        return view('admin.alimentos.agregar')->with('grupos',$grupos)->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(alimentoRequest $request)
    {
        $alimento = new alimento($request->all());

        $alimento ->save();
        alertify()->success('Enhorabuena se a agregado un nuevo alimento')->persistent()->clickToClose();

        return redirect()->route('alimentos.index');
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
        $alimento =  alimento::find($id);
        $grupos = gruposAlimento::orderBy('ga_nombre', 'ASC')->pluck('ga_nombre', 'id');
        $categorias = categoriasAlimento::orderBy('ct_nombre', 'ASC')->pluck('ct_nombre', 'id');
        return view('admin.alimentos.modificar')
        ->with('alimento',$alimento)
        ->with('grupos',$grupos)
        ->with('categorias',$categorias);
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
            $alimento = alimento::find($id);
        $alimento -> fill($request->all());
        $alimento ->save();
        alertify()->success('Se ha modificado exitosamente')->persistent()->clickToClose();

        return redirect()->route('alimentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alimento = alimento::find($id);
        $alimento->delete();
        alertify()->success('Se elimino correctamente ')->persistent()->clickToClose();
        return redirect()->back();
    }
}
