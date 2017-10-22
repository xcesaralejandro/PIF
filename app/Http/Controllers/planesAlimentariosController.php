<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\gruposAlimento;
use frust\categoriasAlimento;
use frust\alimento;
use frust\detalleAlimento;
use frust\subComida;
use frust\comida;

class planesAlimentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('cliente.planAlimentario.listar');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = gruposAlimento::orderBy('ga_nombre','asc')->pluck('ga_nombre','id');
        return View('cliente.planAlimentario.agregar')
        ->with('grupos',$grupos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Traemos la comida
        $comida =   comida::with(['subComidas'])
                            ->where('us_id',\Auth::user()->us_id_nutricionista)
                            ->where('cm_estado','1')
                            ->take(1)
                            ->get();
        foreach ($comida->all() as $sbComidas) {
          foreach ($sbComidas->subComidas as $unaSubcomida) {

            switch (strtoupper($unaSubcomida->sbc_nombre)) {
                case 'DESAYUNO':
                    for ($i=0; $i < count($request->desayuno_codigos); $i++) { 
                        // Traigo el alimento de la bd para luego asociarlo al detalle alimento.
                        $alimento = alimento::find($request->desayuno_codigos[$i]);
                        // Instancio un nuevo detalle alimento
                        $da = new detalleAlimento();
                        $da->rga_gramos        = $request->desayuno_gramos[$i];
                        $da->rga_kcal          = $request->desayuno_kcal[$i];
                        $da->rga_proteina      = $request->desayuno_prot[$i];
                        $da->rga_lipidos       = $request->desayuno_lip[$i];
                        $da->rga_carbohidratos = $request->desayuno_ch[$i];
                        $da->subComida()->associate($unaSubcomida);
                        dd($da);
                    }
                    break;

                case 'PRIMERA COLACION':
                    dd('PRIMERA COLACION');
                    break;

                case 'ALMUERZO':
                    dd('ALMUERZO');
                    break;
                case 'SEGUNDA COLACION':
                    dd('SEGUNDA COLACION');
                    break;
                case 'ONCE':
                    dd('ONCE');
                    break;
                case 'CENA':
                    dd('CENA');
                    break;
                
                default:
                    // return redirect()->back();
                    break;
            }

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
        return View('cliente.planAlimentario.detalle');
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

    public function listar(){
        return View('cliente.planAlimentario.listar');
    }

    public function categorias($gpoId){
        
        if (!\Auth::guest()) {
            $cat = categoriasAlimento::orderBy('ct_nombre','asc')
                                       ->where('ga_id',$gpoId)
                                       ->pluck('id','ct_nombre');
        }else{
            $cat = "Lo lamentamos, no compartimos la información de nuestra APP con terceros.";
        }
        return response()->json($cat);
    }

    public function alimentos($catId){
        if (!\Auth::guest()) {
            $alm = alimento::orderBy('al_nombre','asc')
                            ->where('ct_id',$catId)
                            ->select('id','al_nombre','al_gramos','al_kcal','al_proteina','al_lipidos','al_carbohidratos')
                            ->get()
                            ->toArray();
        }else{
            $alm = "Lo lamentamos, no compartimos la información de nuestra APP con terceros.";
        }

        return response()->json($alm);
    }
}
