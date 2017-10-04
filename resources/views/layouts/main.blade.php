<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
      <div class="container_contenido">
        @yield('content')
      </div>  
    </div>
    <!-- jQuery - Bootstrap -->
    <script src="{{ asset('recursos/jquery/jquery.js')}}"></script>
    <script src="{{ asset('recursos/bootstrap/js/bootstrap.js')}}"></script>
    @yield('js')
  </body>
</html>