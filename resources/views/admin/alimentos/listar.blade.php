@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar alimentos') 
@section('nav')
@include('admin.alimentos.nav')
@endsection


@section('placeholderBuscar','Buscar alimento') 

@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Listado de<strong> alimentos</strong>
    </span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th> Alimento </th>
            <th>Gramos</th>
            <th>Calorias(kcal)</th>
            <th>proteinas</th>
            <th>Lipidos</th>
            <th>Carbohidratos</th>
            <th>Grupo</th>
            <th>Categoria</th>
            <th> Acción  </th>
        </tr>
    </thead>
    <tbody>
            @foreach($alimentos as $alimento)
        <tr>
            <td> {{ $alimento ->al_nombre }}  </td>
            <td>{{ $alimento->al_gramos }}</td>
            <td>{{ $alimento->al_kcal }}</td>
            <td>{{ $alimento->al_proteina }}</td>
            <td>{{ $alimento->al_lipidos }}</td>
            <td>{{ $alimento->al_carbohidratos }}</td>
            <td>{{ $alimento->categoriasAlimento->gruposAlimento->ga_nombre }}</td>
            <td>{{ $alimento->categoriasAlimento->ct_nombre }}</td>
            <td class="fit">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-4">
                          <a href="{{ route ('alimentos.edit',$alimento -> id)}}"> 
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/settings.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route('alimentos.destroy',$alimento -> id)}}">
                                <img class="imgAction mb-1" src="{{ asset('images/cancel.svg') }}" width="25px">
                            </a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach

</table>
<div class=" pagination  justify-content-center">
{!! $alimentos->links() !!}
</div>
@endsection
</hr>
