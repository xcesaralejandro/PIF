@extends('layouts.mainAdminDetalle') 
@section('title-nav','Administrador')
@section('title','Sellos negros')


@section('nav')
	@include('admin.sellosnegros.nav')
@endsection 

@section('urlEditar')
{{ route ('sellosnegros.edit', $sello -> id)}}
@endsection
@section('urlEliminar')
{{ route ('sellosnegros.destroy', $sello -> id)}}
@endsection

@section('placeholderBuscar','Buscar Enfermedades') 
@section('content')
	<div class="col-sm-6 col-lg-3">
		<img class="card-img-top max200" src="{{ asset('images/img_sellosnegros/'. $sello->sn_url_imagen) }}" alt="Card image cap">
	</div>
<div class="row borderNegro m-2 mt-4 bk_blanco">
	<div class="fullDiv">
		<div class="tituloPersonalizado bk_negro">{{ $sello->sn_nombre }}</div>
	</div>
	<div class="text-justify p-3">
{!! $sello->sn_descripcion !!}
	</div>

</div>
@endsection
