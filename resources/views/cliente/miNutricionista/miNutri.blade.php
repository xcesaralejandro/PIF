@extends('layouts.main')
@section('title','Mi nutricionista')

@section('content')

<style>.cuerpoPagina{background-color: #F8F8F8;  }</style>

<div class="row">
	<div class="col-md-6 col-lg-4 mt-3">
		<div class="bk_blanco cajitaNutricionistaLinda">
			<a class="borraTextDecoration" href="{{ route ('nutricionistas.detalle', $nutricionista -> id)}}">
				<div class="fullDiv beautyNutriDiv text-center display-5">
					Visitar perfil
				</div>
			</a>
			<div class="fullDiv text-center pt-4 pb-3 pl-2 pr-2">
				<img src="{{ asset('images/img_nutricionista/'. $nutricionista->pf_url_imagen) }}" class="rounded-circle img-thumbnail maxredondito">
			</div>
			<div class="fullDiv textoGris text-center pb-3">
				{{ $nutricionista->us_nombres }} {{ $nutricionista->us_apellido_paterno }}  {{ $nutricionista->us_apellido_materno }}
			</div>
			<div class="fullDiv text-center bk_cajitaNutricionistaLinda p-2 textoBlanco">
				{{ $nutricionista->pf_experiencia }}
			</div>
		</div>
	</div><!--  fin cajita  -->
	<div class="col-md-6 col-lg-8 mt-3">
		<div class="bk_blanco cajitaNutricionistaLinda">
			<div class="fullDiv beautyNutriDiv text-center display-5">
				¿Tienes alguna consulta? contacta a tu nutricionista.
			</div>
			<div class="fullDiv  pt-1 pb-3 pl-3 pr-2">
				{{ Form::textarea('cont_nutri',null,['id'=>'ContactoNutri','required', 'style'=>'max-height:272px; width: 700px; min-height:272px; ']) }}

			</div>
	
				<button class="fullDiv text-center bk_cajitaNutricionistaLinda p-2 textoBlanco">
				Enviar mensaje
				</button>

		</div>
	</div>
</div><!--  Fin row -->


@endsection
