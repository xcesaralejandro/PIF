@extends('layouts.mainAdminDetalle') 
@section('title-nav','Administrador')
@section('title','Descripcion de nutricionista')
@section('nav')
@include('admin.agregarNutricionistas.nav')
@endsection 
@section('urlEditar','#')
@section('urlEliminar','#')

@section('placeholderBuscar','Buscar') 
@section('content')
<div class="row">
	<div class="col-sm-6 col-lg-8 offset-lg-2"> 
		<table class="table">
			<thead>
				<tr>
					<th colspan="4" class="text-center">
						<span class="display-4">{{ $nutricionista->us_nombres." ".$nutricionista->us_apellido_paterno}}</span>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Email</th>
					<td>{{ $nutricionista->us_email }}</td>
					<th scope="row">Fecha de caducacion</th>
					<td>{{ $nutricionista->us_fecha_caducacion}}</td>
				</tr>
				<tr>
					<th scope="row">Nombres</th>
					<td>{{ $nutricionista->us_nombres }}</td>
					<th scope="row">Apellidos</th>
					<td>{{ $nutricionista->us_apellido_paterno." ".$nutricionista->us_apellido_materno}}</td>
				</tr>
				<tr>
					<th scope="row">Rut</th>
					<td>{{ $nutricionista->us_rut }}</td>
					<th scope="row">Sexo</th>
					<td>{{ $nutricionista->us_sexo }}</td>
				</tr>
				<tr>
					<th scope="row">Fecha de nacimiento</th>
					<td>{{ $nutricionista->us_fecha_nacimiento }}</td>
					<th scope="row">Profesión</th>
					<td>{{ $nutricionista->us_registro_profesion }}</td>
				</tr>
				<tr>
					<th scope="row">Peso</th>
					<td>{{ $nutricionista->us_peso }}</td>
					<th scope="row">Estatura</th>
					<td>{{ $nutricionista->us_estatura }} cm</td>
				</tr>				
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-sm-6 col-lg-10 offset-lg-1"> 
	<table class="table">
		<thead>
			<tr >
				<th class="text-center">	
					Titutlo profesional
				</th>
				<th class="text-center">
					Carnet frontal
				</th>
				<th class="text-center">
					Carnet posterior
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="text-center">
					<img class="card-img-top max200 text-center" src="{{ asset('images/img_nutricionista/'. $nutricionista->us_img_titulo) }}">
				</td>

				<td class="text-center"> 
					<img class="card-img-top max200" src="{{ asset('images/img_nutricionista/'. $nutricionista->us_img_carnet_f) }}">
				</td>
				<td class="text-center">		<img class="card-img-top max200" src="{{ asset('images/img_nutricionista/'. $nutricionista->us_img_carnet_p) }}"></td>
			</tr>

		</tbody>
	</table>
</div>
</div>
@endsection