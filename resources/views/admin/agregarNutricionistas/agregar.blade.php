@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Registrar un nuevo nutricionista')
@section('nav')
@include('admin.agregarNutricionistas.nav')
@endsection
@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4"><strong>Crear cuenta</strong> de nutricionista</span>
</div>
<hr>
{!! Form::open(['route' => 'agregarNutricionistas.store', 'method' => 'POST','files'=> true]) !!}
    @include('admin.agregarNutricionistas.form')
    
    <div class="row">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
            <button type="submit" class="btn btn-primary fullDiv">
                <i class="fa fa-user" aria-hidden="true"></i> Registrar nuevo nutricionista
            </button>
        </div>
    </div>
{!! Form::Close() !!}
@endsection

@section('js')
 <script src="{{ asset('js/validacionUsuario.js') }}"></script>
    <script>
        $(function(){
           $(".chosen-select").chosen({
                disable_search_threshold: 1,
                no_results_text: "No hay resultados",
                width: "100%"
            });
        });
    </script>
    <script>
    $(".imagen").fileinput({ 
    uploadAsync: false,
    showUpload: false, 
    showRemove: false,
    showPreview:false});
</script>
@endsection
