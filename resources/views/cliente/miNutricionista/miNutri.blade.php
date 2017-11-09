@extends('layouts.main')

@section('title','Información del nutricionista')

@section('content')

<style>.cuerpoPagina {padding: 0px;}</style>

<section id="profileN" class="pb-5">

    <a id="comunicaNutri" >
      <div  data-toggle="modal" data-target="#comunicatenutri" class="p-2 btnSolicitarNutri" style="color: #fff !important; cursor:pointer">
        Comunicate con tu nutricionista
      </div>
    </a>


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
<div class="modal fade" id="comunicatenutri" tabindex="-1" role="dialog" aria-labelledby="comunicatenutri" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comunicandose con {{ $perfil->us_nombres }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   {!! Form::open() !!}
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensaje:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
      {{Form::Close()}}
      </div>
      <div class="modal-footer">
        <button type="submit" data-dismiss="modal" class="btn btn-primary">Enviar mensaje</button>
      </div>
    </div>
  </div>
</div>




</section>
@endsection
@section('js')

@endsection
