@extends('layouts.mainAdmin') 

@section('title','Administrar enfermedades') 

@section('nav')
	@include('admin.enfermedades.nav')
@endsection 

@section('placeholderBuscar','Buscar Enfermedades') 
@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Ver en <strong>detalle</strong></span>
</div>
<hr>
<div class="upToHr">
<div class="row">
	<div class="col-6 col-sm-4 offset-sm-4 col-md-3 offset-md-6 col-lg-2 offset-lg-8">
		<a href="#" class="btn btn-primary fullDiv">
			<i class="fa fa-wrench" aria-hidden="true"></i>
		</a>
	</div>
	<div class="col-6 col-sm-4 col-md-3 col-lg-2">
		<a href="#" class="btn btn-primary fullDiv">
			<i class="fa fa-trash" aria-hidden="true"></i>
		</a>
	</div>
</div>
</div>
@endsection
