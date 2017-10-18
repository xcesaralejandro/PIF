<?php

namespace frust\Http\Controllers\Auth;

use frust\User;
use frust\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password'=> 'min:4|required',
            'cf_password' => 'min:4|same:password',
            'us_email'=>'email|unique:Users'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \frust\User
     */
    protected function create(array $data)
    {
        date_default_timezone_set('America/Argentina/Salta');
        $fecha = Carbon::now();
        $fecha->toDateTimeString();
        $fecha->addMonth();
    
        return User::create([
            'us_email' => $data['us_email'],
            'password' => bcrypt($data['password']),
            'us_nombres' => $data['us_nombres'],
            'us_apellido_paterno' => $data['us_apellido_paterno'],
            'us_apellido_materno' => $data['us_apellido_materno'],
            'us_sexo' => $data['us_sexo'],
            'us_fecha_nacimiento' => $data['us_fecha_nacimiento'],
            'us_peso' => $data['us_peso'],
            'us_estatura' => $data['us_estatura'],
            'co_id' => $data['co_id'],
            'rg_id' => $data['rg_id'],
            'us_fecha_caducacion'=>$fecha
        ]);
    }
}
