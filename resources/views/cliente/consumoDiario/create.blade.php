@extends('layouts.main')
@section('title','Registro de consumo diario')

@section('content')
 @if(count($planes) > 0)
  <section id="chilamediabola">
    <div class="fullDiv text-center mt-4">
      <span class="display-4">Registrar el <strong>consumo diario</strong></span>
    </div>
    <hr class="mb-5">
    @if ($cd > 0 && $cd != NULL)
      <div class="fullDiv registroNuevoAvance p-3 mb-5">
        <div class="row">
          <div class="col-10">
            <span class="display-2 pl-5">Ya ha realizado un registro hoy <strong>!</strong></span>
          </div>
          <div class="col-2">
            <a href="{{route('registroDiario.edit',$cd)}}" class="btn btn-primary textoBlanco">
              <i class="fa fa-wrench" aria-hidden="true"></i> Editar
            </a>
          </div>
        </div>

      </div>
    @endif
    {{Form::open(['route'=>'registroDiario.store','method'=>'POST'])}}
      @include('cliente.consumoDiario.form')
      <div class="row text-center">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
          <button type="submit" class="btn btn-primary">
            <div class="row">
              <div class="col-2 text-left">
                <i class="fa fa-plus" aria-hidden="true"></i>
              </div>
              <div class="col-10 text-center">
                Guardar consumo
              </div>
            </div>
          </button>
        </div>
      </div>
    {{Form::close()}}
  </section>
  @else
    <div class="fullDiv text-center pb-4">
  		<div style="font-size: 17rem;">
  			<i class="fa fa-frown-o" aria-hidden="true"></i>
  		</div>
  		<div class="display-4">
  			Debes registrar un plan alimentario previamente para registrar tu consumo.
  		</div>
  	</div>
 @endif
@endsection

@section('js')
  <script>
    $(function(){
      $('#cs_alimentos_extra').trumbowyg();
      $('#cs_alimentacion_familia').trumbowyg();
    });
  </script>
@endsection
