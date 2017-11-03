@extends('layouts.main')

@section('title','Buscar nutricionistas')

@section('content')
  <style>.cuerpoPagina{background-color: #F8F8F8;}</style>
  <div class="row">

    <div class="col-md-6 col-lg-4">

          <div class="bk_blanco cajitaNutricionistaLinda">
            <a class="borraTextDecoration" href="">
              <div class="fullDiv beautyNutriDiv text-center">
                Visitar perfil
              </div>
            </a>
            <div class="fullDiv text-center pt-4 pb-3 pl-2 pr-2">
              <img src="{{asset('images/descarga.jpg')}}" class="rounded-circle img-thumbnail">
            </div>
            <div class="fullDiv textoGris text-center pb-3">
              NOMBRE NOMBRE  APELLIDO APELLIDO
            </div>
            <div class="fullDiv text-center bk_cajitaNutricionistaLinda p-2 textoBlanco">
              0 - 2 Años de experiencia
            </div>

          </div>

    </div>

  </div>
@endsection
