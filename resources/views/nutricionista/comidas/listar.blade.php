@extends('layouts.mainAdmin') 
@section('title-nav','Nutricionista')
@section('title','Administrar comidas') 
@section('nav')
@include('nutricionista.Comidas.nav')
@endsection

@section('placeholderBuscar','Buscar comida') 

@section('content')

<div class="text-center mb-4 mt-3">
    <span class="display-4"><strong> comidas</strong>
    </span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th>Nombre</th>
            <th>Desayuno %</th>
            <th>P. colacion %</th>
            <th>almuerzo %</th>
            <th>S. colacion %</th>
            <th>Once %</th>
            <th>Cena %</th>
            <th>Activo</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comidas as $comida)
        <tr>
          <td > {{ $comida ->cm_nombre }} </td>
          @foreach($comida->subComidas as $porcentaje)    
          <td>{{ $porcentaje->sbc_porcentaje }} %</td>
          @endforeach
          <td >
            <div class="container-fluid">
                <div class="row">

                 @if($comida->cm_estado == 1)
                 <div class="col-xs-4">
                   {{--  <a href="{{ route ('factores.activar',$factor -> id)}}"> --}} 
                    <img class="imgAction mr-1 mb-1" src="{{ asset('images/activado.svg') }}" width="25px">
                {{--  </a> --}}
            </div>
            @else
            <div class="col-xs-4 ">
             {{--  <a href="{{ route ('factores.activar',$factor -> id)}}"> --}}
                <img class="imgAction mb-1" src="{{ asset('images/desactivado.svg') }}" width="25px">
            {{--  </a> --}}
        </div>
        @endif
    </div>
</div>
</td>
<td class="fit">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <a href="{{ route ('comidas.edit',$comida -> id)}}">
                    <img class="imgAction mr-1 mb-1 "  src="{{ asset('images/settings.svg') }}" width="25px">
                </a>
            </div>

        </div>
    </div>
</td>
</tr>

@endforeach
</tbody>
</table>
@endsection
</hr>