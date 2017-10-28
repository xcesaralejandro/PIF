@extends('layouts.main')
@section('title','Enfermedades por una mala alimentación')

@section('content')
{{-- Sobrescribimos el css del documento para que sea gris solo en esta pagina--}}
<style type="text/css">.cuerpoPagina{background-color: #F8F8F8;}</style>

<div class="text-center mb-5 mt-3">
	<span class="display-3">Enfermedades</span><br/>
</div>

<div class="row">

	@foreach ($ef as $e)
		<div class="col-sm-6 col-md-4 mb-4">
			<div class="card p-3">
				<img class="card-img-top" src="images/img_enfermedades/{{$e->ef_url_imagen}}" alt="Card image cap">
				<div class="card-body text-center">
					<h4 class="card-title">{{$e->ef_nombre}}</h4>
					<p class="card-text">{{$e->ef_descripcion}}</p>
					<a href="{{$e->ef_url}}" class="btn btn-primary" target="_blank">Más información</a>
				</div>
			</div>
		</div>
	@endforeach

</div> {{-- DIV .ROW --}}

<div class="text-center d-flex justify-content-center">
	<div>
		{!! $ef->links() !!}
	</div>
</div>
@endsection
