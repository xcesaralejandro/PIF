<div class="row">
	
	<div class="col-sm-6 col-lg-4 offset-lg-2">
		<div class="form-group">
			{{ Form::label('na_altura', 'Altura (cm)') }}
			{{ Form::number('na_altura',60,['class'=>'form-control altura estoCambia','required','min'=>'60']) }}
		</div>
	</div>

	<div class="col-sm-6 col-lg-4">
		<div class="form-group">
			{{ Form::label('na_peso', 'Peso (kg)') }}
			{{ Form::number('na_peso',30,['class'=>'form-control peso estoCambia','required','min'=>'30']) }}
		</div>
	</div>

	<div class="col-sm-6 col-lg-4 offset-lg-2">
		<div class="form-group">
			{{ Form::label('na_imc', 'Indice de masa corporal (IMC)') }}
			{{ Form::number('na_imc',0,['class'=>'form-control imc','disabled']) }}
		</div>
	</div>

	<div class="col-sm-6 col-lg-4">
		<div class="form-group">
			{{ Form::label('na_vct', 'Kcal a consumir (VCT)') }}
			{{ Form::number('na_vct',0,['class'=>'form-control vct','disabled']) }}
		</div>
	</div>
</div>