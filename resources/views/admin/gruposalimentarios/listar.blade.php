@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar grupos alimentarios') 


@section('nav')
@include('admin.gruposalimentarios.nav')
@endsection 


@section('placeholderBuscar','Buscar grupo') 

@section('content')
<div class="esconder-agregar">
    @include('admin.gruposalimentarios.agregar')
</div>

<div class="text-center mb-4 mt-3">
    <span class="display-4">Listado de<strong> grupos alimentarios</strong>
    </span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th> Grupo </th>
            <th> Acción  </th>
        </tr>
    </thead>
    <tbody>
     
        <tr>
           @foreach($grupos as $grupo)
           <td> {{ $grupo -> ga_nombre }}  </td>
           <td class="fit">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4">
                        <a href="{{ route ('gruposalimentarios.edit',$grupo -> id)}}">
                            <img class="imgAction mr-1 mb-1 "  src="{{ asset('images/settings.svg') }}" width="25px">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="{{ route('gruposalimentarios.destroy',$grupo -> id)}}">
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
{!! $grupos->links() !!}
</div>
@endsection
</hr>
