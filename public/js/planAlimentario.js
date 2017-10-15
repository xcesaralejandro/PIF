$(function(){
//--------------------- CONTAINER PARA LOS EVENTOS ---------------------//
var containerEventos = $('.listadoComida');
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
		bodySearch.hide('fast',function(){
			bodySearch.css('display','none');
		});

		// Cambiamos el icono de font Awesome por maximizar
			iconSearch.removeClass().addClass('fa fa-window-maximize');
	}else{
		// Mostramos el cuerpo de buscar alimentos
		bodySearch.show('fast',function(){
			bodySearch.css('display','block');
		});
		// Cambiamos el icono de font Awesome por minimizar
		iconSearch.removeClass().addClass('fa fa-window-minimize');
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
			divComida.css('opacity','0.7');
			divComidaSeleccionado.css('opacity','1');
		}
	});

	btnAgregar.on('click',function(){
		if (divComidaSeleccionado){
			var nAlimento = $('.alim option:selected').text();
			var clonAlmEnc = alimentoEncontrado.clone();
			var xd = clonAlmEnc.find('div.nombreAlimento')
							   .html(nAlimento)
							   .parents('div.headAlimento')
							   .removeClass('hideHeadAlimento')
							   .parents('.fullAlimento');
			
			// divComidaSeleccionado.find('div.listadoComida').append(xd);
			var booleanAction = divComidaSeleccionado.find('div.listadoComida').append(xd);
			if (booleanAction) {
				alertify.success("Ha agregado: " + nAlimento);
			}else{
				alertify.error("Error al agregar: " + nAlimento);
			}

			// Acá hay que llamar a las funciones que sumarán todo
		}else{
			alertify.error('Debe seleccionar una comida previamente');
		}
	});

//------------------- ELIMINAR ALIMENTO -------------------//
	containerEventos.on('click','a.deleteAlimento',function(e){
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