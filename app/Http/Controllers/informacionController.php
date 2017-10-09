<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;

class informacionController extends Controller
{
    // ENFERMEDADES
    public function listarEnfermedades()
    {
       return View('admin.enfermedades.listar');
    }

    public function agregarEnfermedades()
    {
      return View('admin.enfermedades.agregar');
    }

    // SELLOS NEGROS
    public function listarSellosNegros(){
      return View('admin.sellosnegros.listar');
    }
}
