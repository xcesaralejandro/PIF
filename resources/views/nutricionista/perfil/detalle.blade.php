@extends('layouts.main')

@section('title','Información del nutricionista')

@section('content')
<style>.cuerpoPagina {padding: 0px;}</style>
<section id="profileN" class="pb-5">
    <a href="#" id="cambiarNutria">
      <div id="btnSolicitar" class="p-2 btnSolicitarNutri">
        Utilizar nutricionista
      </div>
    </a>
  <div class="fullDiv text-center headerProfile">
      <h3>NOMBRE NOMBRENOMBRE APELLIDO APELLIDO</h3>
  </div>

  <div class="fullDiv text-center acomodandoHeader">
    <img src="{{asset('images/descarga.jpg')}}" class="rounded-circle img-thumbnail">
  </div>

  <div class="subInfoNutria">
    <div class="fullDiv text-center expNutria">
      0 - 2 Años de experiencia
    </div>

    <div class="fullDiv text-center">
        <div>
          <span class="textoGris">
            <i class="fa fa-mobile" aria-hidden="true"></i>
          </span>
          +569 00000000
        </div>
        <div>
          <span class="textoGris">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </span>
          email@email.com
        </div>
    </div>
  </div>

  <div class="fullDiv pl-5 pr-5">
    <div class="fullDiv pb-4">
      <span class="display-4">Descripción</span>
    </div>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>

</section>
@endsection
@section('js')
  <script>
    $(function(){
      $('#cambiarNutria').on('click',function(e){
        e.preventDefault();
        alertify
        .okBtn("Solicitar")
    		.cancelBtn("Salir")
        .confirm("Si envía una solicitud a este nutricionista las anteriores solicitudes se cancelaran." +
        " Los cambios no se verán reflejados hasta que el nutricionista acepte su solicitud, es posible que " +
        "el nutricionista aplique cargos por sus servicios. <br /> <br /> ¿Está seguro que desea envíar una solicitud de " +
       "requerimientos para este nutricionista?");
      });
    });
  </script>
@endsection
