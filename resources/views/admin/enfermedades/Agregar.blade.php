@extends('layouts.mainAdmin') 

@section('title','Administrar enfermedades') 

@section('nav')
	@include('admin.enfermedades.nav')
@endsection 

@section('placeholderBuscar','Buscar Enfermedades') @section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Agregar enfermedades <i class="fa fa-stethoscope" aria-hidden="true"></i></span>
</div>
<hr>
<div class="p-3">
	{{ Form::Open() }}
	    @include('admin.enfermedades.form')

	    <div class="row">
	        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
	            <button type="submit" class="btn btn-primary fullDiv">
	                <i class="fa fa-stethoscope" aria-hidden="true"></i> Agregar enfermedad
	            </button>
	        </div>
    	</div>

	{{ Form::Close() }}
</div>
@endsection

@section('js')

<script>
    $(function(){
        $('#descEnfermedad').trumbowyg();
    });
</script>
@endsection