@extends('layouts.mainAdminDetalle') 
@section('title-nav','Administrador')
@section('title')
<div class="text-center mb-4 mt-3">
	<span class="display-3">Detalle de campo <i class="fa fa-tag" aria-hidden="true"></i></span>
</div>
@endsection 

@section('nav')
@include('admin.etiquetanutricional.nav')
@endsection 

@section('urlEditar','#')
@section('urlEliminar','#')

@section('placeholderBuscar','Buscar Enfermedades') 
@section('content')

<div class="row ">
	
	<div class="  col-sm-6 col-lg-4 mb-4  offset-sm-3  offset-md-4">
<div class=" fullDiv borderPrimary">
		<div class="card-header primaryPalet textoBlanco text-center">
			{{ $campo ->cen_nombre }}
		</div>
		<div class="card-block">
			<p class="card-text">{!! $campo->cen_descripcion !!}</p>
		</div>
</div>
	</div>
</div>


</div>{{-- .ROW --}}
@endsection
