@extends('layouts.main')
@section('title','Etiquetas nutricionales')

@section('content')
{{-- Sobrescribimos el css del documento para que sea gris solo en esta pagina--}}
{{-- <style type="text/css">.cuerpoPagina{background-color: #F8F8F8;}</style> --}}

<div class="text-center mb-4 mt-3">
	<span class="display-3">Etiqueta nutricional</span>
</div>
<hr>
<div class="row">
	<div class=" offset-sm-1 col-md-5 offset-md-2 offset-lg-3 offset-xl-4 p-3">
			<img class="card-img-top max400" src="images/img_etiqueta/{{$et->en_url_imagen}}" alt="Card image cap">
	</div>
</div>
<div class="borderPrimary mt-4 mb-5">
	<div class="fullDiv">
	<span class="tituloPersonalizado primaryPalet textoBlanco">
		{{$et->en_titulo}}
	</span>
</div>
<div class="fullDiv p-4 text-justify mb-4">
	{!!$et->en_descripcion!!}
</div>
</div>

<div class="row">

	@foreach ($et->camposEtiquetasNutricionales as $v)
		<div class="col-sm-6 col-lg-4 mb-4">
			<div class="card">
			  <div class="card-header primaryPalet textoBlanco">
			    {{$v->cen_nombre}}
			  </div>
			  <div class="card-block">
			    <p class="card-text">
			    	{{$v->cen_descripcion}}
			    </p>
			  </div>
			</div>
		</div>
	@endforeach

</div>{{-- .ROW --}}
@endsection
