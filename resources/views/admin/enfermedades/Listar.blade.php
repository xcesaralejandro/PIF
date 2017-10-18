@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar enfermedades') 

@section('nav')
@include('admin.enfermedades.nav')
@endsection 

@section('placeholderBuscar','Buscar Enfermedades') 

@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Listado de<strong> enfermedades</strong>
    </span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th> Enfermedad </th>
            <th> Referencia  </th>
            <th> Acción  </th>
        </tr>
    </thead>
    <tbody>
        @foreach($enfermedades as $enfermedad)
        <tr>
            <td> {{ $enfermedad->ef_nombre }} </td>
            <td class="fit">
                <a href="{{ $enfermedad->ef_url }}">
                    <i aria-hidden="true" class="fa fa-link"></i>                      
                    Visitar sitio
                </a>
            </td>
            <td class="fit">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-4">
                            <a  href="{{ route('enfermedades.detalle',$enfermedad -> id) }}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/eye.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route ('enfermedades.edit', $enfermedad -> id)}}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/settings.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route ('enfermedades.destroy', $enfermedad -> id)}}">
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