@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar sellos negros') 

@section('nav')
    @include('admin.sellosnegros.nav')
@endsection 

@section('placeholderBuscar','Buscar sello') 

@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Listado de <strong>sellos negros</strong></span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th>Nombre</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sellos as $sello)
        <tr>
            <td>{{ $sello->sn_nombre }}</td>
            <td class="fit">
                 <div class="container-fluid"> 
                    <div class="row ">
                        <div class="col-xs-4">
                            <a href="{{ route ('sellosnegros.detalle', $sello -> id)}}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/eye.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route ('sellosnegros.edit', $sello -> id)}}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/settings.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route ('sellosnegros.destroy', $sello -> id)}}">
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
    <div class=" pagination  justify-content-center">
{!! $sellos->links() !!}
</div>
@endsection