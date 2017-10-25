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
</head>
<body onload="deshabilitaRetroceso()">
  @include('partials.navbar')
  <div class="container">
    <div class="full_container">
      <div class="cabeceraPagina lightDarkPalet textoBlanco">@yield('title') <strong> | FRUST</strong></div>
      <div class="cuerpoPagina">
        {{-- Traemos el modal del loguin --}}
        @include('partials.modalLogin')
        {{-- Cargamos el contenido --}}
        @yield('content')
        @include('partials.desplegarErrors')
      </div>
    </div>
  </div>
  <!-- carga de archivos js para todos los main -->
  @include('partials.mainJS')
  @yield('js')
  @include('alertify::alertify')
</body>
</html>
