<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\Regione;
use frust\comuna;
use frust\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class updateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user     = User::find(\Auth::user()->id);
      $region   = Regione::orderBy('rg_nombre','ASC')->pluck('rg_nombre','id');
      $cActual  = $user->co_id;
      $rActual  = $user->rg_id;
      $comuna   = Comuna::orderBy('co_nombre','ASC')->pluck('co_nombre','id');

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
      $this->validate($request, [
        'us_email' => 'required',
        'cf_password' => 'same:password',
        'us_rut'=>'cl_rut'
      ]);

      if ((int)\Auth::user()->id === (int) $id) {
        $user   = User::find(\Auth::user()->id);
        $pass = $user->password;
        $user->fill($request->all());
        if($request->password == ""){ //si dejas en blanco el campo de cnueva contraseña pa
            $user->password = $pass;

    }else{// si coloca algo que lo cambie
        $user->password = bcrypt($request->password);
    }
       if (Hash::check(Input::get('current_password'), Auth::user()->password)){//pregunta si la contraseña colocada es igual a la que esta en la bbdd
        if ($user->save()) {
          alertify()->success('Datos actualizados correctamente.')->delay(10000)->clickToClose()->position('bottom left');
          return redirect()->back();
        }else{
          alertify()->error('No se han podido actualizar los datos de la cuenta.')->delay(10000)->clickToClose()->position('bottom left');
          return redirect()->back();
        }
        }else{
        alertify()->error('La contraseña actual no es valida.')->delay(10000)->clickToClose()->position('bottom left');
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
