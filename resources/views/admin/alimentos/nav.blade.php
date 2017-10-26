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
<script >

    $(".chosen-select").chosen({no_results_text: "No se ha podido localizar",
								placeholder_text_single: "Seleccione Grupo"}); 
        $(".chosen-select-cat").chosen({no_results_text: "No se ha podido localizar",
								placeholder_text_single: "Seleccione categoria"}); 
</script>

@endsection