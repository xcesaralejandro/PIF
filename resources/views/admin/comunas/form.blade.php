 <div class="col-lg-4 offset-lg-2 ">
	<div class="form-group  text-left">
		{{ Form::label('co_nombre',' Comuna') }}
		{{ Form::text('co_nombre',null,['class' =>'form-control',
			'placeholder' =>'Concepcion',
			'required']) }}
	</div>
</div>
<div class="col-lg-3 ">
	<div class="form-group text-left">
		{{ Form::label('rg_id','Seleccione un grupo ') }}
		{{ Form::select('rg_id',$regiones,null,['class' => 'chosen-select']) }}
	</div>
</div>
