@extends('layouts.main')

@section('title','Nuevos avances')

@section('content')

<div class="text-center fullDiv mt-2 mb-4">
	<span class="display-4">Registrar un <strong>nuevo avance</strong></span>
</div> 
<hr>

<div class="formNuevoAvance fullDiv p-3">
	
	{{ Form::open() }}
	
	@include('cliente.nuevoAvance.form')
	
	<div class="row text-center">
		
		<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-1 pl-5 pr-5">
			
			<button type="submit" class="btn btn-primary">
				
				<div class="row">
					
					<div class="col-2 text-left"">
						
						<i class="fa fa-plus" aria-hidden="true"></i>	
						
					</div>
					
					<div class="col-10 text-center">
						
						Registrar avance						
						
					</div>
					
				</div>
				
			</button>
			
		</div>
		
	</div>
	
	{{ Form::close() }}
	
</div>



<div class="fullDiv">
	
	<div class="text-center fullDiv mt-5 mb-4">
		
		<span class="display-4">Avances registrados hoy</span>
		
	</div>
	
	<hr>
	

	
	<div class="registroNuevoAvance p-2 pr-4 pl-4 bk_blanco">
		
		<div class="row">
			
			<div class="col-10">
				
				<strong>0000/00/00</strong>
				
			</div>
			

			
			<div class="col-2 text-right pr-3">
				
				<a href="">
					
					<i class="fa fa-times" aria-hidden="true"></i>
					
				</a>
				
			</div>
			
		</div>
		

		
		<div class="row">
			

			
			<div class="col-6 col-sm-3">
				
				<strong>00</strong> Kg
				
			</div>
			

			
			<div class="col-6 col-sm-3">
				
				<strong>000</strong> Cm
				
			</div>
			

			

			
			<div class="col-6 col-sm-3">
				
				<strong>00,00</strong> Imc
				
			</div>
			

			
			<div class="col-6 col-sm-3">
				
				<strong>0000</strong> Vct
				
			</div>
			
		</div>
		
	</div>
	

	
	<div class="text-center fullDiv mt-5 mb-4">
		
		<span class="display-4">Ultimos registros</span>
		
	</div>
	
	<hr>
	

	
	<canvas id="myChart" width="200" height="200"></canvas>
	
	@endsection
	

	
	@section('js')
	
	<script src="{{ asset('recursos/Chart/Chartbundle.js') }}"></script>
	
	<script src="{{ asset('recursos/Chart/Chart.js') }}"></script>
	
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script> --}}

<script>
	
	$(function(){
		
		var trigger = $('input.estoCambia');
		

		
		trigger.on('keyup mouseup', function(){
			
			var peso    = parseInt($('.peso').val());
			
			var altura  = parseInt($('.altura').val());
			
			$('.vct').val(peso * 26);	
			
			$('.imc').val((peso / (altura/100 * altura/100)).toFixed(2));
			
		});
		

		

		
		// TEST CHAR JS
		

		

		
		var ctx = document.getElementById("myChart").getContext('2d');
		
		var myChart = new Chart(ctx, {
			
			type: 'bar',
			
			data: {
				
				labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
				
				datasets: [{
					
					label: '# of Votes',
					
					data: [12, 19, 3, 5, 2, 3],
					
					backgroundColor: [
					
					'rgba(255, 99, 132, 0.2)',
					
					'rgba(54, 162, 235, 0.2)',
					
					'rgba(255, 206, 86, 0.2)',
					
					'rgba(75, 192, 192, 0.2)',
					
					'rgba(153, 102, 255, 0.2)',
					
					'rgba(255, 159, 64, 0.2)'
					
					],
					
					borderColor: [
					
					'rgba(255,99,132,1)',
					
					'rgba(54, 162, 235, 1)',
					
					'rgba(255, 206, 86, 1)',
					
					'rgba(75, 192, 192, 1)',
					
					'rgba(153, 102, 255, 1)',
					
					'rgba(255, 159, 64, 1)'
					
					],
					
					borderWidth: 1
					
				}]
				
			},
			
			options: {
				
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