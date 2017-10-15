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
<div class="requisitosNutricionales bk_teal textoBlanco m-2 p-1 pl-3 pr-3 text-center">
	
	<div class="row text-left">
		<div class="col-6 col-sm-4 col-lg-2 offset-lg-1">
			<div class="row">
				<div class="col-6">
					IMC	
				</div>
				<div class="col-6 text-left">
					<span><strong>00,00</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					VCT
				</div>
				<div class="col-6 text-left">
					<span><strong>0000</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					PROT	
				</div>
				<div class="col-6 text-left">
					<span><strong>00</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					LIP
				</div>
				<div class="col-6 text-left">
					<span><strong>00</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					CH	
				</div>
				<div class="col-6 text-left">
					<span><strong>00</strong>%</span>
				</div>
			</div>
		</div>

	</div>
	
</div>

{{-- SECCION COMIDAS ////////////////////////////////////////////////////////////////////////////////// --}}
<div class="requisitosNutricionales bk_teal textoBlanco m-2 p-1 pl-3 text-center">
	
	<div class="row text-left">

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Desayuno	
				</div>
				<div class="col-6 text-left">
					<span><strong>00</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Colación
				</div>
				<div class="col-6 text-left">
					<span><strong>00</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Almuerzo	
				</div>
				<div class="col-6 text-left">
					<span><strong>00</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Colación
				</div>
				<div class="col-6 text-left">
					<span><strong>00</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Once	
				</div>
				<div class="col-6 text-left">
					<span><strong>00</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					Cena	
				</div>
				<div class="col-6 text-left">
					<span><strong>00</strong>%</span>
				</div>
			</div>
		</div>

	</div>
</div>
{{-- DIV CONETENEDOR PARA EL STICKY --}}
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
					{{ Form::select('gruposAlimentos',['1' => 'Grupo 1',
													   '2' => 'Grupo 2',
													   '3' => 'Grupo 3',
													   '4' => 'Grupo 4'], null, ['class'=>'chosen-select gpo_alim']) }}
				</div>

				<div class="col-md-4 mb-2">
					{{ Form::select('categoriasAlimento',['1' => 'Categoria 1',
													      '2' => 'Categoria 2',
													      '3' => 'Categoria 3',
													      '4' => 'Categoria 4'], null, ['class'=>'chosen-select cat_alim']) }}
				</div>

				<div class="col-md-4 mb-2">
					{{ Form::select('Alimento',['1' => 'Alimento 1',
											    '2' => 'Alimento 2',
											    '3' => 'Alimento 3',
											    '4' => 'Alimento 4'], null, ['class'=>'chosen-select alim']) }}
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
								<div class="col-8 codigoAlimento">
									{{ Form::number('al_id',1,['class'=>'form-control','readonly']) }}
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div id="test" class="col-8 g">
									{{ Form::number('gramos_ingeridos',100,['class'=>'form-control gramos_ingeridos','style'=>'text-align: center;','min'=>'0','step'=>'25','readonly']) }}
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									{{ Form::number('kcalAlimento',450,['class'=>'form-control kcalAlimento','readonly']) }}
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									{{ Form::number('protAlimento',11.4,['class'=>'form-control protAlimento','readonly']) }}
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									{{ Form::number('lipAlimento',12,['class'=>'form-control lipAlimento','readonly']) }}
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									{{ Form::number('chAlimento',10,['class'=>'form-control chAlimento','readonly']) }}
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

{{-- DIV COMIDA //////////////////////////////////////////////////////////////////////////////////////// --}}
	<div class="fullDiv fullComida bk_blanco mt-3">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-10 tituloComida">
					Desayuno
				</div>
				<div class="col-2 porcentajeComida">
					25%
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
							<strong class="total Kcal">0000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH
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
	<div class="fullDiv fullComida bk_blanco mt-3">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-10 tituloComida">
					Colación 1
				</div>
				<div class="col-2 porcentajeComida">
					10%
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
							<strong class="total Kcal">0000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH
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
	<div class="fullDiv fullComida bk_blanco mt-3">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-10 tituloComida">
					Almuerzo
				</div>
				<div class="col-2 porcentajeComida">
					35%
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
							<strong class="total Kcal">0000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH
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
	<div class="fullDiv fullComida bk_blanco mt-3">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-10 tituloComida">
					Colación 2
				</div>
				<div class="col-2 porcentajeComida">
					20%
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
							<strong class="total Kcal">0000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH
						</div>
						<div class="col-6">
							<strong class="total CH">00,00</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>{{-- DIV SECCION COMIDA ENTERA --}}

	<div class="fullDiv fullComida bk_blanco mt-3">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-10 tituloComida">
					Once
				</div>
				<div class="col-2 porcentajeComida">
					20%
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
							<strong class="total Kcal">0000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH
						</div>
						<div class="col-6">
							<strong class="total CH">00,00</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>{{-- DIV SECCION COMIDA ENTERA --}}

		<div class="fullDiv fullComida bk_blanco mt-3">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv borderBottomPrimary p-1 pl-2">
			<div class="row">
				<div class="col-10 tituloComida">
					Cena
				</div>
				<div class="col-2 porcentajeComida">
					20%
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
							<strong class="total Kcal">0000</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							PROT
						</div>
						<div class="col-6">
							<strong class="total PROT">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							LIP
						</div>
						<div class="col-6">
							<strong class="total LIP">00,00</strong>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3">
					<div class="row">
						<div class="col-6">
							CH
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
@endsection
@section('js')
<script src="{{ asset('js/planAlimentario.js') }}"></script>
@endsection 

