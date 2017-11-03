@extends('layouts.mainOutLayout')
@section('title','Calcula tu estado nutricional')

@section('sobreContainer')
  <section id="titulofc">
    <div class="fullDiv text-center pt-3 pb-5 textoBlanco">
      <span class="display-4">Tu situación <strong>actual</strong></span>
    </div>
  </section>
  <div class="fullDiv bajoUnPoco">
    <div class="d-flex justify-content-center">
      <img src="{{asset('images/vistas_publicas/strawberry.svg')}}" width="170px" height="170px">
    </div>
  </div>
@endsection

@section('content')
<div class="row textoBlanco text-center mb-5 pb-5 pr-3 pl-3">

  <div class="col-sm-6 col-lg-4 mb-3">
    <div class="flatColorFC1 p-4">
      <div class="fullDiv text-center fontAwH2 mb-1">
        <img src="{{asset('images/formulasComunes/imc.svg')}}" width="150px">
      </div>
      <div class="fullDiv mb-2 fontAwH5">
        IMC
      </div>
      <div class="fullDiv mb-3 fontAwH6">
        {{ $imc [0]}} - <strong>{{ $imc [1]}}</strong>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-4 mb-3">
    <div class="flatColorFC2 p-4">
      <div class="fullDiv text-center fontAwH2 mb-1">
        <img src="{{asset('images/formulasComunes/pesoTalla.svg')}}" width="150px">
      </div>
      <div class="fullDiv mb-2 fontAwH5">
        IPT
      </div>
      <div class="fullDiv mb-3 fontAwH6">
        {{$indicePT[0]}} - <strong>{{$indicePT[1]}}</strong>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-4 mb-3">
    <div class="flatColorFC3 p-4">
      <div class="fullDiv text-center fontAwH2 mb-1">
        <img src="{{asset('images/formulasComunes/pesoAjustado.svg')}}" width="150px">
      </div>
      <div class="fullDiv mb-2 fontAwH5">
        Peso ajustado
      </div>
      <div class="fullDiv mb-3 fontAwH6">
        <strong>{{$pesoAjustado}}</strong> Kg
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-4 mb-3">
    <div class="flatColorFC4 p-4">
      <div class="fullDiv text-center fontAwH2 mb-1">
        <img src="{{asset('images/formulasComunes/minAceptable.svg')}}" width="150px">
      </div>
      <div class="fullDiv mb-2 fontAwH5">
        Peso minimo
      </div>
      <div class="fullDiv mb-3 fontAwH6">
        <strong>{{$minAceptable}}</strong> Kg
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-4 mb-3">
    <div class="flatColorFC5 p-4">
      <div class="fullDiv text-center fontAwH2 mb-1">
        <img src="{{asset('images/formulasComunes/maxAceptable.svg')}}" width="150px">
      </div>
      <div class="fullDiv mb-2 fontAwH5">
        Peso maximo
      </div>
      <div class="fullDiv mb-3 fontAwH6">
        <strong>{{$maxAceptable}}</strong> Kg
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-lg-4 mb-3">
    <div class="flatColorFC6 p-4">
      <div class="fullDiv text-center fontAwH2 mb-1">
        <img src="{{asset('images/formulasComunes/pesoIdeal.svg')}}" width="150px">
      </div>
      <div class="fullDiv mb-2 fontAwH5">
        Peso ideal
      </div>
      <div class="fullDiv mb-3 fontAwH6">
        <strong>{{$pesoIdeal}}</strong> Kg
      </div>
    </div>
  </div>
</div>{{-- .row --}}
@endsection
