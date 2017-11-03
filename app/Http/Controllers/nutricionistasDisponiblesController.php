<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;

class nutricionistasDisponiblesController extends Controller
{
    public function listar(){

      return View('nutricionista.perfil.listar');
    }

    public function detalle(){

      return View('nutricionista.perfil.detalle');
    }
}
