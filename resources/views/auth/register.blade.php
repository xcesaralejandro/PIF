@extends('layouts.main')
@section('title','Registrar una cuenta')
@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-3">Crear cuenta de usuario <i class="fa fa-user" aria-hidden="true"></i></span>
</div>
<hr>
{!! Form::Open() !!}
    @include('auth.registerForm')
    
    <div class="row">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
            <button type="submit" class="btn btn-primary fullDiv">
                <i class="fa fa-user" aria-hidden="true"></i> Crear usuario
            </button>
        </div>
    </div>
{!! Form::Close() !!}
@endsection

@section('js')
    <script>
        $(function(){
           $(".chosen-select").chosen({
                disable_search_threshold: 1,
                no_results_text: "No hay resultados",
                width: "100%"
            });
        });
    </script>
@endsection
