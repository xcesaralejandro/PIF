@extends('layouts.main')
@section('title')
  Bienvenido
{{ \Auth::user()->us_nombres}}
@endsection
@section('content')
<section class="inicioClienteDashboard">
    <div class="row">
      <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
        <a href="{{route('planesAlimentarios.Listar')}}">
          <div class="flat1 p-3 hovCajitas">
            <div class="fullDiv mt-3">
              <img src="{{ asset('images/cliente_dashboard/plan.svg') }}" width="150px">
            </div>
            <div class="fullDiv textoBlanco p-3">
              <div class="numberDashboardCliente">
                <strong>
                    @if ($pa>= 0 && $pa<=9)
                      0{{$pa}}
                    @else
                      {{$pa}}
                    @endif
                </strong>
              </div>
              <span>Planes alimentarios que haz creado</span>
            </div>
          </div>
        </a>
      </div>


      <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
        <a href="{{route('registroDiario.index')}}">
          <div class="flat2 p-3 hovCajitas">
            <div class="fullDiv mt-3">
              <img src="{{ asset('images/cliente_dashboard/diskette.svg') }}" width="150px">
            </div>
            <div class="fullDiv textoBlanco p-3">
              <div class="numberDashboardCliente"><strong>
                @if ($cd>= 0 && $cd<=9)
                  0{{$cd}}
                @else
                  {{$cd}}
                @endif
              </strong></div>
              <span>Dias que haz registrado información</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
        <a href="{{route('nuevoAvance.index')}}">
          <div class="flat3 p-3 hovCajitas">
            <div class="fullDiv mt-3">
              <img src="{{ asset('images/cliente_dashboard/progress.svg') }}" width="150px">
            </div>
            <div class="fullDiv textoBlanco p-3">
              <div class="numberDashboardCliente">
                <strong>
                  @if ($na>= 0 && $na <=9)
                    0{{$na}}
                  @else
                    {{$na}}
                  @endif
                </strong>
              </div>
              <span>Nuevos avances que haz registrado</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
        <div class="flat4 p-3">
          <div class="fullDiv mt-3">
            <img src="{{ asset('images/cliente_dashboard/peso.svg') }}" width="150px">
          </div>
          <div class="fullDiv textoBlanco p-3">
            <div class="numberDashboardCliente"><strong>
              @if ($pideal > 0)
                {{$pideal}}
              @else
                0
              @endif
              </strong> Kg
            </div>
            <span>Corresponden a tu peso ideal</span>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
        <div class="flat5 p-3">
          <div class="fullDiv mt-3">
            <img src="{{ asset('images/cliente_dashboard/water.svg') }}" width="150px">
          </div>
          <div class="fullDiv textoBlanco p-3">
            <div class="numberDashboardCliente"><strong>
              @if ($agua > 0)
                {{$agua}}
              @else
                0
              @endif
              </strong>L
            </div>
            <span>De liquidos debes ingerir</span>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
        <div class="flat6 p-3">
          <div class="fullDiv mt-3">
            <img src="{{ asset('images/cliente_dashboard/stopwatch.svg') }}" width="150px">
          </div>
          <div class="fullDiv textoBlanco p-3">
            <div class="numberDashboardCliente"><strong>03</strong> hs</div>
            <span>Debes dejar entre cada comida</span>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
        <div class="flat7 p-3">
          <div class="fullDiv mt-3">
            <img src="{{ asset('images/cliente_dashboard/fat.svg') }}" width="150px">
          </div>
          <div class="fullDiv textoBlanco p-3">
            <div class="numberDashboardCliente"><strong>{{$imcInicial[0]}}</strong></div>
            <div class="fullDiv">
              <span class="textImcDashboard">{{$imcInicial[1]}}</span>
            </div>
            <div class="fullDiv">
              <span>Corresponde a tu primer IMC en Frust</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
        <div class="flat8 p-3">
          <div class="fullDiv mt-3">
            <img src="{{ asset('images/cliente_dashboard/orange.svg') }}" width="150px">
          </div>
          <div class="fullDiv textoBlanco p-3">
            <div class="numberDashboardCliente"><strong>{{$imcActual[0]}}</strong></div>
            <div class="fullDiv">
              <span class="textImcDashboard">{{$imcActual[1]}}</span>
            </div>
            <div class="fullDiv">
              <span>Corresponde a tu IMC actual en Frust</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
        <div class="flat9 p-3">
          <div class="fullDiv mt-3">
            <img src="{{ asset('images/cliente_dashboard/medal.svg') }}" width="150px">
          </div>
          <div class="fullDiv textoBlanco p-3">
            <div class="numberDashboardCliente"><strong>{{$pt[0]}}</strong></div>
            <div class="fullDiv">
              <span class="textImcDashboard">{{$pt[1]}}</span>
            </div>
            <div class="fullDiv">
              <span>Es tu Indice peso talla</span>
            </div>
          </div>
        </div>
      </div>
    </div> {{-- .row --}}
</section>
@endsection
