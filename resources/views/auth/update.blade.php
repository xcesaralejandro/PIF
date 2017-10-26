@extends('layouts.main')
@section('title','Registrar una cuenta')
@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Actualizar <strong> mi cuenta</strong></span>
</div>
<hr>
{!! Form::model($user,['route' => array('cuenta.update',$user->id),'method' => 'PUT']) !!}
<div class="row">
  <div class="col-sm-6 col-lg-4 offset-lg-2">
    <div class="form-group">
      {{ Form::label('us_email','E-mail') }}
      {{ Form::email('us_email',null,['class'      =>'form-control',
                        'placeholder'=>'cesar.espinoza@gmail.com',
                        'minlength'  =>'5',
                        'required']) }}
    </div>
    <div class="form-group">
      {{ Form::label('us_nombres','Nombres') }}
      {{ Form::text('us_nombres',null,['class'      =>'form-control',
                         'placeholder'=>'César Alejandro',
                         'minlength'  =>'5',
                         'required']) }}
    </div>

    <div class="form-group">
      {{ Form::label('us_apellido_paterno','Apellido paterno') }}
      {{ Form::text('us_apellido_paterno',null,['class'      =>'form-control',
                              'placeholder'=>'Espinoza',
                              'minlength'  =>'3',
                              'required']) }}
    </div>

    <div class="form-group">
      {{ Form::label('us_apellido_materno','Apellido materno') }}
      {{ Form::text('us_apellido_materno',null,['class'      =>'form-control',
                              'placeholder'=>'Fuentealba',
                              'minlength'  =>'3',
                              'required']) }}
    </div>

    {{-- Aca luego ponemos traemos la lista de la tabla y gg --}}
    <div class="form-group">
      {{ Form::label('rg_id','Region') }}
      {{ Form::select('rg_id',$region,null,['class'=>'chosen-select','id'=>'region']) }}

    </div>
    <div class="form-group">
      {{ Form::label('co_id','Comuna') }}
      {{ Form::select('co_id',$comuna ,null,['class'=>'chosen-select','id'=>'comuna']) }}
    </div>

</div>{{-- .COL --}}

  <div class="col-sm-6 col-lg-4">

    <div class="form-group text-center">
      <div class="fullDiv text-left">
        {{ Form::label('us_sexo','Sexo') }}
      </div>
      {{ Form::label('us_sexo','Masculino') }}
      {{ Form::radio('us_sexo', 'M') }}
      {{ Form::label('us_sexo','Femenino') }}
      {{ Form::radio('us_sexo', 'F') }}
    </div>

    <div class="form-group">
      {{ Form::label('us_fecha_nacimiento','Fecha de nacimiento') }}
      {{ Form::date('us_fecha_nacimiento',null,['class' =>'form-control',
                              'required']) }}
    </div>

    <div class="form-group">
      {{ Form::label('us_rut','Rut') }}
      {{ Form::text('us_rut',null,['class'      =>'form-control RUT',
                        'placeholder'=>'12.345.678-9',
                        'required',
                        'id'=>'rut']) }}
    </div>
     <div class="form-group">
      {{ Form::label('password_old','Contraseña actual') }}
      {{ Form::password('password_old',['class'   =>'form-control',
                       'placeholder'=>'********',
                       'id' =>'',
                         'minlength'  =>'5',
                         'required',]) }}
    </div>   
    <div class="form-group">
      {{ Form::label('password','Nueva Contraseña') }}
      {{ Form::password('password',['class'   =>'form-control',
                       'placeholder'=>'********',
                       'id'	=>'password1',
                         'minlength'  =>'5',
                         'required',]) }}
    </div>

    <div class="form-group">
      {{ Form::label('cf_password','Confirmar contraseña') }}
      {{ Form::password('cf_password',['class'   =>'form-control',
                       'placeholder'=>'********',
                       'id'	=>'password2',
                         'minlength'  =>'5',
                         'required']) }}
    </div>

  </div>{{-- .COL SM 6 --}}
</div>{{-- .ROW --}}

<div id="coSelected" style="display: none !important;">
  {{$user->co_id}}
</div>

    <div class="row">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
            <button type="submit" class="btn btn-primary fullDiv">
                <i class="fa fa-user" aria-hidden="true"></i> Actualizar datos
            </button>
        </div>
    </div>

{!! Form::Close() !!}
@endsection

@section('js')
    <script src="{{ asset('js/vUS.js') }}"></script>
@endsection
