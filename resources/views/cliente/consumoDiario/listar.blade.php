@extends('layouts.main')
@section('title','Consumos diarios registrados')

@section('content')
@if (count($cd) > 0)
  <section id="registrosDiarios">
    <div class="row">
      @foreach ($cd as $v)
        <div class="col-sm-4 col-lg-3 col-xl-2">
          <div class="fuckingPadre">
            <a href="{{route('registroDiario.show',$v->id)}}">
              <div class="cajean3 text-center mb-3 textoBlanco pl-4 pr-4 pb-1">
                  <div class="fullDiv amuentanx2">
                      {{date("d",strtotime($v->cs_fecha))}}
                  </div>
                  <span class="display-2">{{date("m-Y",strtotime($v->cs_fecha))}}</span>
              </div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@else
  <div class="fullDiv text-center pb-4">
    <div style="font-size: 17rem;">
      <i class="fa fa-frown-o" aria-hidden="true"></i>
    </div>
    <div class="display-4">
      Aún no haz realizado registros
    </div>
  </div>
@endif
@endsection
