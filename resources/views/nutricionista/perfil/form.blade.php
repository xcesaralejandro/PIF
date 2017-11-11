<div class="row">

	<div class="col-sm-12">
		<div class="fullDiv">
			{{ Form::label('pf_descripcion','¡Describete para captar clientes!',['class'=>'display-2 offset-lg-4'])}}
			{{ Form::textarea('pf_descripcion',null,['id'=>'descripPerfil','required']) }}
		</div>
	</div>

	<div class="col-lg-4 text-center">
		<div class="form-group">
			{{ Form::label('pf_url_imagen','Agregar foto',['class'=>'display-2']) }}<br/>
			{{ Form::file('pf_url_imagen',['class'=>'imagen ']) }}
		</div>
	</div>

	<div class="col-lg-4 text-center">
		<div class="form-group text-center">
			{!! Form::label('pf_celular', 'Teléfono móvil',['class'=>'display-2']) !!}
			{!! Form::tel('pf_celular', null, ['class' =>'form-control ', 'placeholder' => '900000000', 'required','pattern'=>'[0-9]{9}']) !!}
		</div>
	</div>
	<div class="col-lg-4 text-center">
		<div class="form-group ">
			{{ Form::label('pf_experiencia','Años de experiencia',['class'=>'display-2']) }}
			{{ Form::number('pf_experiencia',null,['class'=>'form-control','required','placeholder'=>' ','min'=>'0','max'=>'50']) }}
			</div>

		</div>
	</div> <!-- FIN DIV ROW -->
