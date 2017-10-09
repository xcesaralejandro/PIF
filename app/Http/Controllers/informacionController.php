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

    public function detalleEnfermedades()
    {
      return View('admin.enfermedades.detalle');
    }

    // SELLOS NEGROS
    public function listarSellosNegros(){
      return View('admin.sellosnegros.listar');
    }

    public function agregarSellosNegros(){
      return View('admin.sellosnegros.agregar');
    }

    // ETIQUETA NUTRICIONAL
    public function listarEtiqueta(){
      return View('admin.etiquetanutricional.listar');
    }

    public function agregarEtiqueta(){
      return View('admin.etiquetanutricional.agregar');
    }
}
