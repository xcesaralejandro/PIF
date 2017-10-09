<div class="row">
	<div class="col-sm-6 col-lg-4 offset-lg-2">
		<div class="form-group">
			{{ Form::label('sn_nombre','Nombre') }}
			{{ Form::text('sn_nombre',null,['class'       =>'form-control',
											'placeholder' =>'Alto en grasas',
											'required']) }}
		</div>
</div>

<div class="col-sm-6 col-lg-4">
		<div class="form-group">
			{{ Form::label('sn_url_imagen','Añadir imagen') }}<br>
			{{ Form::file('sn_url_imagen') }}
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			{{ Form::label('sn_descripcion','Descripción') }}
			{{ Form::textarea('sn_descripcion',null,['class'  =>'form-control',
											'placeholder' =>'Descripción',
											'minlength'   =>'10',
											'rows'		  =>'1',
											'id'  	      =>'descEnfermedad',
											'required']) }}
		</div>
	</div>
</div>