@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar etiqueta nutricional') 

@section('nav')
    @include('admin.etiquetanutricional.nav')
@endsection 

@section('placeholderBuscar','Buscar campo') 

@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Etiqueta <strong>nutricional</strong></span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th>Etiqueta</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
      @foreach($etiquetas as $etiqueta)
        <tr>
            <td>{{ $etiqueta->en_titulo }}</td>
             <td class="fit">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="{{ route('etiquetanutricional.detalle',$etiqueta -> id) }}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/eye.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route ('etiquetanutricional.edit', $etiqueta -> id)}}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/settings.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route ('etiquetanutricional.destroy', $etiqueta -> id)}}">
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
@if($en_cont != 0)
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th>Nombre del campo</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($campos as $campo)
        <tr>
            <td>{{ $campo->cen_nombre }}</td>
            <td class="fit">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="{{ route('campoetiquetanutricional.detalle',$campo -> id) }}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/eye.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route ('campoetiquetanutricional.edit', $campo -> id)}}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/settings.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route ('campoetiquetanutricional.destroy', $campo -> id)}}">
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
@endif
@endsection