@extends('layouts.main') @section('title','Nuevos avances') @section('content')

<div class="text-center fullDiv mt-2 mb-4">
<span class="display-4">Registrar un <strong>nuevo avance</strong></span>
</div>
<hr>
<div class="formNuevoAvance fullDiv p-3">
{{ Form::open(['route'=>'nuevoAvance.store', 'method'=>'POST']) }} @include('cliente.nuevoAvance.form')
<div class="row text-center">
	<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-1 pl-5 pr-5">
		<button type="submit" class="btn btn-primary">
			<div class="row">
				<div class="col-2 text-left" ">
					<i class="fa fa-plus " aria-hidden="true "></i>
				</div>
				<div class="col-10 text-center ">
					Registrar avance
				</div>
			</div>
		</button>
	</div>
</div>

{{ Form::close() }}
</div>

@if(count($avances) > 0)
<div class="text-center fullDiv mt-5 mb-4 ">
	<span class="display-4 ">Avances registrados hoy</span>
</div>
<hr>

	@foreach($avances as $avance)
	<div class="registroNuevoAvance p-2 pr-4 pl-4 bk_blanco mb-3">
	<div class="row ">
		<div class="col-10 ">
			<strong>{{ $avance->na_fecha }}</strong>
		</div>
		<div class="col-2 text-right pr-3 ">
			<a href="{{ route('nuevoAvance.destroy', $avance->id) }} ">
				<i class="fa fa-times " aria-hidden="true "></i>
			</a>
		</div>
	</div>
	<div class="row ">
		<div class="col-6 col-sm-3 ">
			<strong>{{ $avance->na_peso }}</strong> Kg
		</div>
		<div class="col-6 col-sm-3 ">
			<strong>{{ $avance->na_altura }}</strong> Cm
		</div>
		<div class="col-6 col-sm-3 ">
			<strong>{{ $avance->na_imc }}</strong> Imc
		</div>
		<div class="col-6 col-sm-3 ">
			<strong>{{ $avance->na_vct }}</strong> Vct
		</div>
	</div>
</div>
	@endforeach
@endif
<span class="lastPeso">

</span>
<div class="text-center fullDiv mt-5 mb-4 ">
	<span class="display-4 ">Ultimos <strong>5</strong> registros</span>
</div>
<hr>
<canvas id="myChart " width="800" height="200px"></canvas>
@endsection

@section('js')
<script src="{{ asset( 'recursos/Chart/Chartbundle.js') }} "></script>
<script src="{{ asset( 'recursos/Chart/Chart.js') }} "></script>
<script>
	$(function(){
		var trigger = $('input.estoCambia');
		trigger.on('keyup mouseup', function(){
			var peso    = parseInt($('.peso').val());
			var altura  = parseInt($('.altura').val());
			$('.vct').val(peso * 26);
			$('.imc').val((peso / (altura/100 * altura/100)).toFixed(2));
		});

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
