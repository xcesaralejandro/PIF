<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\planesAlimentario;
use frust\nuevosAvance;
use frust\Traits\formulas;
use frust\consumosDiario;

class inicioClienteController extends Controller
{
  use formulas;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pa = planesAlimentario::all()
                                 ->where('us_id', \Auth::user()->id)
                                 ->count();

        $cd = consumosDiario::all()
                             ->where('us_id', \Auth::user()->id)
                             ->count();

        $na = nuevosAvance::all()
                            ->where('us_id', \Auth::user()->id)
                            ->count();

        $lastna = nuevosAvance::orderBy('id','desc')
                                ->where('us_id', \Auth::user()->id)
                                ->take(1)
                                ->get();

        $agua = number_format($lastna[0]->na_vct * 1.1 / 1000,1);
        $pesoIdeal  = self::pesoIdeal($lastna[0]->na_altura,\Auth::user()->us_sexo);
        $imcInicial = self::imc(\Auth::user()->us_peso,\Auth::user()->us_estatura);
        $imcActual  = self::imc($lastna[0]->na_peso, $lastna[0]->na_altura);
        $pesotalla  = self::indicePesoTalla($lastna[0]->na_peso,self::minimoAceptable($lastna[0]->na_altura));

        return View('cliente.Inicio')
        ->with('pa',$pa)
        ->with('cd',$cd)
        ->with('agua',$agua)
        ->with('na',$na)
        ->with('pt',$pesotalla)
        ->with('imcInicial', $imcInicial)
        ->with('imcActual', $imcActual)
        ->with('pideal',$pesoIdeal);
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
