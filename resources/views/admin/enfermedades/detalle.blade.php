@extends('layouts.mainAdminDetalle') 

@section('title','enfermedad') 

@section('nav')
@include('admin.enfermedades.nav')
@endsection 

@section('urlEditar','#')
@section('urlEliminar','#')

@section('placeholderBuscar','Buscar Enfermedades') 
@section('content')

	<div class="col-sm-6 col-md-4 mb-4  offset-sm-3  offset-md-4  ">

		<div class="card p-3">
			

			<img class="card-img-top" src="{{ asset('images/imagedefault.svg') }}" alt="Card image cap">
			<div class="card-body">
				<h4 class="card-title">Diabetes</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary" target="_blank">Más información</a>
			</div>
		</div>
	</div>

@endsection
