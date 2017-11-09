<li class="nav-item ">
    <a class="nav-link" href="{{ route('comunas.index') }}">
		Listado
    </a>
</li>

    @section('action')
{{ route('comunas.index') }}
@endsection
@section('name','nombre')