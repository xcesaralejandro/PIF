@extends('layouts.main')

@section('title','Información del nutricionista')

@section('content')

<style>.cuerpoPagina {padding: 0px;}</style>

<section id="profileN" class="pb-5">
  @if (strtoupper(\Auth::user()->us_tipo_usuario) === 'CLIENTE')
    <a href="/enviarSolicitud/{{ $perfil->id }}" id="cambiarNutria">
      <div id="btnSolicitar" class="p-2 btnSolicitarNutri">
        Contratar nutricionista
      </div>
    </a>
  @endif

  <div class="fullDiv text-center headerProfile">
    <h3>{{ $perfil->us_nombres }} {{ $perfil->us_apellido_paterno }} {{ $perfil->us_apellido_materno }}</h3>
  </div>

  <div class="fullDiv text-center acomodandoHeader ">
    <img src="{{ asset('images/img_nutricionista/'. $perfil->pf_url_imagen) }}" class="rounded-circle img-thumbnail maxredondito">
  </div>

  <div class="subInfoNutria">
    <div class="fullDiv text-center expNutria">
      {{ $perfil->pf_experiencia }}
    </div>

    <div class="fullDiv text-center">
      <div>
        <span class="textoGris">
          <i class="fa fa-mobile" aria-hidden="true"></i>
        </span>
        +56{{ $perfil->pf_celular }}
      </div>
      <div>
        <span class="textoGris">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
        {{ $perfil->us_email }}
      </div>
    </div>
  </div>

  <div class="fullDiv pl-5 pr-5">
    <div class="fullDiv pb-4">
      <span class="display-4">Descripción</span>
    </div>
    {!! $perfil->pf_descripcion !!}
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
        "requerimientos para este nutricionista?",function(e){
          if (e) {
              location.href = $('#cambiarNutria').attr('href');
          }
        });
    });
  });
</script>
@endsection
