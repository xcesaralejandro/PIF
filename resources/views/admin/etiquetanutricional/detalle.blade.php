@extends('layouts.mainAdminDetalle') 
@section('title-nav','Administrador')
@section('title','Etiqueta nutricional')


@section('nav')
@include('admin.etiquetanutricional.nav')
@endsection 

@section('urlEditar','#')
@section('urlEliminar','#')

@section('placeholderBuscar','Buscar Enfermedades') 
@section('content')
<div class="row">
	<div class="col-md-6 offset-md-3 p-3">
			<img class="card-img-top max400" src="{{ asset('images/img_etiqueta/'. $etiqueta->en_url_imagen) }}">
	</div>
</div>
<div class="borderPrimary mt-4 mb-5">
	<div class="fullDiv">
	<span class="tituloPersonalizado primaryPalet textoBlanco">
		{{$etiqueta->en_titulo}}
	</span>
</div>
<div class="fullDiv p-4 text-justify mb-4">
{!! $etiqueta->en_descripcion !!}
</div>
</div>

</div>{{-- .ROW --}}
@endsection
