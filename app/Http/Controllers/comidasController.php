<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\comida;
use frust\subComida;
use frust\User;
class comidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comidas = comida::with(['subComidas'])->orderBy('id','DESC')->paginate(5);        
        return view('nutricionista.comidas.listar')
        ->with('comidas',$comidas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nutricionista.comidas.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $desactivado = '0';
        $comidaDiaria= array(
            'Desayuno',
            'Primera colacion',
            'Almuerzo',
            'Segunda colacion',
            'Once',
            'Cena' );              

        $total = array_sum($request->porcentaje);

        if($total < 100){
            alertify()->error('No ha llegado al 100%')->persistent()->clickToClose();
            return redirect()->back()->withInput();
        }elseif($total > 100){
            alertify()->error('Se ha excedido del 100%')->persistent()->clickToClose();
            return redirect()->back()->withInput();

        }else{
            $total = comida::all();
            foreach ($total as $value) {
             $value->cm_estado = $desactivado;
             $value->save();
         }
         $comida = new comida;
         $comida->cm_nombre = $request->cm_nombre;
         $comida->us_id = \Auth::user()->id;
         if ($comida->save()) {
            for ($i=0; $i < sizeof($request->porcentaje) ; $i++) { 
                $subComida = new subComida;
                $subComida->sbc_nombre =$comidaDiaria[$i];
                $subComida->sbc_porcentaje = $request->porcentaje[$i];
                $subComida->comida()->associate($comida);
                $subComida->save();
            }
            alertify()->success('Enhorabuena se a agregado su nueva comida')->persistent()->clickToClose();
            return redirect()->route('comidas.index');              
        }else{
            alertify()->error('Ha ocurrido algo inesperado, intente nuevamente')->persistent()->clickToClose();
            return redirect()->route('comidas.index');      
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
        $comida = comida::find($id);
        return view('nutricionista.comidas.modificar')->with('comida',$comida);
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
        $comida = comida::find($id);
        $comida->cm_nombre =$request->cm_nombre;
        $comida->save();
        alertify()->success('Se ha modificado exitosamente')->persistent()->clickToClose();
        return redirect()->route('comidas.index');  
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
