@extends('layouts.main')
@section('title-nav','Nutricionista')
@section('title','Personas que desean trabajar contigo')

@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Solicitudes<strong> pendientes</strong>
    </span>
</div>
<hr>
<table class="table table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th>Nombre</th>
            <th>E-mail</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($pts as $pt)
        <tr>
          <td>{{$pt->User->us_nombres}} {{$pt->User->us_apellido_paterno}} {{$pt->User->us_apellido_materno}}</td>
          <td>{{$pt->User->us_email}}</td>
          <td class="fit">
            <a href="{{route('aceptar.solicitud',$pt->id)}}" class="imgAction mr-1 deleteTextdec agregarSol">
              <img src="{{asset('images/userConfirm.svg')}}" width="25px">
            </a>
            <a href="{{route('eliminar.solicitud',$pt->id)}}" class="imgAction deleteTextdec borrarSol">
              <img src="{{asset('images/userDelete.svg')}}" width="25px">
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
@section('js')
  <script>
    $(function(){

      $('td a.agregarSol').on('click',function(e){
        e.preventDefault();
        var trigger = $(this);
        alertify.okBtn('Aceptar').cancelBtn("Salir").confirm("Una vez que acepte la solicitud el usuario podrá utilizar sus formulas y factores.<br><br>"+
                         "¿Está seguro que desea aceptar la solicitud?",function(e){
          if (e) {
            location.href = trigger.attr('href');
          }
        }); // End confirm
      });

      $('td a.borrarSol').on('click',function(e){
        e.preventDefault();
        var trigger = $(this);
        alertify.okBtn('Eliminar').cancelBtn("Salir").confirm("Si elimina la solicitud el usuario deberá enviarla nuevamente.<br><br>"+
                         "¿Está seguro que desea eliminar la solicitud?",function(e){
          if (e) {
            location.href = trigger.attr('href');
          }
        }); // End confirm
      });
    });
  </script>
@endsection
