<li class="nav-item">
    <a class="nav-link" href="{{ route('agregarNutricionistas.index') }}">Listado</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('agregarNutricionistas.create') }}">Agregar</a>
</li>
@section('action')
{{ route('agregarNutricionistas.index') }}
@endsection
@section('name','nombre')
