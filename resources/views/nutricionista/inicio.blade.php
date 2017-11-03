@extends('layouts.main')

@section('title','Pagina principal')

@section('content')
<div class="container text-center">
    <div class="display-4">Bienvenido <br/> <strong>{{ \Auth::user()->us_nombres}}</strong></div>
     <div class="fullDiv mt-3">
        @if(strtoupper(\Auth::user()->us_sexo) =='F' || strtoupper(\Auth::user()->us_sexo) =='FEMENINO')
          <img src="{{ asset('images/img_nutricionista/women.svg') }}" width="400px">
        @elseif(strtoupper(\Auth::user()->us_sexo) =='M' || strtoupper(\Auth::user()->us_sexo) =='MASCULINO')
        <img src="{{ asset('images/img_nutricionista/men.svg') }}" width="400px">
        @endif
        </div>
</div>
@endsection