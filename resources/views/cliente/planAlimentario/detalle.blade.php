@extends('layouts.main')
@section('title','Detalle del plan alimentario')

@section('content')
<div class="p-4">
	<div class="fullDiv text-center">
	<span class="display-4">Apodo del plan alimentario</span>
</div>
{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				Desayuno
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>00</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
		<div id="searchAlim" class="alimentoEncontrado">
			<div id="alimento" class="fullAlimento m-2">
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-12 nombreAlimento text-left">
							<strong>Default name</strong>
						</div>
					</div>
				</div>
				<div class="bodyAlimento pr-3 pl-3 separadorGris pb-1">
					<div class="row">
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Cod
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Gramos
								</div>
								<div id="test" class="col-6 g">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Kcal
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									PROT
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									LIP
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									CH
								</div>
								<div class="col-6 total CH">
									<span>0</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				Colación
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>00</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
		<div id="searchAlim" class="alimentoEncontrado">
			<div id="alimento" class="fullAlimento m-2">
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-12 nombreAlimento text-left">
							<strong>Default name</strong>
						</div>
					</div>
				</div>
				<div class="bodyAlimento pr-3 pl-3 separadorGris pb-1">
					<div class="row">
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Cod
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Gramos
								</div>
								<div id="test" class="col-6 g">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Kcal
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									PROT
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									LIP
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									CH
								</div>
								<div class="col-6 total CH">
									<span>0</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				Almuerzo
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>00</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
		<div id="searchAlim" class="alimentoEncontrado">
			<div id="alimento" class="fullAlimento m-2">
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-12 nombreAlimento text-left">
							<strong>Default name</strong>
						</div>
					</div>
				</div>
				<div class="bodyAlimento pr-3 pl-3 separadorGris pb-1">
					<div class="row">
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Cod
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Gramos
								</div>
								<div id="test" class="col-6 g">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Kcal
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									PROT
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									LIP
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									CH
								</div>
								<div class="col-6 total CH">
									<span>0</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				Colación
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>00</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
		<div id="searchAlim" class="alimentoEncontrado">
			<div id="alimento" class="fullAlimento m-2">
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-12 nombreAlimento text-left">
							<strong>Default name</strong>
						</div>
					</div>
				</div>
				<div class="bodyAlimento pr-3 pl-3 separadorGris pb-1">
					<div class="row">
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Cod
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Gramos
								</div>
								<div id="test" class="col-6 g">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Kcal
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									PROT
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									LIP
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									CH
								</div>
								<div class="col-6 total CH">
									<span>0</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				Once
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>00</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
		<div id="searchAlim" class="alimentoEncontrado">
			<div id="alimento" class="fullAlimento m-2">
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-12 nombreAlimento text-left">
							<strong>Default name</strong>
						</div>
					</div>
				</div>
				<div class="bodyAlimento pr-3 pl-3 separadorGris pb-1">
					<div class="row">
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Cod
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Gramos
								</div>
								<div id="test" class="col-6 g">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Kcal
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									PROT
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									LIP
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									CH
								</div>
								<div class="col-6 total CH">
									<span>0</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				Cena
			</div>
			<div class="col-6 text-right pr-4">
				<strong>00</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
		<div id="searchAlim" class="alimentoEncontrado">
			<div id="alimento" class="fullAlimento m-2">
				<div class="headAlimento pl-3 pr-3">
					<div class="row mb-1">
						<div class="col-12 nombreAlimento text-left">
							<strong>Default name</strong>
						</div>
					</div>
				</div>
				<div class="bodyAlimento pr-3 pl-3 separadorGris pb-1">
					<div class="row">
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Cod
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Gramos
								</div>
								<div id="test" class="col-6 g">
									<span>0</span>
								</div>
							</div>
						</div>

						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									Kcal
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									PROT
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									LIP
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="row">
								<div class="col-6">
									CH
								</div>
								<div class="col-6">
									<span>0</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
	</div>
</div>
</div>


<div class="primaryPalet textoBlanco m-2 p-1 pl-3 pr-3 text-center">
	
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




<div class="primaryPalet textoBlanco m-2 p-1 pl-3 pr-3 mt-2 text-center">
	<div class="row text-left">

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					VCT
				</div>
				<div class="col-6 text-left">
					<span><strong>000</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					PROT (g)	
				</div>
				<div class="col-6 text-left">
					<span><strong>00,00</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					LIP (g)
				</div>
				<div class="col-6 text-left">
					<span><strong>00,00</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-lg-3">
			<div class="row">
				<div class="col-6">
					CH (g)	
				</div>
				<div class="col-6 text-left">
					<span><strong>00,00</strong></span>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection