<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;
use frust\categoriasAlimento;
class apiController extends Controller
{
    public function getCategorias($id)
    {
      $ct = categoriasAlimento::where('ga_id',$id)->select('id','ct_nombre')->get();
      return response()->json($ct);
    }
}
