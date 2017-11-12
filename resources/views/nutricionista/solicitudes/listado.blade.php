@extends('layouts.mainAdmin')
@section('title-nav','Personas que desean trabajar contigo')
@section('title','Personas que desean trabajar contigo')
<style type="text/css">
    form#buscateesta{
        display: none;
    }

</style>
@section('content')
@if(count($pts)!= 0)
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
@else
<div class="fullDiv text-center pb-4">
      <div style="font-size: 17rem;">
        <i class="fa fa-frown-o" aria-hidden="true"></i>
      </div>
      <div class="display-4">
        Usted no tiene solicitudes pendientes.
      </div>
    </div>
@endif
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
