@extends('layouts.main')
@section('title','Registrar una cuenta')
@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4"><strong>Crear cuenta</strong> de usuario</span>
</div>
<hr>
{!! Form::open(['route' => 'register', 'method' => 'POST']) !!}
    @include('auth.Form')

    <div class="row">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
            <button type="submit" class="btn btn-primary fullDiv">
                <i class="fa fa-user" aria-hidden="true"></i> Registrarse
            </button>
        </div>
    </div>

{!! Form::Close() !!}
@endsection

@section('js')
    <script src="{{ asset('js/validacionUsuario.js') }}"></script>
@endsection
