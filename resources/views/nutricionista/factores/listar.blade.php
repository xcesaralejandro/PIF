@extends('layouts.mainAdmin') 
@section('title-nav','Nutricionista')
@section('title','Administrar factores') 
@section('nav')
@include('nutricionista.factores.nav')
@endsection

@section('placeholderBuscar','Buscar factor') 

@section('content')
<div class="esconder-agregar">
    @include('nutricionista.factores.agregar')
</div>
<div class="text-center mb-4 mt-3">
    <span class="display-4">Listado de<strong> factores</strong>
    </span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th> Proteinas %</th>
            <th>Lipidos %</th>
            <th>Carbohidratos %</th>
            <th> Acción  </th>
        </tr>
    </thead>
    <tbody>
    @foreach($factores as $factor)
        <tr>
            <td> {{ $factor->ft_proteinas }} </td>
            <td>{{ $factor->ft_lipidos }}</td>
            <td>{{ $factor->ft_carbohidratos }}</td>
            <td class="fit">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-4">
                            <a href="#">
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
