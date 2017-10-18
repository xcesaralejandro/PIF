@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar regiones') 


@section('nav')
@include('admin.regiones.nav')
@endsection 


@section('placeholderBuscar','Buscar region') 

@section('content')
<div class="esconder-agregar">
    @include('admin.regiones.agregar')
</div>

<div class="text-center mb-4 mt-3">
    <span class="display-4"><strong>Regiones</strong>
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
               @foreach($regiones as $region) 
        <tr>

           <td> {{ $region -> rg_nombre }} </td>
           <td class="fit">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4">
                        <a href="{{ route ('regiones.edit',$region -> id)}}">
                            <img class="imgAction mr-1 mb-1 "  src="{{ asset('images/settings.svg') }}" width="25px">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="{{ route('regiones.destroy',$region -> id)}}">
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
