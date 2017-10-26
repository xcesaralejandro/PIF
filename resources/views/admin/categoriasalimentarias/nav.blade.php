<li class="nav-item ">
    <a class="nav-link" href="{{ route('categoriasalimentarias.index') }}">
		Listado
    </a>
</li>

 @section('action')
{{ route('categoriasalimentarias.index') }}
@endsection
@section('name','nombre')
@section('js')
<script >
 	$(".chosen-select").chosen({no_results_text: "No se ha podido localizar!",placeholder_text_single: "Seleccione un grupo"}); 
</script>
@endsection
