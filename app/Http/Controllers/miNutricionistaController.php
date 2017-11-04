<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\User;
class miNutricionistaController extends Controller
{
    public function nutricionista($id) {
    	$nutricionista = User::find($id);
    	 // dd($nutricionista);
    	return view('cliente.miNutricionista.miNutri')->with('nutricionista',$nutricionista);

    }
}
