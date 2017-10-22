@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar nutricionistas') 
@section('nav')
@include('admin.agregarNutricionistas.nav')
@endsection


@section('placeholderBuscar','Buscar nutricionista') 

@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Listado de<strong> nutricionistas</strong>
    </span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th> Rut </th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Caducacion</th>
            <th> Acción  </th>
        </tr>
    </thead>
    <tbody>
    @foreach($nutricionistas as $nutricionista)
        <tr>
            <td> {{ $nutricionista->us_rut }} </td>
            <td>{{ $nutricionista->us_nombres }}</td>
            <td>{{ $nutricionista->us_apellido_paterno }} {{ $nutricionista->us_apellido_materno }}</td>
            <td>{{ $nutricionista->us_fecha_caducacion }}</td>
            <td class="fit">
                <div class="container-fluid">
                    <div class="row">
                         <div class="col-xs-4">
                            <a  href="{{ route('agregarNutricionistas.detalle',$nutricionista -> id)}}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/eye.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                          <a href="#"> 
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/settings.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route('agregarNutricionistas.destroy',$nutricionista -> id)}}">
                                <img class="imgAction mb-1" src="{{ asset('images/cancel.svg') }}" width="25px">
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
