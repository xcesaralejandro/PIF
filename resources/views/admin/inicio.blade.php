@extends('layouts.main')

@section('title','Zona administrativa')

@section('content')
<div class="container text-center">
    <div class="display-4">Bienvenido <br/> <strong>{{ \Auth::user()->us_nombres}}</strong></div>
     <div class="fullDiv mt-3">
   
          <img src="{{ asset('images/admin.jpg') }}" width="400px">
        </div>
</div>
@endsection