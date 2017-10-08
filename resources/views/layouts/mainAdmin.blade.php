<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') - Frust</title>
  <!-- Bootstrap - FontAwesome - Bootstrap select - Hoja personalizada-->
  <link rel="stylesheet" type="text/css" href="{{asset('recursos/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('recursos/fontAwesome/css/fontAwesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('recursos/chosen/chosen.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  @yield('css')
</head>
<body>
  @include('partials.navbar')
  <div class="container">
    <div class="full_container">
      <div class="headerAdmin darkPalet textoBlanco">

        <nav id="secondMenu" class="navbar navbar-toggleable-md navbar-light bg-faded resetNavbarPadding">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#nabvarAdmin" aria-controls="nabvarAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fa fa-bars iconMenu" aria-hidden="true"></i></span>
          </button>
          <a class="navbar-brand"> <img src="{{ asset('images/logo_frust.svg') }}" width="30px" height="30px"> Administrador</a>
          <div class="collapse navbar-collapse" id="nabvarAdmin">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
              @yield('nav')
            </ul>
            <form class="form-inline my-2 my-lg-0" >
              <input class="form-control mr-sm-2" type="text" placeholder="@yield('placeholderBuscar')">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>

      </div>
      <div class="cuerpoPagina">
        {{-- Traemos el modal del loguin --}}
        @include('partials.modalLogin')
        {{-- Cargamos el contenido --}}
        @yield('content')
      </div> 
    </div> 
  </div>
  <!-- jQuery - Bootstrap -->
  <script src="{{ asset('recursos/jquery/jquery.js')}}"></script>
  <script src="{{ asset('recursos/bootstrap/js/bootstrap.js')}}"></script>
  <script src="{{ asset('recursos/chosen/chosen.js')}}"></script>
  @yield('js')
</body>
</html>