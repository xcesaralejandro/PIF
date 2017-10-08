@extends('layouts.main')
@section('title','Enfermedades por una mala alimentación')

@section('content')
{{-- Sobrescribimos el css del documento para que sea gris solo en esta pagina--}}
<style type="text/css">.cuerpoPagina{background-color: #F8F8F8;}</style>

<div class="text-center mb-5 mt-3">
	<span class="display-3">Enfermedades <i class="fa fa-stethoscope" aria-hidden="true"></i></span><br/>
</div>

<div class="row">

	<div class="col-sm-6 col-md-4 mb-4">

		<div class="card p-3">
			<img class="card-img-top" src="{{ asset('images/imagedefault.svg') }}" alt="Card image cap">
			<div class="card-body">
				<h4 class="card-title">Diabetes</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary" target="_blank">Más información</a> 
			</div>
		</div>

	</div>

	<div class="col-sm-6 col-md-4 mb-4">

		<div class="card p-3">
			<img class="card-img-top" src="{{ asset('images/imagedefault.svg') }}" alt="Card image cap">
			<div class="card-body">
				<h4 class="card-title">Diabetes</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary" target="_blank">Más información</a>
			</div>
		</div>

	</div>

	<div class="col-sm-6 col-md-4 mb-4">

		<div class="card p-3">
			<img class="card-img-top" src="{{ asset('images/imagedefault.svg') }}" alt="Card image cap">
			<div class="card-body">
				<h4 class="card-title">Diabetes</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
				</p>
				<a href="#" class="btn btn-primary" target="_blank">Más información</a>
			</div>
		</div>

	</div>
</div> {{-- DIV .ROW --}}
@endsection