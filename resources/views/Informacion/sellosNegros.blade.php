@extends('layouts.main')
@section('title','Etiquetado de sellos negros')

@section('content')
{{-- Sobrescribimos el css del documento para que sea gris solo en esta pagina--}}
<style type="text/css">.cuerpoPagina{background-color: #F8F8F8;}</style>

<div class="text-center mb-4 mt-3">
	<span class="display-3">Sellos Negros <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
</div>
<hr>
<div class="row">
	<div class="col-sm-6 col-lg-3">
		<img class="card-img-top" src="{{ asset('images/imagedefault.svg') }}" alt="Card image cap">
	</div>	
	<div class="col-sm-6 col-lg-3">
		<img class="card-img-top" src="{{ asset('images/imagedefault.svg') }}" alt="Card image cap">
	</div>	
	<div class="col-sm-6 col-lg-3">
		<img class="card-img-top" src="{{ asset('images/imagedefault.svg') }}" alt="Card image cap">
	</div>	
	<div class="col-sm-6 col-lg-3">
		<img class="card-img-top" src="{{ asset('images/imagedefault.svg') }}" alt="Card image cap">
	</div>	
</div>

<div class="row borderNegro m-2 mt-4 bk_blanco">
	<div class="fullDiv">
		<div class="tituloPersonalizado bk_negro">Alto en amor</div>
	</div>
	<div class="text-justify p-3">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

</div>

<div class="row borderNegro m-2 mt-4 bk_blanco">
	<div class="fullDiv">
		<div class="tituloPersonalizado bk_negro">Alto en sodio</div>
	</div>
	<div class="text-justify p-3">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

</div>

<div class="row borderNegro m-2 mt-4 bk_blanco">
	<div class="fullDiv">
		<div class="tituloPersonalizado bk_negro">Alto en azucar</div>
	</div>
	<div class="text-justify p-3">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

</div>

<div class="row borderNegro m-2 mt-4 bk_blanco">
	<div class="fullDiv">
		<div class="tituloPersonalizado bk_negro">Alto en sellos</div>
	</div>
	<div class="text-justify p-3">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

</div>

@endsection