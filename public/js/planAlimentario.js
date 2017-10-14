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

//------------------- AGREGAR ALIMENTO -------------------//
	var btnAgregar         = $('#agregarAlimento');
	var divComida          = $('.fullComida');
	var alimentoEncontrado = $('div.alimentoEncontrado');
	var divComidaSeleccionado;
	divComida.on('click',function(){
		divComidaSeleccionado = $(this);
		if (divComidaSeleccionado.css('opacity') != 1) {
			alertify.success('Ha seleccionado: ' + divComidaSeleccionado.find('.tituloComida').text());
			divComida.css('opacity','0.4');
			divComidaSeleccionado.css('opacity','1');
		}
	});

	btnAgregar.on('click',function(){
		if (divComidaSeleccionado){
			var clonAlmEnc = alimentoEncontrado.clone();
			var xd = clonAlmEnc.find('div.headAlimento').removeClass('hideHeadAlimento').parents('.fullAlimento');
			divComidaSeleccionado.find('div.listadoComida').append(xd);
			// Acá hay que llamar a las funciones que sumarán todo
		}else{
			alertify.error('Debe seleccionar una comida previamente');
		}
	});

//------------------- ELIMINAR ALIMENTO -------------------//
	$('.deleteAlimento').on('click', function(e){
		e.preventDefault();
		var deleteTrigger = $(this);
		var nombreAlimentoBorrado = deleteTrigger.parents('.headAlimento').find('.nombreAlimento').text();
		var deleteAlimentox = deleteTrigger.parents('.fullAlimento').remove();
		if (deleteAlimentox) {
			alertify.success('Se ha eliminado: ' + nombreAlimentoBorrado);
		}else{
			alertify.error('Error al eliminar: ' + nombreAlimentoBorrado);
		}
	});

});// JQuery on load