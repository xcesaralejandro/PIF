<div class="row">
	<div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-4">
		<div class="form-group">
			{{ Form::label('en_titulo','Nombre') }}
			{{ Form::text('en_titulo',null,['class'       =>'form-control',
				'placeholder' =>'Diabetes',
				'required']) }}
			</div>
		</div>

		<div class="col-lg-12">
			<div class="form-group">
				{{ Form::label('en_descripcion','Breve descripción') }}
				{{ Form::textarea('en_descripcion',null,['class'  =>'form-control',
					'placeholder' =>'Breve descripción',
					'minlength'   =>'10',
					'rows'		  =>'1',
					'id'  	      =>'descEtiqueta',
					'required']) }}
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="form-group">
					{{ Form::label('en_url_imagen','Añadir imagen') }}<br>
					{{ Form::file('en_url_imagen',['class'=>'file-loading imagen']) }}
				</div>
			</div>

		</div>