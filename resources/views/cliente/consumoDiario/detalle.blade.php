@extends('layouts.main')
@section('title','Consumo diario')

@section('content')
  @if (count($cd) > 0)
    <div class="row mb-5 text-center">
      <div class="col-sm-6 col-md-4 offset-md-2 col-lg-3 offset-lg-3 mb-2">
        <div class="thecolor textoBlanco p-2 pt-5">
          <div class="fullDiv fontAw">
            <img src="{{asset('images/cliente_dashboard/detailCD/water.svg')}}" width="150px">
          </div>
          <div class="fullDiv mt-5">
            <span class="mispanreadyonready">Ingesta de agua</span>
          </div>
          @if ($cd->cs_ingesta_agua == 0)
            <strong>0</strong> L Aprox.
          @else
            <strong>{{number_format($cd->cs_ingesta_agua / 1000,1)}}</strong> L Aprox.
          @endif
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
            <a href="{{route('planAlimentario.show',$cd->pa_id)}}" style="text-decoration:none !important;">
              <div class="thecolor textoBlanco p-2 pt-5">
                <div class="fullDiv fontAw">
                  <img src="{{asset('images/cliente_dashboard/detailCD/plan.svg')}}" width="150px">
                </div>
                <div class="fullDiv mt-5">
                  <span class="mispanreadyonready">Plan alimentario</span>
                </div>
                Ver en detalle
              </div>
            </a>
      </div>
    </div>
    <div class="fullDiv text-center mt-3 mb-5">
      <span class="display-4"><strong>{{$cd->cs_fecha}}</strong></span>
    </div>
    <div class="fullDiv bk_blanco mt-3">
    	<div class="fullDiv borderBottomPrimary p-1 pl-2">
    		<div class="row">
    			<div class="col-12 tituloComida">
    				Alimentación del grupo familiar
    			</div>
    		</div>
    	</div>
    	<div class="listadoComida bk_blanco p-2 pb-4">
        {{$cd->cs_alimentacion_familia}}
    	</div>
    </div>

    <div class="fullDiv bk_blanco mt-3">
    	<div class="fullDiv borderBottomPrimary p-1 pl-2">
    		<div class="row">
    			<div class="col-12 tituloComida">
    				Alimentos ingeridos fuera del plan
    			</div>
    		</div>
    	</div>
    	<div class="listadoComida bk_blanco p-2 pb-4">
        {{$cd->cs_alimentos_extra}}
    	</div>
    </div>
  @else
    <div class="fullDiv text-center pb-4">
      <div style="font-size: 17rem;">
        <i class="fa fa-frown-o" aria-hidden="true"></i>
      </div>
      <div class="display-4">
        No se ha encontrado el registro.
      </div>
    </div>
  @endif
@endsection
