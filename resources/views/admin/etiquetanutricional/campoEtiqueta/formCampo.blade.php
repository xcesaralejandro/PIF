<div class="row">
	<div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-4">
		<div class="form-group">
			{{ Form::label('cen_nombre','Nombre') }}
			{{ Form::text('cen_nombre',null,['class'       =>'form-control',
											'placeholder' =>'Grasa',
											'required']) }}
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			{{ Form::label('cen_descripcion',' ') }}
			{{ Form::textarea('cen_descripcion',null,['class'  =>'form-control',
											'placeholder' =>'Breve descripción',
											'minlength'   =>'10',
											'rows'		  =>'1',
											'id'  	      =>'descEtiqueta',
											'required']) }}
		</div>
	</div>
</div>