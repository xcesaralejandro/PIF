@extends('layouts.main')
@section('title','Planes alimentarios disponibles')

@section('content')
	<div class="row">
		<div class="col-sm-6 col-lg-4">
			<article class="articlePlanes text-center m-3 p-2">
				<header class="text-right mb-4">
					<span class="pr-2 pl-2">Creado <strong>00-00-0000</strong></span>
				</header>
				<div class="fullDiv">
					<span class="text-center display-4">Apodo del plan alimentario</span>
				</div>
				<div class="fullDiv">
					<span ><strong>0000</strong> Kcal</span>
				</div>
				<div class="fullDiv disponible">
					Disponible
				</div>
				<footer class="textoBlanco mt-4">
					<a href="#">
						<div class="p-1">
							Ver en detalle
						</div>
					</a>
				</footer>
			</article>
		</div>

		<div class="col-sm-6 col-lg-4">
			<article class="articlePlanes text-center m-3 p-2">
				<header class="text-right mb-4">
					<span class="pr-2 pl-2">Creado <strong>00-00-0000</strong></span>
				</header>
				<div class="fullDiv">
					<span class="text-center display-4">Apodo del plan alimentario</span>
				</div>
				<div class="fullDiv">
					<span ><strong>0000</strong> Kcal</span>
				</div>
				<div class="fullDiv disponible">
					Disponible
				</div>
				<footer class="textoBlanco mt-4">
					<a href="#">
						<div class="p-1">
							Ver en detalle
						</div>
					</a>
				</footer>
			</article>
		</div>

		<div class="col-sm-6 col-lg-4">
			<article class="articlePlanes text-center m-3 p-2">
				<header class="text-right mb-4">
					<span class="pr-2 pl-2">Creado <strong>00-00-0000</strong></span>
				</header>
				<div class="fullDiv">
					<span class="text-center display-4">Apodo del plan alimentario</span>
				</div>
				<div class="fullDiv">
					<span ><strong>0000</strong> Kcal</span>
				</div>
				<div class="fullDiv noDisponible">
					No disponible
				</div>
				<footer class="textoBlanco mt-4">
					<a href="#">
						<div class="p-1">
							Ver en detalle
						</div>
					</a>
				</footer>
			</article>
		</div>
		
	</div>{{-- .ROW --}}
@endsection