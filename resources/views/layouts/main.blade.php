<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Frust</title>
    <!-- Bootstrap - FontAwesome - Hoja personalizada-->
    <link rel="stylesheet" type="text/css" href="{{asset('recursos/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('recursos/fontAwesome/css/fontAwesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    @yield('css')
  </head>
  <body>
    @include('partials.navbar')
    <div class="container">
      <div class="full_container">
        <div class="cabeceraPagina lightDarkPalet textoBlanco">@yield('title') <strong> | FRUST</strong></div>
        <div class="cuerpoPagina">
          @yield('content')
        </div> 
      </div> 
    </div>
    <!-- jQuery - Bootstrap -->
    <script src="{{ asset('recursos/jquery/jquery.js')}}"></script>
    <script src="{{ asset('recursos/bootstrap/js/bootstrap.js')}}"></script>
    @yield('js')
  </body>
</html>