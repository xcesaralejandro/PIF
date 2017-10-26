@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar grupos alimentarios') 


@section('nav')
@include('admin.categoriasalimentarias.nav')
@endsection
@section('placeholderBuscar','Buscar grupo') 
@section('content')

    @include('admin.categoriasalimentarias.agregar')

<div class="text-center mb-4 mt-3">
    <span class="display-4">Listado de<strong> categorias de alimentos</strong>
    </span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th> Categoria </th>
            <th>Grupo</th>
            <th> Acción  </th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td> {{ $categoria->ct_nombre }}  </td>
            <td>{{ $categoria->gruposAlimento->ga_nombre }}</td>
            <td class="fit">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-4">
                            <a href="{{ route ('categoriasalimentarias.edit',$categoria -> id)}}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/settings.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route('categoriasalimentarias.destroy',$categoria -> id)}}">
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
{!! $categorias->links() !!}
</div>
@endsection
</hr>
