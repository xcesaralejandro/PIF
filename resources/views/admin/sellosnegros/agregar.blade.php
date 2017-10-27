@extends('layouts.mainAdmin')
@section('title-nav','Administrador')
@section('title','Administrar sellos negros')

@section('nav')
@include('admin.sellosnegros.nav')
@endsection

@section('placeholderBuscar','Buscar sello')

@section('content')
<div class="text-center mb-4 mt-3">
	<span class="display-4">Agregar un <strong>sello negro</strong></span>
</div>
<hr>
{{ Form::Open(['route' => 'sellosnegros.store', 'method'=>'POST', 'files'=>true]) }}
@include('admin.sellosnegros.form')


<div class="row text-center">
	<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
		<button type="submit" class="btn btn-primary">
			<div class="row">
				<div class="col-2 text-left">
					<i class="fa fa-plus" aria-hidden="true"></i>
				</div>
				<div class="col-10 text-center">
					Agregar sello negro
				</div>
			</div>
		</button>
	</div>
</div>
{{ Form::Close() }}
@endsection

@section('js')
<script>
	$(function(){
		$('#descEnfermedad').trumbowyg();
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
