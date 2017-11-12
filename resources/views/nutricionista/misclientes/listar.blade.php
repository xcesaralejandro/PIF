@extends('layouts.mainAdmin')
@section('title-nav','Nutricionista')
@section('title','Mis clientes')
@section('nav')
@include('nutricionista.misClientes.nav')
@endsection
@section('placeholderBuscar','Buscar') 
@section('content')
@if(count($clientes)!= 0)
<div class="text-center mb-4 mt-3">
  <span class="display-4"><strong>Clientes</strong>
  </span>
</div>
<hr>

<table class="table table-striped  table-hover">
  <thead class="thead-inverse">
    <tr>
      <th>Nombre</th> 
      <th>E-mail</th>
      <th>Accion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clientes as $cliente)
    <tr>
      <td>{{ $cliente->us_nombres }} {{ $cliente->us_apellido_paterno }} {{ $cliente->us_apellido_materno }}</td>
      <td>{{ $cliente->us_email }}</td>
      <td class="fit">

        <a  href=" {{ route('detalle.cliente',$cliente -> id)}}">
          <img class="imgAction mr-1 mb-1" src="{{ asset('images/perfil.svg') }}" width="25px">
        </a>

        <a href="{{route('eliminar.cliente',$cliente->id)}}" class="imgAction deleteTextdec borrarSol">
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
        No tiene clientes.
      </div>
    </div>
@endif
@endsection
@section('js')
<script>
  $(function(){

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
