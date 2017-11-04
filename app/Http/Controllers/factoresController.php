<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\factore;
class factoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factores = factore::where('us_id',\Auth::user()->id)->orderBy('id','DESC')->paginate(15);
        return view('nutricionista.factores.listar')->with('factores',$factores);
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
        $desactivado = '0';

        if($request->ft_proteinas <15){
            alertify()->error('La ingesta de proteinas es muy baja')->persistent()->clickToClose();
            return redirect()->back();
        }elseif($request->ft_proteinas >20){
           alertify()->error('Se ha excedido en la ingesta de proteina')->persistent()->clickToClose();
           return redirect()->back();
       }elseif($request->ft_lipidos<20){
           alertify()->error('La ingesta de lipidos es muy baja')->persistent()->clickToClose();
           return redirect()->back();
       }elseif($request->ft_lipidos >25){
           alertify()->error('Se ha excedido en la ingesta de lipidos')->persistent()->clickToClose();
           return redirect()->back();
       }elseif($request->ft_carbohidratos < 50){
           alertify()->error('La ingesta de carbohidratos es muy baja')->persistent()->clickToClose();
           return redirect()->back();
       }elseif($request->ft_carbohidratos >60){
           alertify()->error('Se ha excedido en la ingesta de carbohidratos')->persistent()->clickToClose();
           return redirect()->back();

       }else{
        $factor = new factore($request->all());
        $factor->us_id = \Auth::user()->id;
        $todos = factore::where('us_id',\Auth::user()->id)->orderBy('id','DESC')->get();
        foreach ($todos as $value) {
            $value->ft_estado = $desactivado;
            $value->save();
        }
        $factor->save();
        alertify()->success('Enhorabuena se a agregado su factor')->persistent()->clickToClose();
        return redirect()->back();
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

// //En caso de que se quiera activar esta opcion
//     public function Activar($id)
//     {
//         $activar = '1';
//         $desactivar = '0';
//         $factor = factore::find($id);
//         $todos = factore::all();
//         foreach ($todos as $value) {
//             $value->ft_estado = $desactivar;
//             $value->save();
//         }
//         $factor->ft_estado = $activar;
//         $factor->save();
//         alertify()->success('Se a activado un nuevo factor')->persistent()->clickToClose();
//         return redirect()->back();
//     }
}
