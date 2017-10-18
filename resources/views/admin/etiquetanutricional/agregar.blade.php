@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar etiqueta nutricional') 

@section('nav')
	@include('admin.etiquetanutricional.nav')
@endsection 

@section('placeholderBuscar','Buscar campo') 
@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Agregar<strong> la etiqueta</strong></span>
</div>
<hr>
<div class="p-3">
	{{ Form::Open(['route'=>'etiquetanutricional.store','method'=>'POST','files'=> true]) }}
	    @include('admin.etiquetanutricional.form')

	    <div class="row text-center">
	    	<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
	    		<button type="submit" class="btn btn-primary">
	    			<div class="row">
	    				<div class="col-2 text-left"">
	    					<i class="fa fa-plus" aria-hidden="true"></i>	
	    				</div>
	    				<div class="col-10 text-center">
	    					Agregar etiqueta					
	    				</div>
	    			</div>
	    		</button>
	    	</div>
	    </div>



	{{ Form::Close() }}
</div>
@endsection

@section('js')

<script>
    $(function(){
        $('#descEnfermedad').trumbowyg();
    });
</script>
@endsection