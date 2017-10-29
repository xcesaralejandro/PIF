<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\Http\Requests\enfermedadesRequest;
use frust\enfermedade;

class enfermedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $enfermedades = enfermedade::Search($request->nombre)->orderBy('id','DESC')->paginate(15);
        return View('admin.enfermedades.listar')->with('enfermedades',$enfermedades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.enfermedades.agregar');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detalle($id)
    {
        $enfermedad = enfermedade::find($id);
        return View('admin.enfermedades.detalle')->with('enfermedad',$enfermedad);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(enfermedadesRequest $request)
    {

        $enfermedad = new enfermedade();   
        $enfermedad->ef_nombre =ucfirst($request->ef_nombre); 
        $enfermedad->us_id = \Auth::user()->id;
        $enfermedad->ef_descripcion = $request->ef_descripcion; 
        $enfermedad->ef_url = $request->ef_url;       
        $file = $request->file('ef_url_imagen');
        $nombre = 'img_enfermedades' . time() . '.' . $file->getClientOriginalExtension();
        $lugar = public_path() . '/images/img_enfermedades/';
        $file->move($lugar, $nombre);
        $enfermedad->ef_url_imagen = $nombre;
        $enfermedad->save();

        alertify()->success('Enhorabuena se a agregado su enfermedad')->persistent()->clickToClose();
        return redirect()->route('enfermedades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enfermedad = enfermedade::find($id);
        return view('admin.enfermedades.modificar')->with('enfermedad',$enfermedad);

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

       $enfermedad =enfermedade::find($id);  
       $enfermedad->ef_nombre =ucfirst($request->ef_nombre); 
       $enfermedad->us_id = \Auth::user()->id;
       $enfermedad->ef_descripcion = $request->ef_descripcion; 
       $enfermedad->ef_url = $request->ef_url;       
       $file = $request->file('ef_url_imagen');
       $nombre = 'img_enfermedades' . time() . '.' . $file->getClientOriginalExtension();
       $lugar = public_path() . '/images/img_enfermedades/';
       $file->move($lugar, $nombre);
       $enfermedad->ef_url_imagen = $nombre;
       $enfermedad->save();
       alertify()->success('Se ha modificado exitosamente')->persistent()->clickToClose();
       return redirect()->route('enfermedades.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enfermedad = enfermedade::find($id);
        $dir = public_path() . '/images/img_enfermedades/';
        $imagen =$enfermedad->ef_url_imagen;
        unlink($dir.$imagen);       
        $enfermedad->delete();
        alertify()->success('Se elimino correctamente ')->persistent()->clickToClose();
        return redirect()->route('enfermedades.index');
    }
    
}
