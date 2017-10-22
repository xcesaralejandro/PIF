<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\gruposAlimento;
use frust\categoriasAlimento;
use frust\alimento;
use frust\detalleAlimento;
use frust\subComida;
use frust\comida;
use frust\planesAlimentario;
use frust\nuevosAvance;
use frust\factore;

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
        // Traemos el ultimo avanced
        $nAvance = nuevosAvance::orderBy('id','DESC')
                                    ->where('us_id',\Auth::user()->id)
                                    ->take(1)
                                    ->first();
        // Traemos los factores
        $fac = factore::orderBy('id','DESC')
                        ->where('us_Id',\Auth::user()->us_id_nutricionista)
                        ->take(1)
                        ->first();

        // Empezamos a llenar el plan alimentario
        $plan = new planesAlimentario();
        $plan->factore()->associate($nAvance);
        $plan->nuevosAvance()->associate($fac);
        // $plan->na_id = 1;
        // $plan->ft_id = 1;
        $plan->us_id = \Auth::user()->id;
        if($request->pa_apodo != null){
            $plan->pa_apodo = $request->pa_apodo;
        }else{
            $plan->pa_apodo = 'Plan Alimentario';
        }
        $plan->pa_fecha_caducacion = date('Y-m-d',strtotime('+6 week'));
        
        if ($plan->save()) {
        // Traemos la comida
        $comida =   comida::orderBy('id','DESC')
                            ->with(['subComidas'])
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
                        $da->planesAlimentario()->associate($plan);
                        $da->Alimento()->associate($alimento);
                        $da->save();
                    }
                    break;

                case 'PRIMERA COLACION':
                    for ($i=0; $i < count($request->colacion1_codigos); $i++) { 
                        // Traigo el alimento de la bd para luego asociarlo al detalle alimento.
                        $alimento = alimento::find($request->desayuno_codigos[$i]);
                        // Instancio un nuevo detalle alimento
                        $da = new detalleAlimento();
                        $da->rga_gramos        = $request->colacion1_gramos[$i];
                        $da->rga_kcal          = $request->colacion1_kcal[$i];
                        $da->rga_proteina      = $request->colacion1_prot[$i];
                        $da->rga_lipidos       = $request->colacion1_lip[$i];
                        $da->rga_carbohidratos = $request->colacion1_ch[$i];
                        $da->subComida()->associate($unaSubcomida);
                        $da->planesAlimentario()->associate($plan);
                        $da->Alimento()->associate($alimento);
                        $da->save();
                    }
                    break;

                case 'ALMUERZO':
                    for ($i=0; $i < count($request->almuerzo_codigos); $i++) { 
                        // Traigo el alimento de la bd para luego asociarlo al detalle alimento.
                        $alimento = alimento::find($request->desayuno_codigos[$i]);
                        // Instancio un nuevo detalle alimento
                        $da = new detalleAlimento();
                        $da->rga_gramos        = $request->almuerzo_gramos[$i];
                        $da->rga_kcal          = $request->almuerzo_kcal[$i];
                        $da->rga_proteina      = $request->almuerzo_prot[$i];
                        $da->rga_lipidos       = $request->almuerzo_lip[$i];
                        $da->rga_carbohidratos = $request->almuerzo_ch[$i];
                        $da->subComida()->associate($unaSubcomida);
                        $da->planesAlimentario()->associate($plan);
                        $da->Alimento()->associate($alimento);
                        $da->save();
                    }
                    break;
                case 'SEGUNDA COLACION':
                    for ($i=0; $i < count($request->colacion2_codigos); $i++) { 
                        // Traigo el alimento de la bd para luego asociarlo al detalle alimento.
                        $alimento = alimento::find($request->desayuno_codigos[$i]);
                        // Instancio un nuevo detalle alimento
                        $da = new detalleAlimento();
                        $da->rga_gramos        = $request->colacion2_gramos[$i];
                        $da->rga_kcal          = $request->colacion2_kcal[$i];
                        $da->rga_proteina      = $request->colacion2_prot[$i];
                        $da->rga_lipidos       = $request->colacion2_lip[$i];
                        $da->rga_carbohidratos = $request->colacion2_ch[$i];
                        $da->subComida()->associate($unaSubcomida);
                        $da->planesAlimentario()->associate($plan);
                        $da->Alimento()->associate($alimento);
                        $da->save();
                    }
                    break;
                case 'ONCE':
                    for ($i=0; $i < count($request->once_codigos); $i++) { 
                        // Traigo el alimento de la bd para luego asociarlo al detalle alimento.
                        $alimento = alimento::find($request->desayuno_codigos[$i]);
                        // Instancio un nuevo detalle alimento
                        $da = new detalleAlimento();
                        $da->rga_gramos        = $request->once_gramos[$i];
                        $da->rga_kcal          = $request->once_kcal[$i];
                        $da->rga_proteina      = $request->once_prot[$i];
                        $da->rga_lipidos       = $request->once_lip[$i];
                        $da->rga_carbohidratos = $request->once_ch[$i];
                        $da->subComida()->associate($unaSubcomida);
                        $da->planesAlimentario()->associate($plan);
                        $da->Alimento()->associate($alimento);
                        $da->save();
                    }
                    break;
                case 'CENA':
                    for ($i=0; $i < count($request->cena_codigos); $i++) { 
                        // Traigo el alimento de la bd para luego asociarlo al detalle alimento.
                        $alimento = alimento::find($request->desayuno_codigos[$i]);
                        // Instancio un nuevo detalle alimento
                        $da = new detalleAlimento();
                        $da->rga_gramos        = $request->cena_gramos[$i];
                        $da->rga_kcal          = $request->cena_kcal[$i];
                        $da->rga_proteina      = $request->cena_prot[$i];
                        $da->rga_lipidos       = $request->cena_lip[$i];
                        $da->rga_carbohidratos = $request->cena_ch[$i];
                        $da->subComida()->associate($unaSubcomida);
                        $da->planesAlimentario()->associate($plan);
                        $da->Alimento()->associate($alimento);
                        $da->save();
                    }
                    break;
                
                default:
                    // return redirect()->back();
                    break;
            }

          }
        }
            
        }else{
            alertify()->error('No se ha podido guardar el plan alimentario.')->delay(10000)->clickToClose()->position('bottom left');
            return redirect()->back();
        }
       alertify()->success('El plan alimentario ha sido guardado con éxito.')->delay(10000)->clickToClose()->position('bottom left');
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
