@extends('layouts.main')

@section('title','Nutricionistas miembros de la aplicación')

@section('content')
  <style>.cuerpoPagina{background-color: #F8F8F8;}</style>
  <div class="text-center">
    <span class="display-4">Nutricionistas que están en frust</span>
    <hr>
  </div>
  <div class="row">
@foreach($perfiles as $perfil)
    <div class="col-md-6 col-lg-4 mt-3">
          <div class="bk_blanco cajitaNutricionistaLinda">
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
  <div class="text-center">
    {!! $perfiles->links() !!}
  </div>

@endsection
