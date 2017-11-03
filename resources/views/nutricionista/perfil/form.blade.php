<div class="row">	

	<div class="col-lg-3 mt-5">
		<div class="form-group">
			{{ Form::label('pf_url_imagen',' ') }}<br/>
			{{ Form::file('pf_url_imagen',['class'=>'imagen ']) }}
		</div>
	</div>
	<div class="col-lg-8">
		<div class="fullDiv">
			{{ Form::label('pf_descripcion','Descripcion',['class'=>'display-5 offset-lg-4'])}}
			{{ Form::textarea('pf_descripcion',null,['id'=>'descripPerfil','required']) }}
		</div>

	</div>
	<div class="col-lg-3">
		<div class="form-group">
			{!! Form::label('pf_celular', 'Celular',['class'=>'display-5 offset-lg-4']) !!}
			{!! Form::tel('pf_celular', null, ['class' =>'form-control ', 'placeholder' => '982xxx', 'required','pattern'=>'[0-9]{9}']) !!}
		</div>
	</div>
	<div class="col-lg-8">
		<div class="form-group ">
			{{ Form::label('pf_experiencia','Experiencia',['class'=>'display-5 offset-lg-4']) }}
			{{ Form::select('pf_experiencia',[
				'Menos de un año de experiencia'=>'Menos de un año experiencia',
				'Entre 1 y 3 años de experiencia'=>'Entre 1 y 3 años de experiencia',
				'Entre 3 y 5 años experiencia'=>'Entre 3 y 5 años experiencia',
				'más de 5 años de experiencia '=>'más de 5 años de experiencia '],null,
				['class'=>'chosen-select','required','placeholder'=>' ']) }}
			</div>

		</div>
	</div> <!-- FIN DIV ROW -->
