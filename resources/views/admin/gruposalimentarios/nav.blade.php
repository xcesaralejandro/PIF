<li class="nav-item">
    <a class="nav-link" href="{{ route('gruposalimentarios.index') }}">
		Listado
    </a>
</li>

<li class="nav-item">
    <a class="btn  nav-link text-left">
		Agregar
    </a>
</li>

@section('js')
<script >

$('.btn').on('click',function(){
	$('.esconder-agregar').slideToggle();

})
	
</script>

@endsection