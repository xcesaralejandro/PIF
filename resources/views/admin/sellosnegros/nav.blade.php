<li class="nav-item">
    <a class="nav-link" href="{{ route('sellosnegros.index') }}">Listado</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('sellosnegros.create') }}">Agregar</a>
</li>
@section('action')
{{ route('sellosnegros.index') }}
@endsection
@section('name','nombre')