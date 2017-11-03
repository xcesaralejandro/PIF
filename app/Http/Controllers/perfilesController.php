<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\User;
class perfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $perfil = User::find(\Auth::user()->id);
       if(is_null($perfil->pf_descripcion)){
         return view('nutricionista.perfil.agregar')->with('perfil',$perfil);
     }else{
         return view('nutricionista.perfil.detalle')->with('perfil',$perfil);    
     }

 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $perfil = User::find(\Auth::user()->id);
       return view('nutricionista.perfil.agregar')->with('perfil',$perfil);
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
      $perfil   = User::find(\Auth::user()->id);
      if(is_null($perfil->pf_descripcion)){
        if(!is_null($request->file('pf_url_imagen'))){
           $perfil->pf_url_imagen = $request->pf_url_imagen;       
           $file = $request->file('pf_url_imagen');
           $nombre = 'img_perfil_' . time() . '.' . $file->getClientOriginalExtension();
           $lugar = public_path() . '/images/img_nutricionista/';
           $file->move($lugar, $nombre);
           $perfil->pf_url_imagen = $nombre;
       }
       $perfil->pf_descripcion = $request->pf_descripcion;
       $perfil->pf_experiencia = $request->pf_experiencia;
       $perfil->pf_celular= $request->pf_celular;
       $perfil->save();
       alertify()->success('Se ha creado exitosamente')->persistent()->clickToClose();
       return redirect()->route('perfil.index');
   }     
   if(!is_null($perfil->pf_descripcion)){
       $imagen = $perfil->pf_url_imagen;
       $ver = $request->file('pf_url_imagen');
       if(is_null($ver)){
         $perfil->pf_url_imagen = $imagen;
     }else{
      $nombre = 'img_perfil_' . time() . '.' . $ver->getClientOriginalExtension();
      $lugar = public_path() . '/images/img_nutricionista/';
      $ver->move($lugar, $nombre);
      $perfil->pf_url_imagen = $nombre;
  }
  $perfil->pf_descripcion = $request->pf_descripcion;
  $perfil->pf_experiencia = $request->pf_experiencia;
  $perfil->pf_celular= $request->pf_celular;
  $perfil->save();
  alertify()->success('Se ha modificado exitosamente')->persistent()->clickToClose();
  return redirect()->route('perfil.index'); 
}

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
