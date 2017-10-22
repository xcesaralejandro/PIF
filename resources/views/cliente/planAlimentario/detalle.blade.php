@extends('layouts.main')
@section('title','Detalle del plan alimentario')

@section('content')
<div class="p-4">
	<div class="fullDiv text-center">
	<span class="display-4">{{ $plan->pa_apodo }}</span>
</div>
{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				<strong>Desayuno</strong>
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>
					@foreach($alimentos as $alimento)
						@if(strtoupper($alimento->subComida->sbc_nombre) == 'DESAYUNO')
							{{ $alimento->subComida->sbc_porcentaje }}
						@break
						@endif
					@endforeach
				</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		@foreach($alimentos as $alimento)
			@if(strtoupper($alimento->subComida->sbc_nombre) == 'DESAYUNO')
				{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
				<div id="searchAlim" class="alimentoEncontrado">
					<div id="alimento" class="fullAlimento m-2">
						<div class="headAlimento pl-3 pr-3">
							<div class="row mb-1">
								<div class="col-12 nombreAlimento text-left">
									{{ $alimento->Alimento->al_nombre }}
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
											<span>{{ $alimento->al_id }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Gramos
										</div>
										<div id="test" class="col-6 g">
											<span>{{ $alimento->rga_gramos }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Kcal
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_kcal}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											PROT
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_proteina}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											LIP
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_lipidos}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											CH
										</div>
										<div class="col-6 total CH">
											<span>{{ $alimento->rga_carbohidratos}}</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
			@endif
		@endforeach
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				<strong>Colación</strong>
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>
					@foreach($alimentos as $alimento)
						@if(strtoupper($alimento->subComida->sbc_nombre) == 'PRIMERA COLACION')
							{{ $alimento->subComida->sbc_porcentaje }}
						@break
						@endif
					@endforeach
				</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		@foreach($alimentos as $alimento)
			@if(strtoupper($alimento->subComida->sbc_nombre) == 'PRIMERA COLACION')
				{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
				<div id="searchAlim" class="alimentoEncontrado">
					<div id="alimento" class="fullAlimento m-2">
						<div class="headAlimento pl-3 pr-3">
							<div class="row mb-1">
								<div class="col-12 nombreAlimento text-left">
									{{ $alimento->Alimento->al_nombre }}
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
											<span>{{ $alimento->al_id }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Gramos
										</div>
										<div id="test" class="col-6 g">
											<span>{{ $alimento->rga_gramos }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Kcal
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_kcal}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											PROT
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_proteina}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											LIP
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_lipidos}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											CH
										</div>
										<div class="col-6 total CH">
											<span>{{ $alimento->rga_carbohidratos}}</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
			@endif
		@endforeach
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				<strong>Almuerzo</strong>
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>
					@foreach($alimentos as $alimento)
						@if(strtoupper($alimento->subComida->sbc_nombre) == 'ALMUERZO')
							{{ $alimento->subComida->sbc_porcentaje }}
						@break
						@endif
					@endforeach
				</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		@foreach($alimentos as $alimento)
			@if(strtoupper($alimento->subComida->sbc_nombre) == 'ALMUERZO')
				{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
				<div id="searchAlim" class="alimentoEncontrado">
					<div id="alimento" class="fullAlimento m-2">
						<div class="headAlimento pl-3 pr-3">
							<div class="row mb-1">
								<div class="col-12 nombreAlimento text-left">
									{{ $alimento->Alimento->al_nombre }}
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
											<span>{{ $alimento->al_id }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Gramos
										</div>
										<div id="test" class="col-6 g">
											<span>{{ $alimento->rga_gramos }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Kcal
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_kcal}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											PROT
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_proteina}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											LIP
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_lipidos}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											CH
										</div>
										<div class="col-6 total CH">
											<span>{{ $alimento->rga_carbohidratos}}</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
			@endif
		@endforeach
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				<strong>Colación</strong>
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>
					@foreach($alimentos as $alimento)
						@if(strtoupper($alimento->subComida->sbc_nombre) == 'SEGUNDA COLACION')
							{{ $alimento->subComida->sbc_porcentaje }}
						@break
						@endif
					@endforeach
				</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		@foreach($alimentos as $alimento)
			@if(strtoupper($alimento->subComida->sbc_nombre) == 'SEGUNDA COLACION')
				{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
				<div id="searchAlim" class="alimentoEncontrado">
					<div id="alimento" class="fullAlimento m-2">
						<div class="headAlimento pl-3 pr-3">
							<div class="row mb-1">
								<div class="col-12 nombreAlimento text-left">
									{{ $alimento->Alimento->al_nombre }}
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
											<span>{{ $alimento->al_id }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Gramos
										</div>
										<div id="test" class="col-6 g">
											<span>{{ $alimento->rga_gramos }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Kcal
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_kcal}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											PROT
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_proteina}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											LIP
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_lipidos}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											CH
										</div>
										<div class="col-6 total CH">
											<span>{{ $alimento->rga_carbohidratos}}</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
			@endif
		@endforeach
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				<strong>Once</strong>
			</div>
			<div class="col-6 porcentajeComida text-right pr-4">
				<strong>
					@foreach($alimentos as $alimento)
						@if(strtoupper($alimento->subComida->sbc_nombre) == 'ONCE')
							{{ $alimento->subComida->sbc_porcentaje }}
						@break
						@endif
					@endforeach
				</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		@foreach($alimentos as $alimento)
			@if(strtoupper($alimento->subComida->sbc_nombre) == 'ONCE')
				{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
				<div id="searchAlim" class="alimentoEncontrado">
					<div id="alimento" class="fullAlimento m-2">
						<div class="headAlimento pl-3 pr-3">
							<div class="row mb-1">
								<div class="col-12 nombreAlimento text-left">
									{{ $alimento->Alimento->al_nombre }}
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
											<span>{{ $alimento->al_id }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Gramos
										</div>
										<div id="test" class="col-6 g">
											<span>{{ $alimento->rga_gramos }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Kcal
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_kcal}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											PROT
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_proteina}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											LIP
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_lipidos}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											CH
										</div>
										<div class="col-6 total CH">
											<span>{{ $alimento->rga_carbohidratos}}</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
			@endif
		@endforeach
	</div>
</div>

{{-- COMIDA //////////////////////////////////////////////////////////////////////////////////// --}}
<div class="fullDiv bk_blanco mt-3">
	<div class="fullDiv borderBottomPrimary p-1 pl-2">
		<div class="row">
			<div class="col-6 tituloComida">
				<strong>Cena</strong>
			</div>
			<div class="col-6 text-right pr-4">
				<strong>
					@foreach($alimentos as $alimento)
						@if(strtoupper($alimento->subComida->sbc_nombre) == 'CENA')
							{{ $alimento->subComida->sbc_porcentaje }}
						@break
						@endif
					@endforeach
				</strong>%
			</div>
		</div>
	</div>
	<div class="listadoComida bk_blanco p-1">
		@foreach($alimentos as $alimento)
			@if(strtoupper($alimento->subComida->sbc_nombre) == 'CENA')
				{{-- ///////////////////////////////////// ALIMENTOS //////////////////////////////////// --}}
				<div id="searchAlim" class="alimentoEncontrado">
					<div id="alimento" class="fullAlimento m-2">
						<div class="headAlimento pl-3 pr-3">
							<div class="row mb-1">
								<div class="col-12 nombreAlimento text-left">
									{{ $alimento->Alimento->al_nombre }}
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
											<span>{{ $alimento->al_id }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Gramos
										</div>
										<div id="test" class="col-6 g">
											<span>{{ $alimento->rga_gramos }}</span>
										</div>
									</div>
								</div>

								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											Kcal
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_kcal}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											PROT
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_proteina}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											LIP
										</div>
										<div class="col-6">
											<span>{{ $alimento->rga_lipidos}}</span>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-2">
									<div class="row">
										<div class="col-6">
											CH
										</div>
										<div class="col-6 total CH">
											<span>{{ $alimento->rga_carbohidratos}}</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
		{{-- ///////////////////////////////////// FIN ALIMENTO ///////////////////////////////////////// --}}
			@endif
		@endforeach
	</div>
</div>
</div>


<div class="primaryPalet textoBlanco m-2 p-1 pl-3 pr-3 text-center mb-5">
	
	<div class="row text-left">
		<div class="col-6 col-sm-4 col-lg-2 offset-lg-1">
			<div class="row">
				<div class="col-6">
					IMC	
				</div>
				<div class="col-6 text-left">
					<span><strong>{{ $plan->nuevosAvance->na_imc }}</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					VCT
				</div>
				<div class="col-6 text-left">
					<span><strong>{{ $plan->nuevosAvance->na_vct }}</strong></span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					PROT	
				</div>
				<div class="col-6 text-left">
					<span><strong>{{ $plan->factore->ft_proteinas }}</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					LIP
				</div>
				<div class="col-6 text-left">
					<span><strong>{{ $plan->factore->ft_lipidos }}</strong>%</span>
				</div>
			</div>
		</div>

		<div class="col-6 col-sm-4 col-lg-2">
			<div class="row">
				<div class="col-6">
					CH	
				</div>
				<div class="col-6 text-left">
					<span><strong>{{ $plan->factore->ft_carbohidratos }}</strong>%</span>
				</div>
			</div>
		</div>

	</div>
	
</div>

@endsection