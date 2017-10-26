<li class="nav-item">
	<a class="nav-link" href="{{ route('enfermedades.index') }}">Listado</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('enfermedades.create') }}">Agregar</a>
</li>

@section('action')
{{ route('enfermedades.index') }}
@endsection
@section('name','nombre')