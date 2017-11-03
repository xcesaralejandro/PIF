@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar comidas') 

@section('nav')
    @include('nutricionista.comidas.nav')
@endsection 

@section('placeholderBuscar','Buscar comida') 
@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Agregar <strong>comida</strong></span>
</div>
<hr>
<div class="p-3">
{{ Form::Open(['route' => 'comidas.store', 'method'=>'POST'])}}

        @include('nutricionista.comidas.form')
        @include('nutricionista.comidas.formsub')
        <div class="row text-center">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
                <button type="submit" class="btn btn-primary">
                    <div class="row">
                        <div class="col-2 text-left"">
                            <i class="fa fa-plus" aria-hidden="true"></i>   
                        </div>
                        <div class="col-10 text-center">
                            Agregar alimento                      
                        </div>
                    </div>
                </button>
            </div>
        </div>
    {{ Form::Close() }}
</div>
@endsection


