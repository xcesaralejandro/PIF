<li class="nav-item ">
    <a class="nav-link" href="{{ route('comunas.index') }}">
		Listado
    </a>
</li>

<li class="nav-item ">
    <a class="btn nav-link text-left">
		agregar
    </a>
</li>

@section('js')
<script >

$('.btn').on('click',function(){
	$('.esconder-agregar').slideToggle();
 	$(".chosen-select").chosen({no_results_text: "Oops, no taa :'(!"});
});
</script>

@endsection