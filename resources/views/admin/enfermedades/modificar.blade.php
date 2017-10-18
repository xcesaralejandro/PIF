@extends('layouts.mainAdmin') 
@section('title-nav','Administrador')
@section('title','Administrar enfermedades') 

@section('nav')
	@include('admin.enfermedades.nav')
@endsection 

@section('placeholderBuscar','Buscar Enfermedades') @section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Modificar <strong>enfermedades</strong></span>
</div>
<hr>
<div class="p-3">
	{{ Form::model($enfermedad,['route' => ['enfermedades.update',$enfermedad->id], 'method'=>'PUT','files'=> true]) }}
	    @include('admin.enfermedades.form')
	    <div class="row text-center">
	    	<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
	    		<button type="submit" class="btn btn-primary">
	    			<div class="row">
	    				<div class="col-2 text-left"">
	    					<i class="fa fa-plus" aria-hidden="true"></i>	
	    				</div>
	    				<div class="col-10 text-center">
	    					Agregar enfermedad						
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