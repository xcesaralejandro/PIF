<div class="row mb-5">
  <div class="col-sm-2 col-md-4 offset-md-2 col-xl-3 offset-xl-3">
    {{Form::label('cs_ingesta_agua','¿Cuanta agua ingeriste hoy?')}}
    {{Form::select('cs_ingesta_agua',['0'    => 'Nada',
                                      '500'  => '2 Vasos',
                                      '1000' => '4 Vasos',
                                      '1500' => '6 Vasos',
                                      '2000' => '8 Vasos',
                                      '2500' => 'Más de 8 Vasos'],
                                      null, ['class'=>'form-control','placeholder'=>'Seleccionar...','required'])}}
  </div>

  <div class="col-sm-2 col-md-4 col-xl-3">
    {{Form::label('pa_id','¿Que plan alimentario usaste hoy?')}}
    {{Form::select('pa_id', $planes, null, ['class'=>'form-control','placeholder'=>'Seleccionar...','required'])}}
  </div>
</div> {{-- .row --}}
<div class="fullDiv text-center">
  <span class="display-2 mb-3">¿Que alimentos fuera del plan ingeriste hoy?</span>
<div class="text-left">
  {{Form::textarea('cs_alimentos_extra',null,['id'=>'cs_alimentos_extra'])}}
</div>
</div>

<div class="fullDiv text-center pt-5">
  <span class="display-2 mb-3">¿Que comió hoy tu familia?</span>
<div class="text-left">
  {{Form::textarea('cs_alimentacion_familia',null,['id'=>'cs_alimentacion_familia','required'])}}
</div>
</div>
