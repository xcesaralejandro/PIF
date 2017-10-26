<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') - Frust</title>
  <!-- carga de todos los archivos css para todos los main -->
  @include('partials.mainCSS')
  @yield('css')
  <link rel="stylesheet" href="{{ asset('css/noClientes.css') }}">
</head>
<body>
  @include('partials.navbar')
  @yield('sobreContainer')
  <div class="container">
        {{-- Traemos el modal del loguin --}}
        @include('partials.modalLogin')
        {{-- Cargamos el contenido --}}
        @yield('content')
  </div>
  <!-- carga de archivos js para todos los main -->
  @include('partials.mainJS')
  @yield('js')
  @include('alertify::alertify')
</body>
</html>
