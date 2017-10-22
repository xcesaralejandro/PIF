<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\sellosNegro;
use frust\Http\Requests\sellosNegrosRequest;
class sellosNegrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellos = sellosNegro::orderBy('id','DESC')->paginate(10);
        return view('admin.sellosnegros.listar')->with('sellos',$sellos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sellosnegros.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detalle($id)
    {
        $sello = sellosNegro::find($id);
        return view('admin.sellosnegros.detalle')->with('sello',$sello);

    }
    public function store(sellosNegrosRequest $request)
    {

        $sello = new sellosNegro();   
        $sello->sn_nombre =ucfirst($request->sn_nombre); 
        $sello->us_id = \Auth::user()->id;
        $sello->sn_descripcion = $request->sn_descripcion;        
        $file = $request->file('sn_url_imagen');
        $nombre = 'img_sellosnegros' . time() . '.' . $file->getClientOriginalExtension();
        $lugar = public_path() . '/images/img_sellosnegros/';
        $file->move($lugar, $nombre);
        $sello->sn_url_imagen = $nombre;
        $sello->save();

        alertify()->success('Registrado exitosamente')->persistent()->clickToClose();
        return redirect()->route('sellosnegros.index');
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
       $sello = sellosNegro::find($id);
       return view('admin.sellosnegros.modificar')->with('sello',$sello);
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
        $sello = sellosNegro::find($id);   
        $sello->sn_nombre =ucfirst($request->sn_nombre); 
        $sello->us_id = \Auth::user()->id;
        $sello->sn_descripcion = $request->sn_descripcion;        
        $file = $request->file('sn_url_imagen');
        $nombre = 'img_sellosnegros' . time() . '.' . $file->getClientOriginalExtension();
        $lugar = public_path() . '/images/img_sellosnegros/';
        $file->move($lugar, $nombre);
        $sello->sn_url_imagen = $nombre;
        $sello->save();

        alertify()->success('Registrado exitosamente')->persistent()->clickToClose();
        return redirect()->route('sellosnegros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sello = sellosNegro::find($id);
        $sello->delete();
        alertify()->error('Se elimino correctamente ')->persistent()->clickToClose();
        return redirect()->route('sellosnegros.index');
    }
}
