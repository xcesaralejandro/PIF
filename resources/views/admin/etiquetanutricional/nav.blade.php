
<li class="nav-item">
	<a class="nav-link" href="{{ route('etiquetanutricional.index') }}">Listado</a>
</li>
@if($en_cont == 0 )
<li class="nav-item">
	<a class="nav-link" href="{{ route('etiquetanutricional.create') }}">Agregar etiqueta</a>
</li>
@else
<li class="nav-item">
	<a class="nav-link" href="{{ route('campoetiquetanutricional.create') }}">Agregar Campos</a>
</li>
@endif

@section('action')
{{ route('etiquetanutricional.index') }}
@endsection
@section('name','nombre')