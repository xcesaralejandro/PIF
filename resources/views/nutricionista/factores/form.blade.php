<div class="col-md-4 col-lg-4 col-xl-3 offset-xl-1">
	<div class="form-group  text-left">
		{{ Form::label('ft_proteinas','% Protenia') }}
		{{ Form::number('ft_proteinas',null,['class'=>'form-control','max'=>'100','min'=>'0','required']) }}
	</div>
</div>
<div class=" col-md-4 col-lg-4  col-xl-3">
	<div class="form-group  text-left">
		{{ Form::label('ft_lipidos','% Lipidos') }}
		{{ Form::number('ft_lipidos',null,['class' =>'form-control','max'=>'100','min'=>'0','required']) }}
	</div>
</div>
<div class="col-md-4 col-lg-4 col-xl-3 ">
	<div class="form-group  text-left">
		{{ Form::label('ft_carbohidratos','% Carbohidratos') }}
		{{ Form::number('ft_carbohidratos',null,['class'=>'form-control','max'=>'100','min'=>'0','required']) }}
	</div>
</div>