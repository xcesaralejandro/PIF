@extends('layouts.mainAdmin')
@section('title-nav','Administrador')
@section('title','Administrar perfil')
@section('content')
<div class="text-center mb-4 mt-3">
    <span class="display-4">Crear <strong>Perfil</strong></span>
</div>
<hr>
<div class="p-3">
    {{ Form::model($perfil,['route' => ['perfil.update',$perfil->id], 'method'=>'PUT', 'files'=>true])}}
    @include('nutricionista.perfil.form')
    <div class="row text-center">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4 mb-5 pl-5 pr-5">
            <button type="submit" class="btn btn-primary col-lg-8">
                <div class="row">
                    <div class="col-2 text-left">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </div>
                    @if(is_null($perfil->pf_descripcion))
                    <div class="col-7 text-center">
                       Crear
                   </div>
                   @else
                   <div class="col-7 text-center">
                    Modificar
                   </div>
                   @endif
               </div>
           </button>
       </div>
   </div>
   {{ Form::Close() }}
</div>
@endsection
@section('js')

<script>
    $(".imagen").fileinput({
        uploadAsync: false,
        showUpload: false,
        showRemove: false,
        showPreview:false});
    $(".chosen-select").chosen({allow_single_deselect: true, disable_search: true, placeholder_text_single: "Seleccione experiencia  ..."});
    $('#descripPerfil').trumbowyg();

</script>

@endsection
