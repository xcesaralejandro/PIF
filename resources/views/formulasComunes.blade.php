@extends('layouts.mainOutLayout')
@section('title','Calcula tu estado nutricional')

@section('sobreContainer')
  <section id="titulofc">
    <div class="fullDiv text-center pt-3 pb-5 textoBlanco">
      <span class="display-4">¿Quieres saber como está tu <strong>estado nutricional</strong>?</span>
    </div>
  </section>
  <div class="fullDiv bajoUnPoco">
    <div class="d-flex justify-content-center">
      <img src="{{asset('images/vistas_publicas/raspberry.svg')}}" width="170px" height="170px">
    </div>
  </div>
@endsection

@section('content')
  <section id="formFormulasComunes" class="mb-3 pb-5">
    {{Form::open()}}
     <div class="row">
       <div class="col-md-2 offset-md-3">
         <div class="form-group">
           {{Form::label('altura','Altura (cm)')}}
           {{Form::number('altura',null,['class'=>'form-control','placeholder'=>'0','style'=>'text-align: center;','required','max'=>'220'])}}
         </div>
       </div>

       <div class="col-md-2">
         <div class="form-group">
           {{Form::label('peso','Peso (kg)')}}
           {{Form::number('peso',null,['class'=>'form-control','placeholder'=>'0','style'=>'text-align: center;','required','max'=>'170'])}}
         </div>
       </div>

       <div class="col-md-2">
           <div class="form-group">
             {{Form::label('sexo','Sexo')}}
             {{Form::select('sexo',['H'=>'Masculino','M'=>'Femenino'],null,['class'=>'form-control','placeholder'=>'Seleccionar...','required'])}}
           </div>
       </div>
     </div>
     <div class="fullDiv d-flex justify-content-center mt-3">
       {{Form::submit('Ver resultados',['class'=>'btn btn-primary'])}}
     </div>
    {{Form::close()}}
  </section>
@endsection
