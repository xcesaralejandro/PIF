<div class="col-lg-4 offset-lg-2 ">
	<div class="form-group  text-left">
		{{ Form::label('ct_nombre',' Categoria') }}
		{{ Form::text('ct_nombre',null,['class' =>'form-control',
			'placeholder' =>'Lacteos',
			'required']) }}
	</div>
</div>
<div class="col-lg-3 ">
	<div class="form-group text-left">
		{{ Form::label('ga_id','Seleccione un grupo ') }}
		{{ Form::select('ga_id',$grupos,null,['class' => 'chosen-select']) }}
	</div>
</div>
