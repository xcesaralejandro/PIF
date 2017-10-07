@extends('layouts.main')
@section('title','Etiquetas nutricionales')

@section('content')
{{-- Sobrescribimos el css del documento para que sea gris solo en esta pagina--}}
{{-- <style type="text/css">.cuerpoPagina{background-color: #F8F8F8;}</style> --}}

<div class="text-center mb-4 mt-3">
	<span class="display-3">Etiqueta nutricional <i class="fa fa-tag" aria-hidden="true"></i></span>
</div>
<hr>
<div class="row">
	<div class="col-md-6 offset-md-3 p-3">
			<img class="card-img-top max400" src="{{ asset('images/imagedefault.svg') }}" alt="Card image cap">
	</div>
</div>
<div class="borderPrimary mt-4 mb-5">
	<div class="fullDiv">
	<span class="tituloPersonalizado primaryPalet textoBlanco">
		Titulo personalizado para la información
	</span>
</div>
<div class="fullDiv p-4 text-justify mb-4">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
</div>

<div class="row">
	
	<div class="col-sm-6 col-lg-4 mb-4">
		<div class="card">
		  <div class="card-header primaryPalet textoBlanco">
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

	<div class="col-sm-6 col-lg-4 mb-4">
		<div class="card">
		  <div class="card-header primaryPalet textoBlanco">
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

	<div class="col-sm-6 col-lg-4 mb-4">
		<div class="card">
		  <div class="card-header primaryPalet textoBlanco">
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

	<div class="col-sm-6 col-lg-4 mb-4">
		<div class="card">
		  <div class="card-header primaryPalet textoBlanco">
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

	<div class="col-sm-6 col-lg-4 mb-4">
		<div class="card">
		  <div class="card-header primaryPalet textoBlanco">
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

	<div class="col-sm-6 col-lg-4 mb-4">
		<div class="card">
		  <div class="card-header primaryPalet textoBlanco">
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