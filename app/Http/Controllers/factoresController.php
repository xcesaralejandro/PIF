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
        $factores = factore::orderBy('id','DESC')->paginate(10);
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

       $total = $request->ft_proteinas+$request->ft_lipidos + $request->ft_carbohidratos;
       if($total != 100){
        alertify()->error('mal')->persistent()->clickToClose();
        return redirect()->back();
    }else{
        $factor = new factore($request->all());
        $factor->save();
        alertify()->success('Agregado')->persistent()->clickToClose();
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
}
