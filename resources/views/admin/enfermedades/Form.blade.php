<div class="row">
	<div class="col-lg-4">
		<div class="form-group">
			{{ Form::label('ef_nombre','Nombre') }}
			{{ Form::text('ef_nombre',null,['class'       =>'form-control',
				'placeholder' =>'Diabetes',
				'required']) }}
			</div>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				{{ Form::label('ef_url','Url referencia') }}
				{{ Form::text('ef_url',null,['class'       	  =>'form-control',
					'placeholder' =>'https://es.wikipedia.org',
					'required']) }}
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					{{ Form::label('ef_url_imagen','Añadir imagen') }}<br>
					{{ Form::file('ef_url_imagen',['required','class'=>'imagen']) }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					{{ Form::label('ef_descripcion','Breve descripción') }}
					{{ Form::textarea('ef_descripcion',null,['class'  =>'form-control',
						'placeholder' =>'Breve descripción',
						'minlength'   =>'10',
						'rows'		  =>'1',
						'id'  	      =>'descEnfermedad',
						'required']) }}
					</div>
				</div>
			</div>