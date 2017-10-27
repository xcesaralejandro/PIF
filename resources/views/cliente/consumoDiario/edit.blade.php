@extends('layouts.main')
@section('title','Registro de consumo diario')

@section('content')
  <section id="chilamediabola">
    <div class="fullDiv text-center mt-4">
      <span class="display-4">Actualizar el <strong>consumo diario</strong></span>
    </div>
    <hr class="mb-5">
    {{Form::model($cd,['route'=>array('registroDiario.update',$cd),'method'=>'PUT'])}}
      @include('cliente.consumoDiario.form')
      <div class="row text-center">
      	<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
      		<button type="submit" class="btn btn-primary">
      			<div class="row">
      				<div class="col-2 text-left">
      					<i class="fa fa-plus" aria-hidden="true"></i>
      				</div>
      				<div class="col-10 text-center">
      					Actualizar consumo
      				</div>
      			</div>
      		</button>
      	</div>
      </div>
    {{Form::close()}}
  </section>
@endsection

@section('js')
  <script>
    $(function(){
      $('#cs_alimentos_extra').trumbowyg();
      $('#cs_alimentacion_familia').trumbowyg();
    });
  </script>
@endsection
