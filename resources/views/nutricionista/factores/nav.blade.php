<li class="nav-item">
    <a class="btn btn-agregar">
		Agregar
    </a>
</li>

@section('js')
<script >

$('.btn-agregar').on('click',function(){
	$('.esconder-agregar').slideToggle();
})
	
</script>

@endsection