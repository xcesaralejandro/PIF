@extends('layouts.main')
@section('title','Etiquetado de sellos negros')

@section('content')
{{-- Sobrescribimos el css del documento para que sea gris solo en esta pagina--}}
<style type="text/css">.cuerpoPagina{background-color: #F8F8F8;}</style>

<div class="text-center mb-4 mt-3">
	<span class="display-3">Sellos Negros</span>
</div>
<hr>
<div class="row">
	@foreach ($sn as $s)
		<div class="col-sm-6 col-lg-3 text-center">
			<img class="card-img-top max200" src="images/img_sellosnegros/{{$s->sn_url_imagen}}" alt="Card image cap">
		</div>
	@endforeach
</div>

@foreach ($sn as $s)
	<div class="row borderNegro m-2 mt-4 bk_blanco">
		<div class="fullDiv">
			<div class="tituloPersonalizado bk_negro">{{$s->sn_nombre}}</div>
		</div>
		<div class="text-justify p-3">
			{!!$s->sn_descripcion!!}
		</div>
	</div>
@endforeach
@endsection
