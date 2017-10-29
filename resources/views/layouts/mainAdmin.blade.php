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
<body>
  @include('partials.navbar')
  <div class="container">
    <div class="full_container">
      <div class="headerAdmin darkPalet textoBlanco">

        <nav id="secondMenu" class="navbar navbar-toggleable-md navbar-light bg-faded resetNavbarPadding">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#nabvarAdmin" aria-controls="nabvarAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fa fa-bars iconMenu" aria-hidden="true"></i></span>
          </button>
          <a class="navbar-brand"> <img src="{{ asset('images/logo_frust.svg') }}" width="30px" height="30px">
          @yield('title-nav')</a>
          <div class="collapse navbar-collapse" id="nabvarAdmin">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
              @yield('nav')
            </ul>

            <form class="form-inline my-2 my-lg-0" id="buscateesta" action="@yield('action')" method="GET" >
              <input class="form-control mr-sm-2" type="text" name="@yield('name')" placeholder="@yield('placeholderBuscar')">
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
