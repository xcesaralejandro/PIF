@extends('layouts.mainAdmin') 

@section('title','Administrar sellos negros') 

@section('nav')
    @include('admin.sellosnegros.nav')
@endsection 

@section('placeholderBuscar','Buscar sello') 

@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Listado de sellos negros <i class="fa fa-stethoscope" aria-hidden="true"></i></span>
</div>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th>Nombre</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Alto en amor</td>
            <td class="fit">
                 <div class="container-fluid"> 
                    <div class="row ">
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