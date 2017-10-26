<li class="nav-item ">
    <a class="nav-link" href="{{ route('comunas.index') }}">
		Listado
    </a>
</li>

@section('js')
<script >
 	$(".chosen-select").chosen({no_results_text: "No se ha podido localizar",	placeholder_text_single: "Seleccione una region"});
</script>

@endsection