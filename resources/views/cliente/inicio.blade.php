@extends('layouts.main')
@section('title')
  Bienvenido
{{ \Auth::user()->us_nombres}}
@endsection
@section('content')

  <div class="row">

    <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
      <div class="flat1 p-3">
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
          <span>Planes alimentarios haz creado</span>
        </div>
      </div>
    </div>


    <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
      <div class="flat2 p-3">
        <div class="fullDiv mt-3">
          <img src="{{ asset('images/cliente_dashboard/diskette.svg') }}" width="150px">
        </div>
        <div class="fullDiv textoBlanco p-3">
          <div class="numberDashboardCliente"><strong>00</strong></div>
          <span>Dias haz registrado información</span>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 mb-3 text-center text-center">
      <div class="flat3 p-3">
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
          <span>Nuevos avances haz registrado</span>
        </div>
      </div>
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
  </div> {{-- .row --}}


@endsection
