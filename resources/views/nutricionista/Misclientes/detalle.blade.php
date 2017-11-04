@extends('layouts.main')


@section('content')
<hr>
<canvas id="myChart " width="800" height="200px"></canvas>
@if(count($planes) > 0)
	<div class="row col-lg-10 offset-lg-1">
		@foreach($planes as $plan)
			<div class="col-sm-6 col-lg-4 ">
				<article class=" card articlePlanes text-center m-3 p-2">
					
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
							En uso
						</div>
					@else
						<div class="fullDiv noDisponible">
							Obsoleto
						</div>
					@endif
					<footer class="textoBlanco mt-4">
						<a href="{{ route('consulta.show',$plan->id) }}">
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
			Este usuario no tiene planes registrados.
		</div>
	</div>
	@endif

@endsection
@section('js')
<script src="{{ asset( 'recursos/Chart/Chartbundle.js') }} "></script>
<script src="{{ asset( 'recursos/Chart/Chart.js') }} "></script>
<script>
	$(function(){
	var ctx = document.getElementById("myChart ").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: [
				@if(array_key_exists(4,$lastFecha))
					'{{ $lastFecha[4] }}'
				@else
					'0000/00/00'
				@endif,

				@if(array_key_exists(3,$lastFecha))
					'{{ $lastFecha[3] }}'
				@else
					'0000/00/00'
				@endif,

				@if(array_key_exists(2,$lastFecha))
					'{{ $lastFecha[2] }}'
				@else
					'0000/00/00'
				@endif,

				@if(array_key_exists(1,$lastFecha))
					'{{ $lastFecha[1] }}'
				@else
					'0000/00/00'
				@endif,

				@if(array_key_exists(0,$lastFecha))
					'{{ $lastFecha[0] }}'
				@else
					'0000/00/00'
				@endif,
			],
			datasets: [{
				label: 'Peso',
				pointBackgroundColor: 'rgba(54, 162, 235, 1)',
				pointBorderColor: 'rgba(54, 162, 235, 1)',
				data: [
					@if(array_key_exists(4,$lastPeso))
						{{ $lastPeso[4] }}
					@else
						0
					@endif,

					@if(array_key_exists(3,$lastPeso))
						{{ $lastPeso[3] }}
					@else
						0
					@endif,

					@if(array_key_exists(2,$lastPeso))
						{{ $lastPeso[2] }}
					@else
						0
					@endif,

					@if(array_key_exists(1,$lastPeso))
						{{ $lastPeso[1] }}
					@else
						0
					@endif,

					@if(array_key_exists(0,$lastPeso))
						{{ $lastPeso[0] }}
					@else
						0
					@endif

					],
				backgroundColor: [
				'rgba(54, 162, 235, 0.2)'
				],

				borderColor: [
				'rgba(54, 162, 235, 1)'
				],
				borderWidth: 1
			},
			{
				label: 'Altura',
				pointBackgroundColor: 'rgba(255,99,132,1)',
				pointBorderColor: 'rgba(255,99,132,1)',
				data: [
					@if(array_key_exists(4,$lastAltura))
						{{ $lastAltura[4] }}
					@else
						0
					@endif,

					@if(array_key_exists(3,$lastAltura))
						{{ $lastAltura[3] }}
					@else
						0
					@endif,

					@if(array_key_exists(2,$lastAltura))
						{{ $lastAltura[2] }}
					@else
						0
					@endif,

					@if(array_key_exists(1,$lastAltura))
						{{ $lastAltura[1] }}
					@else
						0
					@endif,

					@if(array_key_exists(0,$lastAltura))
						{{ $lastAltura[0] }}
					@else
						0
					@endif

					],
				backgroundColor: [
				'rgba(255, 99, 132, 0.2)'
				],

				borderColor: [
				'rgba(255,99,132,1)'
				],
				borderWidth: 1
			},
			{
				label: 'Imc',
				pointBackgroundColor: 'rgba(76, 175, 80, 1)',
				pointBorderColor: 'rgba(76, 175, 80, 1)',
				data: [
					@if(array_key_exists(4,$lastImc))
						{{ $lastImc[4] }}
					@else
						0
					@endif,

					@if(array_key_exists(3,$lastImc))
						{{ $lastImc[3] }}
					@else
						0
					@endif,

					@if(array_key_exists(2,$lastImc))
						{{ $lastImc[2] }}
					@else
						0
					@endif,

					@if(array_key_exists(1,$lastImc))
						{{ $lastImc[1] }}
					@else
						0
					@endif,

					@if(array_key_exists(0,$lastImc))
						{{ $lastImc[0] }}
					@else
						0
					@endif

					],
				backgroundColor: [
				'rgba(76, 175, 80, 0.2)'
				],

				borderColor: [
				'rgba(76, 175, 80, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive: true,
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
}); // onLoad

</script>
@endsection