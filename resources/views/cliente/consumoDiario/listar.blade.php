@extends('layouts.main')
@section('title','Consumos diarios registrados')

@section('content')
<section id="registrosDiarios">
  <div class="row">
    @foreach ($cd as $v)
      <div class="col-sm-4 col-lg-3 col-xl-2">
        <div class="fuckingPadre">
          <a href="{{route('registroDiario.show',$v->id)}}">
            <div class="cajean3 text-center mb-3 p-4 textoBlanco">
                <span class="display-2"><strong>{{$v->cs_fecha}}</strong></span>
            </div>
          </a>
        </div>
      </div>
    @endforeach
  </div>
</section>
@endsection
