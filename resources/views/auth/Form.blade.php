<div class="row">
	<div class="col-sm-6 col-lg-4 offset-lg-2">

		<div class="form-group">
			{{ Form::label('us_nombres','Nombres') }}
			{{ Form::text('us_nombres',null,['class'      =>'form-control',
										     'placeholder'=>'César Alejandro',
										     'minlength'  =>'5',
										     'required']) }}
		</div>

		<div class="form-group">
			{{ Form::label('us_apellido_paterno','Apellido paterno') }}
			{{ Form::text('us_apellido_paterno',null,['class'      =>'form-control',
										     		  'placeholder'=>'Espinoza',
										     		  'minlength'  =>'3',
										     		  'required']) }}
		</div>

		<div class="form-group">
			{{ Form::label('us_apellido_materno','Apellido materno') }}
			{{ Form::text('us_apellido_materno',null,['class'      =>'form-control',
										     		  'placeholder'=>'Fuentealba',
										     		  'minlength'  =>'3',
										     		  'required']) }}
		</div>

		<div class="form-group text-center">
			<div class="fullDiv text-left">
				{{ Form::label('us_sexo','Sexo') }}
			</div>
			{{ Form::label('us_sexo','Masculino') }}
			{{ Form::radio('us_sexo', 'masculino') }}
			{{ Form::label('us_sexo','Femenino') }}
			{{ Form::radio('us_sexo', 'femenino') }}
		</div>

		<div class="form-group">
			{{ Form::label('us_fecha_nacimiento','Fecha de nacimiento') }}
			{{ Form::date('us_fecha_nacimiento',null,['class' =>'form-control',
										     		  'required']) }}
		</div>

		{{-- Aca luego ponemos traemos la lista de la tabla y gg --}}
		<div class="form-group">
			{{ Form::label('co_id','Comuna') }}
			{{ Form::select('co_id',['1'=>'CONCE',
									 '2'=>'SAN PEDRO',
									 '3'=>'SANTA JUANA'],null,['class'=>'chosen-select']) }}
		</div>

</div>{{-- .COL --}}

	<div class="col-sm-6 col-lg-4">
		<div class="form-group">
			{{ Form::label('us_email','E-mail') }}
			{{ Form::email('us_email',null,['class'      =>'form-control',
										    'placeholder'=>'cesar.espinoza@gmail.com',
										    'minlength'  =>'5',
										    'required']) }}
		</div>

		<div class="form-group">
			{{ Form::label('us_contrasenia','Contraseña') }}
			{{ Form::password('us_contrasenia',['class'   =>'form-control',
											 'placeholder'=>'********',
										     'minlength'  =>'5',
										     'required']) }}
		</div>

		<div class="form-group">
			{{ Form::label('cf_contrasenia','Confirmar contraseña') }}
			{{ Form::password('cf_contrasenia',['class'   =>'form-control',
											 'placeholder'=>'********',
										     'minlength'  =>'5',
										     'required']) }}
		</div>

		<div class="form-group">
			{{ Form::label('us_peso','Peso actual') }}
			{{ Form::number('us_peso',null,['class'      =>'form-control',
										    'placeholder'=>'79',
										    'min'        =>'40',
										    'max'        =>'130',
										    'step'       =>'1',
										    'required']) }}
		</div>

		<div class="form-group">
			{{ Form::label('us_estatura','Estatura actual') }}
			{{ Form::number('us_estatura',null,['class'      =>'form-control',
										    'placeholder'=>'180',
										    'min'        =>'60',
										    'max'        =>'250',
										    'step'       =>'1',
										    'required']) }}
		</div>

	</div>{{-- .COL SM 6 --}}
</div>{{-- .ROW --}}