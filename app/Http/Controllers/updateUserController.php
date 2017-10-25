<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\Regione;
use frust\comuna;
use frust\User;
class updateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user   = User::find(\Auth::user()->id);
      $region = Regione::orderBy('rg_nombre','ASD')->pluck('rg_nombre','id');
      $comuna = Comuna::orderBy('co_nombre','ASD')->pluck('co_nombre','id');

      return view('auth.update')
                  ->with('region',$region)
                  ->with('user',$user)
                  ->with('comuna',$comuna);
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
      if ((int)\Auth::user()->id === (int) $id) {
        $user   = User::find(\Auth::user()->id);
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        if ($user->save()) {
          alertify()->success('Datos actualizados correctamente.')->delay(10000)->clickToClose()->position('bottom left');
          return redirect()->back();
        }else{
          alertify()->error('No se han podido actualizar los datos de la cuenta.')->delay(10000)->clickToClose()->position('bottom left');
          return redirect()->back();
        }
      }else{
        alertify()->error('No se han podido actualizar los datos de la cuenta.')->delay(10000)->clickToClose()->position('bottom left');
        return redirect()->back();
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
