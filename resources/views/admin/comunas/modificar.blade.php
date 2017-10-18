@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar comunas') 

@section('nav')
<li class="nav-item">
    <a class="nav-link" href="{{ route('comunas.index') }}">
        Listado
    </a>
</li>
@endsection  
@section('placeholderBuscar','Buscar comuna') 

@section('content')
<div class="esconder-agregar">
    @include('admin.comunas.agregar')
</div>
<div class="p-3">
   {{ Form::model($comuna,['route' => ['comunas.update',$comuna->id], 'method'=>'PUT']) }}
<div class="text-center mb-4 mt-3">
    <span class="display-4">Modificar<strong> comuna</strong>
    </span>
</div>
<hr>
<div class="row text-center">
 @include('admin.comunas.form')
 <div class="col-sm-6 offset-sm-3 col-md-5 offset-md-4  col-lg-4 offset-lg-4 col-xl-2 offset-xl-0  mt-4 pt-2   ">
    <button type="submit" class="btn btn-primary fullDiv btn-agregar">
        <div class="row">
            <div class="col-2 text-left"">
                <i class="fa fa-plus" aria-hidden="true"></i>   
            </div>
            <div class="col-8 text-center">
                Modificar                  
            </div>
        </div>
    </button> 
</div>
</div> 

{{ Form::Close() }} 
</div>
@section('js')
<script >
    $(".chosen-select").chosen({no_results_text: "Oops, no taa :'(!"});  
</script>
@endsection
@endsection