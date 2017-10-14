$(function(){
//---------------- INICIALIZAMOS CHOSEN PARA LOS SELECT ----------------//
	$(".chosen-select").chosen({
                disable_search_threshold: 1,
                no_results_text: "No hay resultados",
                width: "100%"
            });
//------------------- DISPLAY - HIDE BUSCAR ALIMENTO -------------------//
var headSearch = $('#displayHeadSearch');
var bodySearch = $('#bodySearch');
var iconSearch = $('#iconDisplay');

headSearch.on('click',function(e){
	e.preventDefault();

	if (bodySearch.css('display') === 'block'){
		// Ocultamos el cuerpo de buscar alimentos
		bodySearch.fadeOut('slow',function(){
			bodySearch.css('display','none');
		});

		// Cambiamos el icono de font Awesome por maximizar
		iconSearch.fadeOut('fast',function(){
			iconSearch.removeClass();
		});
		iconSearch.fadeIn('fast',function(){
			iconSearch.addClass('fa fa-window-maximize');
		});

	}else{
		// Mostramos el cuerpo de buscar alimentos
		bodySearch.fadeIn('slow',function(){
			bodySearch.css('display','block');
		});


		// Mostramos el icono de font Awesome por minimizar
		iconSearch.fadeOut('fast',function(){
			iconSearch.removeClass();
		});
		iconSearch.fadeIn('fast',function(){
			iconSearch.addClass('fa fa-window-minimize');
		});
	}
});

//------------------- ELIMINAR ALIMENTO -------------------//
	$('.deleteAlimento').on('click', function(e){
		e.preventDefault();
		var deleteTrigger = $(this);
		var nombreAlimentoBorrado = deleteTrigger.parents('.headAlimento').find('.nombreAlimento').text();
		deleteTrigger.parents('.fullAlimento').remove();
		alertify.success('Se ha eliminado: ' + nombreAlimentoBorrado);
	});

});// JQuery on load