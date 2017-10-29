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
<script src="{{ asset('js/sAlimentos.js') }}"></script>
@endsection
