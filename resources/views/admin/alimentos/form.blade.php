<div class="row ">
	<div class="col-sm-6  col-lg-6 col-xl-3 ">
		<div class=" form-group ">
			{{ Form::label('ga_id',' ') }}
			{{ Form::select('ga_id',$grupos,null,['class' => ' fullDiv chosen-select ','required', 'id'=>'grupos', 'placeholder'=>'']) }}
		</div>
	</div>
	<div class="col-sm-6  col-lg-6  col-xl-3">
		<div class="form-group  ">
			{{ Form::label('ct_id',' ') }}
			{{ Form::select('ct_id',$categorias,null,['class' => ' chosen-select','required', 'id '=>'categorias','placeholder'=>'']) }}
		</div>
	</div>
	<div class=" col-sm-12  col-lg-12 col-xl-6 ">
		<div class="form-group ">
			{{ Form::label('al_nombre',' ') }}
			{{ Form::text('al_nombre',null,['class'=>'form-control','placeholder' =>'Ingrese alimento','required']) }}
		</div>
	</div>
</div>

<div class ="row text-left">
	<div class=" col-sm-6 col-lg-2 offset-lg-1">
		<div class="form-group  ">
			{{ Form::label('al_gramos',' gramos') }}
			{{ Form::number('al_gramos',null,['class'=>'form-control','placeholder' =>'100','required']) }}
		</div>
	</div>

	<div class="col-sm-6 col-lg-2">
		<div class="form-group ">
			{{ Form::label('al_kcal',' Calorias(kcal)') }}
			{{ Form::number('al_kcal',null,['class'=>'form-control','placeholder' =>'90','required',]) }}
		</div>
	</div>

	<div class="col-sm-6 col-lg-2">
		<div class="form-group ">
			{{ Form::label('al_proteina',' Proteina') }}
			{{ Form::number('al_proteina',null,['class'=>'form-control','placeholder' =>'0,2','required','step' => '0.1']) }}
		</div>
	</div>
	<div class="col-sm-6 col-lg-2">
		<div class="form-group  ">
			{{ Form::label('al_lipidos',' Lipidos') }}
			{{ Form::number('al_lipidos',null,['class'=>'form-control','placeholder' =>'0,2','required','step' => '0.1']) }}
		</div>
	</div>
	<div class="col-sm-6 col-lg-2">
		<div class="form-group ">
			{{ Form::label('al_carbohidratos',' Carbohidratos') }}
			{{ Form::number('al_carbohidratos',null,['class'=>'form-control','placeholder' =>'0,2','required', 'step' => '0.1']) }}
		</div>
	</div>
</div>

