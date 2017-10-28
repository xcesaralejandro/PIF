<li class="nav-item">
    <a class="nav-link" href="{{ route('alimentos.index') }}">Listado</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('alimentos.create') }}">Agregar</a>
</li>
    @section('action')
{{ route('alimentos.index') }}
@endsection
@section('name','nombre')
@section('js')
<script type="text/javascript">
	   $(function(){
    $("#grupos").chosen({no_results_text: "No se ha podido localizar",
								placeholder_text_single: "Seleccione Grupo"}); 
    $("#categorias").chosen({no_results_text: "No se ha podido localizar",
								placeholder_text_single: "Seleccione categoria"}); 

});
</script>
@endsection