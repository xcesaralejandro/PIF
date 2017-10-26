@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar comunas') 


@section('nav')
@include('admin.comunas.nav')
@endsection


@section('placeholderBuscar','Buscar comuna') 

@section('content')
    @include('admin.comunas.agregar')
<div class="text-center mb-4 mt-3">
    <span class="display-4"><strong> comunas </strong>
    </span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th> Comuna </th>
            <th>Region</th>
            <th> Acción  </th>
        </tr>
    </thead>
    <tbody>
        @foreach($comunas as $comuna)
        <tr>
            <td>{{ $comuna->co_nombre }} </td>
            <td>{{ $comuna->regione->rg_nombre}}</td>
            <td class="fit">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-4">
                            <a href="{{ route ('comunas.edit',$comuna -> id)}}">
                                <img class="imgAction mr-1 mb-1" src="{{ asset('images/settings.svg') }}" width="25px">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ route('comunas.destroy',$comuna -> id)}}">
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
{!! $comunas->links() !!}
</div>
@endsection
</hr>