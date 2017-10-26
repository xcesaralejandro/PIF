<?php

namespace frust\Http\Controllers;

use Illuminate\Http\Request;

class inicioAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('admin.inicio');
    }

   
}
