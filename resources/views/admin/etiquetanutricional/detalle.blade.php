@extends('layouts.mainAdminDetalle') 

@section('title','Sellos negros') 

@section('nav')
@include('admin.enfermedades.nav')
@endsection 

@section('urlEditar','#')
@section('urlEliminar','#')

@section('placeholderBuscar','Buscar Enfermedades') 
@section('content')

<div class="row ">
	
	<div class="col-sm-6 col-lg-4 mb-4  offset-sm-3  offset-md-4">

		<div class="card-header primaryPalet textoBlanco text-center">
			Kilocalorias (KCAL)
		</div>
		<div class="card-block">
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
		</div>

	</div>
</div>


</div>{{-- .ROW --}}
@endsection
