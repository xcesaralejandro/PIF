<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\Regione;
use frust\comuna;
use frust\User;
use Carbon\Carbon;
use frust\Http\Requests\agregarNutricionistaRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class agregarNutricionistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nutricionistas = User::Search($request->nombre)->where('us_tipo_usuario','nutricionista')
        ->orderBy('us_nombres','DESC')->paginate(20);
        return view('admin.agregarNutricionistas.listar')
        ->with('nutricionistas',$nutricionistas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comuna = comuna::orderBy('rg_id', 'DESC')->pluck('co_nombre', 'id');
        $region = Regione::orderBy('id', 'DESC')->pluck('rg_nombre', 'id');
        return view('admin.agregarNutricionistas.agregar')
        ->with('comuna',$comuna)
        ->with('region',$region);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(agregarNutricionistaRequest $request)
    {

        date_default_timezone_set('America/Argentina/Salta');
        $fecha = Carbon::now();
        $fecha->toDateTimeString();
        $fecha->addYear();
        $tipo = 'nutricionista';

        $nutricionista = new User();
        $nutricionista->us_nombres = ucfirst($request->us_nombres);
        $nutricionista->us_rut = $request->us_rut;
        $nutricionista->us_apellido_paterno = ucfirst($request->us_apellido_paterno);
        $nutricionista->us_apellido_materno = ucfirst($request->us_apellido_materno);
        $nutricionista->us_email = $request->us_email;
        $nutricionista->co_id =$request->co_id;
        $nutricionista->rg_id =$request->rg_id;
        $nutricionista->password = bcrypt($request->password);
        $nutricionista->us_sexo = $request->us_sexo;
        $nutricionista->us_fecha_nacimiento = $request->us_fecha_nacimiento;
        $nutricionista->us_estatura = $request->us_estatura;
        $nutricionista->us_peso = $request->us_peso;
        $nutricionista->us_fecha_caducacion = $fecha;
        $nutricionista->us_tipo_usuario =$tipo;
        $nutricionista->us_registro_profesion = $request->us_registro_profesion;
        $titulo = $request->file('us_img_titulo');
        $nombre_t = 'us_img_titulo_' . time() . '.' . $titulo->getClientOriginalExtension();
        $lugar = public_path() . '/images/img_nutricionista/';
        $titulo->move($lugar, $nombre_t);
        $nutricionista->us_img_titulo = $nombre_t;
        $titulo = $request->file('us_img_carnet_f');
        $nombre_c_f = 'us_img_carnet_f_' . time() . '.' . $titulo->getClientOriginalExtension();
        $lugar = public_path() . '/images/img_nutricionista/';
        $titulo->move($lugar, $nombre_c_f);
        $nutricionista->us_img_carnet_f = $nombre_c_f;
        $titulo = $request->file('us_img_carnet_p');
        $nombre_c_p = 'us_img_carnet_p_' . time() . '.' . $titulo->getClientOriginalExtension();
        $lugar = public_path() . '/images/img_nutricionista/';
        $titulo->move($lugar, $nombre_c_p);
        $nutricionista->us_img_carnet_p = $nombre_c_p;  
        if($nutricionista->save()){
           $nutricionista->us_id_nutricionista = $nutricionista->id;
           $nutricionista->save();            
       }              
       alertify()->success('Enhorabuena se a agregado un nuevo nutricionista')->persistent()->clickToClose();

       return redirect()->route('agregarNutricionistas.index');

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
     $nutricionista = User::find($id);
     $comuna = comuna::orderBy('rg_id', 'DESC')->pluck('co_nombre', 'id');
     $region = Regione::orderBy('id', 'DESC')->pluck('rg_nombre', 'id');
     return view('admin.agregarNutricionistas.modificar')
     ->with('nutricionista',$nutricionista)
     ->with('comuna',$comuna)
     ->with('region',$region);
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalle($id){
        $nutricionista = User::find($id);
        return view('admin.agregarNutricionistas.detalle')
        ->with('nutricionista',$nutricionista);

    }
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'us_email' => 'required',
        'us_rut'=>'cl_rut'
      ]);
        $user   = User::find($id);
        $pass = $user->password;
        $user->fill($request->all());
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $nutricionista = User::find($id);
       $dir = public_path() . '/images/img_nutricionista/';
       $titulo = $nutricionista->us_img_titulo;
       $carnet_f =$nutricionista->us_img_carnet_f;
       $carnet_p =$nutricionista->us_img_carnet_p;
       if (!is_null($titulo)){
        unlink($dir.$titulo);
     }if(!is_null($carnet_f)){
        unlink($dir.$carnet_f);
     }if(!is_null($carnet_p)){
       unlink($dir.$carnet_p);
     }
       $nutricionista->delete();
       alertify()->success('Se elimino correctamente ')->persistent()->clickToClose();
       return redirect()->back();  
    }
}
