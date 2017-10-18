@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar grupos alimentarios') 

@section('nav')
<li class="nav-item">
    <a class="nav-link" href="{{ route('gruposalimentarios.index') }}">
        Listado
    </a>
</li>
@endsection  
@section('placeholderBuscar','Buscar grupo') 

@section('content')
<div class="esconder-agregar">
    @include('admin.gruposalimentarios.agregar')
</div>
<div class="p-3">
   {{ Form::model($grupo,['route' => ['gruposalimentarios.update',$grupo->id], 'method'=>'PUT']) }}
<div class="text-center mb-4 mt-3">
    <span class="display-4">Modificar<strong> grupos alimentarios</strong>
    </span>
</div>
<hr>
<div class="row text-center">
 @include('admin.gruposalimentarios.form')
 <div class="  col-sm-8 offset-sm-2 col-md-4 offset-md-4  col-lg-3 offset-lg-0 col-xl-3 offset-xl-0  mt-4  ">
    <button type="submit" class="btn btn-primary fullDiv btn-agregar">
        <div class="row">
            <div class="col-2 text-left"">
                <i class="fa fa-plus" aria-hidden="true"></i>   
            </div>
            <div class="col-8 text-center">
                Modificar                  
            </div>
        </div>
    </button> 
</div>
</div> 
{{ Form::Close() }} 
</div>
@endsection
