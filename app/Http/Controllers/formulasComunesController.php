<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\Traits\formulas;

class formulasComunesController extends Controller
{
    use formulas;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulasComunes');
    }

    public function calcular(Request $request)
    {
      $this->validate($request,[
        'altura' => 'numeric|required',
        'peso'   => 'numeric|required',
        'sexo'   => 'required'
      ]);


      $imc          = self::imc($request->peso, $request->altura);
      $pesoIdeal    = self::pesoIdeal($request->altura, $request->sexo);
      $minAceptable = self::minimoAceptable($request->altura);
      $maxAceptable = self::maxAceptable($request->altura);
      $indicePT     = self::indicePesoTalla($request->peso, $minAceptable);
      $pesoAjustado = self::pesoAjustado($request->peso,$pesoIdeal);


      return view('resultadoFormulas')
      ->with('imc',$imc)
      ->with('minAceptable',$minAceptable)
      ->with('maxAceptable',$maxAceptable)
      ->with('indicePT',$indicePT)
      ->with('pesoAjustado',$pesoAjustado)
      ->with('pesoIdeal',$pesoIdeal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('resultadoFormulas');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
