<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\etiquetasNutricionale;
use frust\camposEtiquetasNutricionale;
class etiquetaNutricionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campos = camposEtiquetasNutricionale::orderBy('id','DESC')->paginate(1);
        $etiquetas = etiquetasNutricionale::orderBy('id','DESC')->paginate(15);
        $en_cont = etiquetasNutricionale::pluck('id','id');
        $en_cont = count($en_cont);
        return view('admin.etiquetanutricional.listar')
        ->with('campos',$campos)
        ->with('etiquetas',$etiquetas)
        ->with('en_cont',$en_cont);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detalle($id)
    {
        $etiqueta = etiquetasNutricionale::find($id);
        $en_cont = etiquetasNutricionale::pluck('id', 'id');
        $en_cont = count($en_cont);
        return View('admin.etiquetanutricional.detalle')
        ->with('etiqueta',$etiqueta)
        ->with('en_cont',$en_cont);
    }
    public function create()
    {
        $etiquetas = etiquetasNutricionale::orderBy('id','DESC')->paginate(10);
        $en_cont = etiquetasNutricionale::pluck('id','id');
        $en_cont = count($en_cont);
        return view('admin.etiquetanutricional.agregar')
        ->with('etiquetas',$etiquetas)
        ->with('en_cont',$en_cont);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $etiqueta = new etiquetasNutricionale();   
        $etiqueta->en_titulo =ucfirst($request->en_titulo); 
        $etiqueta->us_id = \Auth::user()->id;
        $etiqueta->en_descripcion = $request->en_descripcion;       
        $file = $request->file('en_url_imagen');
        $nombre = 'img_etiqueta' . time() . '.' . $file->getClientOriginalExtension();
        $lugar = public_path() . '/images/img_etiqueta/';
        $file->move($lugar, $nombre);
        $etiqueta->en_url_imagen = $nombre;
        $etiqueta->save();

        alertify()->success('Enhorabuena se a agregado su etiqueta nutricional')->persistent()->clickToClose();
        return redirect()->route('etiquetanutricional.index');
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
        $etiquetas = etiquetasNutricionale::find($id);
        $en_cont = etiquetasNutricionale::pluck('id','id');
        $en_cont = count($en_cont);
        return view('admin.etiquetanutricional.modificar')
        ->with('etiquetas',$etiquetas)
        ->with('en_cont',$en_cont);
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
        $etiqueta = etiquetasNutricionale::find($id);   
        $etiqueta->en_titulo =ucfirst($request->en_titulo); 
        $etiqueta->us_id = \Auth::user()->id;
        $etiqueta->en_descripcion = $request->en_descripcion;       
        $file = $request->file('en_url_imagen');
        $nombre = 'img_etiqueta' . time() . '.' . $file->getClientOriginalExtension();
        $lugar = public_path() . '/images/img_etiqueta/';
        $file->move($lugar, $nombre);
        $etiqueta->en_url_imagen = $nombre;
        $etiqueta->save();

        alertify()->success('Se ha modificado existosamente')->persistent()->clickToClose();
        return redirect()->route('etiquetanutricional.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etiqueta = etiquetasNutricionale::find($id);
       $dir = public_path() . '/images/img_etiqueta/';
       $imagen =$etiqueta->en_url_imagen;
       unlink($dir.$imagen);
        $etiqueta->delete();
        alertify()->success('Se elimino correctamente ')->persistent()->clickToClose();
        return redirect()->back();
    }
}
