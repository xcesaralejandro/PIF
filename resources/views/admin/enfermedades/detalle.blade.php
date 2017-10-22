@extends('layouts.mainAdminDetalle') 
@section('title-nav','Administrador')
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
			<img class="card-img-top max200" src="{{ asset('images/img_enfermedades/'. $enfermedad->ef_url_imagen) }}">

			<div class="card-body">
				<h4 class="card-title">{{ $enfermedad->ef_nombre }}</h4>
				<p class="card-text ">{!! $enfermedad->ef_descripcion !!}</p>
				<a href="{{ $enfermedad->ef_url }}" class="btn btn-primary" target="_blank">Más información</a>
			</div>
		</div>
	</div>

@endsection
