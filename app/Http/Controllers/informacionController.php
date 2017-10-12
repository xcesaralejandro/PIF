<?php

namespace frust\Http\Controllers;

class informacionController extends Controller
{
    // ENFERMEDADES
    public function detalleEnfermedades()
    {
        return View('admin.enfermedades.detalle');
    }

    // SELLOS NEGROS
    public function listarSellosNegros()
    {
        return View('admin.sellosnegros.listar');
    }

    public function agregarSellosNegros()
    {
        return View('admin.sellosnegros.agregar');
    }
    public function detalleSellosNegros()
    {
        return View('admin.sellosnegros.detalle');
    }

    // ETIQUETA NUTRICIONAL
    public function listarEtiqueta()
    {
        return View('admin.etiquetanutricional.listar');
    }

    public function agregarEtiqueta()
    {
        return View('admin.etiquetanutricional.agregar');
    }
    public function detalleEtiqueta()
    {
        return view('admin.etiquetanutricional.detalle');
    }
}
