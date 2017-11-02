<div class="row pt-5 ">
    <div class=" col-sm-4 offset-md-1 ">
      <div class="form-group ">
        {{ Form::label('Nombre','Nombre') }}
        {{ Form::text('nombre_mensaje',null,['class'=>'form-control','placeholder' =>'Nombre apellido','required']) }}
      </div>
      <div class="form-group ">
        {{ Form::label('NumerodeTelefono','Numero') }}
        {{ Form::text('numero_mensaje',null,['class'=>'form-control','placeholder' =>'95022***','required']) }}
      </div>
      <div class="form-group ">
        {{ Form::label('correo','Correo') }}
        {{ Form::email('correo_mensaje',null,['class'=>'form-control','placeholder' =>'ejemplo@gmail.com','required']) }}
      </div>

    </div>
          <div class=" col-sm-8 col-md-6  ">
        <div class="form-group ">
          {{ Form::label('mensaje','Ingrese su mensaje') }}
          {{ Form::textarea('mensaje',null,['class'=>'form-control','placeholder' =>'Mensaje...','required']) }}
        </div>
      </div> 
  </div>