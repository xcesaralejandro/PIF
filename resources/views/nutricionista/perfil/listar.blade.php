@extends('layouts.main')

@section('title','Buscar nutricionistas')

@section('content')
  <style>.cuerpoPagina{background-color: #F8F8F8;}</style>
    @if ($pt > 0)
      <div class="fullDiv solicitudPendiente p-2 text-center bk_blanco textoGris">
        Actualmente hay una petición de servicios que está a la espera de ser aceptada.
      </div>
    @endif
  <div class="row">

@foreach($perfiles as $perfil)
    <div class="col-md-6 col-lg-4 mt-3">
          <div class="bk_blanco cajitaNutricionistaLinda">
            <a class="borraTextDecoration" href="{{ route ('nutricionistas.detalle', $perfil -> id)}}">
              <div class="fullDiv beautyNutriDiv text-center">
                Visitar perfil
              </div>
            </a>
            <div class="fullDiv text-center pt-4 pb-3 pl-2 pr-2">
              <img src="{{ asset('images/img_nutricionista/'. $perfil->pf_url_imagen) }}" class="rounded-circle img-thumbnail maxredondito">
            </div>
            <div class="fullDiv textoGris text-center pb-3">
           {{ $perfil->us_nombres }} {{ $perfil->us_apellido_paterno }}  {{ $perfil->us_apellido_materno }}
            </div>
            <div class="fullDiv text-center bk_cajitaNutricionistaLinda p-2 textoBlanco">
              @if ($perfil->pf_experiencia == 1)
                {{ $perfil->pf_experiencia }} Año de experiencia
              @else
                {{ $perfil->pf_experiencia }} Años de experiencia
              @endif
            </div>
          </div>
    </div>
@endforeach
  </div>

@endsection
