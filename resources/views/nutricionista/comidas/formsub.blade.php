<div class="row">
<div class=" col-md-4 col-lg-3  col-xl-2 offset-xl-2">
	<div class="form-group ">
		{{ Form::label('sbc_porcentaje','Desayuno') }}
		{{ Form::number('porcentaje[]',null,['class' =>'form-control','max'=>'100','min'=>'0','required']) }}
	</div>
</div>
<div class="col-md-4 col-lg-3 col-xl-2 ">
	<div class="form-group ">
		{{ Form::label('sbc_porcentaje','Primera colacion') }}
		{{ Form::number('porcentaje[]',null,['class'=>'form-control','max'=>'100','min'=>'0','required']) }}
	</div>
</div>
<div class=" col-md-4 col-lg-3  col-xl-2">
	<div class="form-group ">
		{{ Form::label('sbc_porcentaje','Almuerzo') }}
		{{ Form::number('porcentaje[]',null,['class' =>'form-control','max'=>'100','min'=>'0','required']) }}
	</div>
</div>
<div class="col-md-4 col-lg-3 col-xl-2  ">
	<div class="form-group ">
		{{ Form::label('sbc_porcentaje','Segunda colacion') }}
		{{ Form::number('porcentaje[]',null,['class'=>'form-control','max'=>'100','min'=>'0','required']) }}
	</div>
</div>
<div class=" col-md-4 col-lg-3 offset-lg-3 col-xl-2 offset-xl-4">
	<div class="form-group">
		{{ Form::label('sbc_porcentaje','Once') }}
		{{ Form::number('porcentaje[]',null,['class' =>'form-control','max'=>'100','min'=>'0','required']) }}
	</div>
</div>
<div class="col-md-4 col-lg-3 col-xl-2 ">
	<div class="form-group">
		{{ Form::label('sbc_porcentaje','Cena') }}
		{{ Form::number('porcentaje[]',null,['class'=>'form-control','max'=>'100','min'=>'0','required']) }}
	</div>
</div>
</div>