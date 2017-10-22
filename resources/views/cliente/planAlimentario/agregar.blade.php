@extends('layouts.main')
@section('title','Crear plan alimentario')

@section('content')
{{-- Sobrescribimos el css del documento para que sea gris solo en esta pagina--}}
<style type="text/css">.cuerpoPagina{background-color: #F8F8F8;}</style>

<div class="fullDiv text-center">
	<span class="display-4">Crear plan alimentario</span>
</div>
<hr>
{{-- SECCION REQUISITOS PARA EL PLAN ///////////////////////////////////////////////////////////////// --}}
<div class="requisitosNutricionales bordeBottomRojo bk_blanco textoGris m-2 p-1 pl-3 pr-3 text-center">
	
	<div class="row text-left">
		<div class="col-6 col-sm-4 col-lg-2 offset-lg-1">
			<div class="row">
				<div class="col-6">
					IMC	
				</div>
				<div class="col-6 text-left">
					<span><strong class="imc">23,40</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					VCT
				</div>
				<div class="col-6 text-left">
					<span><strong class="vct">1950</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					PROT	
				</div>
				<div class="col-6 text-left">
					<span><strong class="pjPROT">20</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					LIP
				</div>
				<div class="col-6 text-left">
					<span><strong class="pjLIP">25</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					CH	
				</div>
				<div class="col-6 text-left">
					<span><strong class="pjCH">55</strong>%</span>
				</div>
			</div>
		</div>

	</div>
	
</div>

{{-- SECCION COMIDAS ////////////////////////////////////////////////////////////////////////////////// --}}
<div class="requisitosNutricionales bordeBottomRojo bk_blanco textoGris m-2 p-1 pl-3 text-center">
	
	<div class="row text-left">

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Desayuno	
				</div>
				<div class="col-6 text-left">
					<span><strong class="pDesayuno">20</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Colación
				</div>
				<div class="col-6 text-left">
					<span><strong class="pColacion1">10</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Almuerzo	
				</div>
				<div class="col-6 text-left">
					<span><strong class="pAlmuerzo">25</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Colación
				</div>
				<div class="col-6 text-left">
					<span><strong class="pColacion2">10</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Once	
				</div>
				<div class="col-6 text-left">
					<span><strong class="pOnce">15</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Cena	
				</div>
				<div class="col-6 text-left">
					<span><strong class="pCena">20</strong>%</span>
				</div>
			</div>
		</div>

	</div>
</div>
<div id="containerSticky" class="p-2 mb-5">
	{{-- SECCION BUSCAR UN ALIMENTO //////////////////////////////////////////////////////////////////////////// --}}
	<section id="buscarAlimento" class="bk_blanco text-center">
		<a id="displayHeadSearch" href="#">
			<div class="headSearch fullDiv textoBlanco fullSolid pl-3 pr-4 bk_azul">
				<div class="row">
					<div class="col-10 text-left">
						Agregar alimentos
					</div>
					<div class="col-2 text-right">
						<i id="iconDisplay" class="fa fa-window-maximize" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</a>
		<div id="bodySearch" class="p-3 rblSolid">
			<div class="row">
				<div class="col-md-4 mb-2">
					{{ Form::select('gruposAlimentos',$grupos, null, [
													   'class'=>'chosen-select',
													   'id'=>'gpoSelect',
													   'placeholder','Seleccionar...']) }}
				</div>

				<div class="col-md-4 mb-2">
					{{ Form::select('categoriasAlimento',['1' => 'Categoria 1',
													      '2' => 'Categoria 2',
													      '3' => 'Categoria 3',
													      '4' => 'Categoria 4'], null, ['class'=>'chosen-select cat_alim','id'=>'catSelect']) }}
				</div>

				<div class="col-md-4 mb-2">
					{{ Form::select('Alimento',['1' => 'Alimento 1',
											    '2' => 'Alimento 2',
											    '3' => 'Alimento 3',
											    '4' => 'Alimento 4'], null, ['class'=>'chosen-select alim', 'id'=>'alim']) }}
				</div>
			</div>
			<hr>
			<div id="searchAlim" class="alimentoEncontrado">
				{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3 hideHeadAlimento">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento text-left">
							Default name
						</div>
						<div class="col-2 text-right">
							<a class="deleteAlimento" href="#">
								<i class="fa fa-times" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
				{{-- CUERPO DEL ALIMENTO --}}
				<div class="bodyAlimento pr-3 pl-3">
					<div class="row">
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Cod
								</div>
								<div class="col-8">
									{{ Form::number('al_id',1,['class'=>'form-control codigoAlimento','readonly']) }}
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div id="test" class="col-8 g">
									{{ Form::number('gramos_ingeridos',100,['class'=>'form-control gramos_ingeridos','style'=>'text-align: center;','min'=>'0','step'=>'1','readonly']) }}
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									{{ Form::number('kcalAlimento',350,['class'=>'form-control kcalAlimento','readonly']) }}
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									{{ Form::number('protAlimento',97.5,['class'=>'form-control protAlimento','readonly']) }}
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									{{ Form::number('lipAlimento',54,['class'=>'form-control lipAlimento','readonly']) }}
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									{{ Form::number('chAlimento',268,['class'=>'form-control chAlimento','readonly']) }}
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			</div>
			<div class="row">
				<div class="col-sm-4 offset-sm-8 col-lg-3 offset-lg-9 col-xl-2 offset-xl-10 mt-2">
					<button class="btn btn-primary fullDiv" id="agregarAlimento">
						<i class="fa fa-plus" aria-hidden="true"></i> Agregar alimento
					</button>
				</div>
			</div>
		</div>
	</section>
{{ Form::open(['route'=>'planAlimentario.store', 'method'=>'POST','id'=>'formPlan']) }}

{{-- DIV COMIDA //////////////////////////////////////////////////////////////////////////////////////// --}}
	<div class="fullDiv fullComida bk_blanco mt-3 comidaDesayuno">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-6 tituloComida">
					Desayuno
				</div>
				<div class="col-6 porcentajeComida text-right pr-4">
					<strong class="kcalComida kcalDesayuno">000</strong> kcal
				</div>
			</div>
		</div>
<div class="listadoComida bk_blanco p-1">

</div>{{-- LISTADO DE COMIDAS --}}

{{-- TOTAL DE LA COMIDA ////////////////////////////////////////////////////////////////////////////// --}}
		<div class="primaryPalet textoBlanco totalComida">
			<div class="row pl-2 pr-2">
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							Kcal
						</div>
						<div class="col-6">
							<strong class="total Kcal">000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT (g)
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP (g)
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH (g)
						</div>
						<div class="col-6">
							<strong class="total CH">00,00</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>{{-- DIV SECCION COMIDA ENTERA --}}


	{{-- DIV COMIDA //////////////////////////////////////////////////////////////////////////////////////// --}}
	<div class="fullDiv fullComida bk_blanco mt-3 comidaColacion1">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-6 tituloComida">
					Colación 1
				</div>
				<div class="col-6 porcentajeComida text-right pr-4">
					<strong class="kcalComida kcalColacion1">000</strong> kcal
				</div>
			</div>
		</div>
<div class="listadoComida bk_blanco p-1">
</div>{{-- LISTADO DE COMIDAS --}}

{{-- TOTAL DE LA COMIDA ////////////////////////////////////////////////////////////////////////////// --}}
		<div class="primaryPalet textoBlanco totalComida">
			<div class="row pl-2 pr-2">
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							Kcal
						</div>
						<div class="col-6">
							<strong class="total Kcal">000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT (g)
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP (g)
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH (g)
						</div>
						<div class="col-6">
							<strong class="total CH">00,00</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>{{-- DIV SECCION COMIDA ENTERA --}}

	{{-- DIV COMIDA //////////////////////////////////////////////////////////////////////////////////////// --}}
	<div class="fullDiv fullComida bk_blanco mt-3 comidaAlmuerzo">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-6 tituloComida">
					Almuerzo
				</div>
				<div class="col-6 porcentajeComida text-right pr-4">
					<strong class="kcalComida kcalAlmuerzo">000</strong> kcal
				</div>
			</div>
		</div>
<div class="listadoComida bk_blanco p-1">
</div>{{-- LISTADO DE COMIDAS --}}

{{-- TOTAL DE LA COMIDA ////////////////////////////////////////////////////////////////////////////// --}}
		<div class="primaryPalet textoBlanco totalComida">
			<div class="row pl-2 pr-2">
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							Kcal
						</div>
						<div class="col-6">
							<strong class="total Kcal">000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT (g)
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP (g)
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH (g)
						</div>
						<div class="col-6">
							<strong class="total CH">00,00</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>{{-- DIV SECCION COMIDA ENTERA --}}

	{{-- DIV COMIDA //////////////////////////////////////////////////////////////////////////////////////// --}}
	<div class="fullDiv fullComida bk_blanco mt-3 comidaColacion2">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-6 tituloComida">
					Colación 2
				</div>
				<div class="col-6 porcentajeComida text-right pr-4">
					<strong class="kcalComida kcalColacion2">000</strong> kcal
				</div>
			</div>
		</div>
<div class="listadoComida bk_blanco p-1">
</div>{{-- LISTADO DE COMIDAS --}}

{{-- TOTAL DE LA COMIDA ////////////////////////////////////////////////////////////////////////////// --}}
		<div class="primaryPalet textoBlanco totalComida">
			<div class="row pl-2 pr-2">
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							Kcal
						</div>
						<div class="col-6">
							<strong class="total Kcal">000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT (g)
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP (g)
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH (g)
						</div>
						<div class="col-6">
							<strong class="total CH">00,00</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>{{-- DIV SECCION COMIDA ENTERA --}}

	<div class="fullDiv fullComida bk_blanco mt-3 comidaOnce">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-6 tituloComida">
					Once
				</div>
				<div class="col-6 porcentajeComida text-right pr-4">
					<strong class="kcalComida kcalOnce">000</strong> kcal
				</div>
			</div>
		</div>
<div class="listadoComida bk_blanco p-1">
</div>{{-- LISTADO DE COMIDAS --}}

{{-- TOTAL DE LA COMIDA ////////////////////////////////////////////////////////////////////////////// --}}
		<div class="primaryPalet textoBlanco totalComida">
			<div class="row pl-2 pr-2">
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							Kcal
						</div>
						<div class="col-6">
							<strong class="total Kcal">000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT (g)
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP (g)
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH (g)
						</div>
						<div class="col-6">
							<strong class="total CH">00,00</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>{{-- DIV SECCION COMIDA ENTERA --}}

		<div class="fullDiv fullComida bk_blanco mt-3 comidaCena">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-6 tituloComida">
					Cena
				</div>
				<div class="col-6 porcentajeComida text-right pr-4">
					<strong class="kcalComida kcalCena">000</strong> kcal
				</div>
			</div>
		</div>
<div class="listadoComida bk_blanco p-1">
</div>{{-- LISTADO DE COMIDAS --}}

{{-- TOTAL DE LA COMIDA ////////////////////////////////////////////////////////////////////////////// --}}
		<div class="primaryPalet textoBlanco totalComida">
			<div class="row pl-2 pr-2">
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							Kcal
						</div>
						<div class="col-6">
							<strong class="total Kcal">000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT (g)
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP (g)
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH (g)
						</div>
						<div class="col-6">
							<strong class="total CH">00,00</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>{{-- DIV SECCION COMIDA ENTERA --}}

</div>

<div class="fullDiv text-center">
	<span class="display-4">Total de tu plan alimentario</span>
</div>
{{-- TOTAL DEL PLAN --}}
<div class="totalPlan alimentario bordeBottomRojo bk_blanco textoGris m-2 p-1 pl-3 pr-3 text-center">
	
	<div class="row text-left">

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					Kcal
				</div>
				<div class="col-6 text-left">
					<span><strong class="finalKcal">0000</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					PROT (g)
				</div>
				<div class="col-6 text-left">
					<span><strong class="finalPROT">00,00</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					LIP (g)
				</div>
				<div class="col-6 text-left">
					<span><strong class="finalLIP">00,00</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					CH (g)	
				</div>
				<div class="col-6 text-left">
					<span><strong class="finalCH">00,00</strong></span>
				</div>
			</div>
		</div>

	</div>
	
</div>

{{-- TOTAL DE LOS REQUERIMIENTOS --}}
<div class="totalRequerimientos bordeBottomRojo alimentario bk_blanco textoGris m-2 p-1 pl-3 pr-3 mt-4 text-center">
	
	<div class="row text-left">

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					Kcal
				</div>
				<div class="col-6 text-left">
					<span><strong class="finalKcal">000</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					PROT (g)	
				</div>
				<div class="col-6 text-left">
					<span><strong class="finalPROT">00,00</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					LIP (g)
				</div>
				<div class="col-6 text-left">
					<span><strong class="finalLIP">00,00</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					CH (g)	
				</div>
				<div class="col-6 text-left">
					<span><strong class="finalCH">00,00</strong></span>
				</div>
			</div>
		</div>

	</div>
	
</div>

<div class="row">
	<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
		{{ Form::label('pa_apodo','Nombre del plan',['class'=>'mt-3']) }}
		{{ Form::text('pa_apodo',null,['class'=>'form-control mb-2','placeholder'=>'Plan dia de gym','style'=>'padding: .6rem;','required']) }}
		{{ Form::submit('Guardar',['class'=>'btn btn-primary fullDiv mb-5','id' => 'btnGuardar']) }}

	</div>
</div>
{{ Form::close() }}
@endsection
@section('js')
<script src="{{ asset('js/planAlimentario.js') }}"></script>
@endsection 

