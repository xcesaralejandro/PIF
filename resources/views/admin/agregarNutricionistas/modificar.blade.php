@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Modificar nutricionista')
@section('nav')
@include('admin.agregarNutricionistas.nav')
@endsection
@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Modificar a <strong>{{ $nutricionista->us_nombres }} </strong></span>
</div>
<hr>
{!! Form::model($nutricionista,['route' => ['agregarNutricionistas.update',$nutricionista->id], 'method' => 'PUT','files'=> true]) !!}
    @include('admin.agregarNutricionistas.formedit')
    
{{-- Boton para entrar al modal --}}
    <div class="row">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
            <button type="button" class="btn btn-primary fullDiv" data-toggle="modal" data-target="#cambiardatosnutri">
                <i class="fa fa-user" aria-hidden="true"></i> Actualizar datos
            </button>
        </div>
    </div>
{{-- Fin del boton para entrar al modal --}}
{{-- MODAL PARA GUARDAR CAMBIOS --}}
<div class="modal fade" id="cambiardatosnutri" tabindex="-1" role="dialog" aria-labelledby="cambiardatosnutri" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cambiardatosnutri"  style="margin: 0 auto !important;">¿Desea confirmar sus cambios?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group text-center">
      {{ Form::label('password_admin','Ingrese contraseña') }}
      <div class=" col-sm-6 offset-sm-3 text-center ">
      {{ Form::password('current_password',['class'   =>'form-control',
                       'placeholder'=>'***',
                       'id' =>'',
                         'minlength'  =>'5',
                         'required',]) }}
                         </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>
{{-- Fin del modal para guardar cambios --}}
{!! Form::Close() !!}
@endsection

@section('js')
 <script src="{{ asset('js/vUS.js') }}"></script>
    <script>
    $(".imagen").fileinput({ 
    uploadAsync: false,
    showUpload: false, 
    showRemove: false,
    showPreview:false});
</script>
@endsection
