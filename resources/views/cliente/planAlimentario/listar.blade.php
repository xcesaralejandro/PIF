@extends('layouts.main')
@section('title','Planes alimentarios disponibles')

@section('content')
	@if(count($planes) > 0)
	<div class="row">
		@foreach($planes as $plan)
			<div class="col-sm-6 col-lg-4">
				<article class="articlePlanes text-center m-3 p-2">
					<header class="text-right mb-4">
						<span class="pr-2 pl-2">Creado <strong>{{ $plan->pa_fecha_creacion }}</strong></span>
					</header>
					<div class="fullDiv">
						<span class="text-center display-4">{{ $plan->pa_apodo }}</span>
					</div>
					<div class="fullDiv">
						<span ><strong>{{ $plan->nuevosAvance->na_vct }}</strong> Kcal</span>
					</div>
					@if($plan->pa_estado == 1)
						<div class="fullDiv disponible">
							Disponible
						</div>
					@else
						<div class="fullDiv noDisponible">
							No disponible
						</div>
					@endif
					<footer class="textoBlanco mt-4">
						<a href="{{ route('planAlimentario.show',$plan->id) }}">
							<div class="p-1">
								Ver en detalle
							</div>
						</a>
					</footer>
				</article>
			</div>
		@endforeach
	</div>{{-- .ROW --}}

	@else
	<div class="fullDiv text-center pb-4">
		<div style="font-size: 17rem;">
			<i class="fa fa-frown-o" aria-hidden="true"></i>
		</div>
		<div class="display-4">
			Aún no registras <strong>planes alimentarios</strong>.
		</div>
	</div>
	@endif
@endsection
