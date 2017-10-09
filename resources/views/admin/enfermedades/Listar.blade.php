@extends('layouts.mainAdmin') 

@section('title','Administrar enfermedades') 

@section('nav')
    @include('admin.enfermedades.nav')
@endsection 

@section('placeholderBuscar','Buscar Enfermedades') 

@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Listado de enfermedades <i class="fa fa-stethoscope" aria-hidden="true"></i></span>
</div>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th>Enfermedad</th>
            <th>Referencia</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nombre de la enfermedad va acá</td>
            <td class="fit">
                <a href="#">
                    <i class="fa fa-link" aria-hidden="true"></i> Visitar sitio
                </a>
            </td>
            <td class="fit">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="#">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/eye.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/settings.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#">
                                <img class="imgAction mb-1" src="{{ asset('images/cancel.svg') }}" width="25px">
                            </a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

       
    </tbody>
</table>
@endsection