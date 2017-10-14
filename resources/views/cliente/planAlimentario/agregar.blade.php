@extends('layouts.main')
@section('title','Enfermedades por una mala alimentación')

@section('content')
{{-- Sobrescribimos el css del documento para que sea gris solo en esta pagina--}}
<style type="text/css">.cuerpoPagina{background-color: #F8F8F8;}</style>

<div class="fullDiv text-center">
	<span class="display-4">Crear plan alimentario</span>
</div>
<hr>
{{-- SECCION REQUISITOS PARA EL PLAN ///////////////////////////////////////////////////////////////// --}}
<div class="requisitosNutricionales primaryPalet textoBlanco m-2 p-1 pl-3 pr-3 text-center">
	
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
			<div class="headSearch fullDiv textoBlanco fullSolid pl-3 pr-3 bk_azul">
				<div class="row">
					<div class="col-10 text-left">
						Buscar alimentos
					</div>
					<div class="col-2 text-right">
						<i id="iconDisplay" class="fa fa-window-minimize" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</a>
		<div id="bodySearch" class="p-3 rblSolid">
			<div class="row">
				<div class="col-md-4 mb-2">
					<select class="chosen-select">
						<option>grupo1</option>
						<option>grupo2</option>
						<option>grupo3</option>
					</select>
				</div>

				<div class="col-md-4 mb-2">
					<select class="chosen-select">
						<option>categoria1</option>
						<option>categoria2</option>
						<option>categoria3</option>
					</select>
				</div>

				<div class="col-md-4 mb-2">
					<select class="chosen-select">
						<option>alimento1</option>
						<option>alimento2</option>
						<option>alimento3</option>
					</select>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-6 col-md-3">
					<div class="form-group">
						<label for="al_gramos">100 Gramos</label>
						<input id="al_gramos" type="number" class="form-control" readonly="">
					</div>	
				</div>

				<div class="col-6 col-md-3">
					<div class="form-group">
						<label for="al_proteina">Proteinas</label>
						<input id="al_proteina" type="number" class="form-control" readonly="" value="123.8">
					</div>	
				</div>

				<div class="col-6 col-md-3">
					<div class="form-group">
						<label for="al_lipidos">Lipidos</label>
						<input id="al_lipidos" type="number" class="form-control" readonly="">
					</div>	
				</div>

				<div class="col-6 col-md-3">
					<div class="form-group">
						<label for="al_carbohidratos">Carbohidratos</label>
						<input id="al_carbohidratos" type="number" class="form-control" readonly="">
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<button class="btn btn-primary fullDiv">Agregar alimento</button>
				</div>
			</div>
		</div>
	</section>

{{-- DIV COMIDA //////////////////////////////////////////////////////////////////////////////////////// --}}
	<div class="fullDiv fullComida bk_blanco mt-5">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv primaryPalet textoBlanco p-1 pl-2">
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
	{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

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
	<div class="fullDiv fullComida bk_blanco mt-5">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv primaryPalet textoBlanco p-1 pl-2">
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
	{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

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
	<div class="fullDiv fullComida bk_blanco mt-5">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv primaryPalet textoBlanco p-1 pl-2">
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
	{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

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
	<div class="fullDiv fullComida bk_blanco mt-5">
{{-- TITULO COMIDA //////////////////////////////////////////////////////////////////////////////////////--}}
		<div class="fullDiv primaryPalet textoBlanco p-1 pl-2">
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
	{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			{{-- 1 ALIMENTO--}}
			<div id="alimento" class="fullAlimento m-2">
				{{-- HEAD ALIMENTO --}}
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-10 nombreAlimento">
							nombre del alimento
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
									<input style="text-align: center;" type="number" value="0" name="" class="form-control" readonly="">
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Gramos
								</div>
								<div class="col-8 g">
									<input style="text-align: center;" type="number" value="0" name="" class="form-control">
								</div>
							</div>
						</div>


						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									Kcal
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									PROT
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									LIP
								</div>
								<div class="col-8">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-4">
									CH
								</div>
								<div class="col-8 total CH">
									<input class="form-control" type="number" value="12.34" name="" readonly="">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

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

