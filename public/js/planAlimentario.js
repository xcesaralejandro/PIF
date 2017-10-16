$(function(){
//--------------------- VARIABLES GLOBALES  ---------------------//
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
	headSearch = undefined;
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
	// Esta funcion mete el alimento dentro del container
	btnAgregar.on('click',function(){
		if (divComidaSeleccionado){

	// Comprobamos que el elemento no esté agregado en el divcomida seleccionado
	var codigoNuevo = alimentoEncontrado.find('input.codigoAlimento').val();
	var padreItems = divComidaSeleccionado.find('.listadoComida'); 
	console.log('CODIGO NUEVO ALIMENTO: '+codigoNuevo);
	if (searchElement(padreItems.find('input.codigoAlimento'),codigoNuevo)) {
		alertify.error($('.alim option:selected').text() +' ya se encuentra en ' + divComidaSeleccionado.find('.tituloComida').text());
	}else{
		// Clonamos el elemento y activamos el input para los gramos
		var nAlimento  = $('.alim option:selected').text();
		var clonAlmEnc = alimentoEncontrado.clone();
		var xd         = clonAlmEnc.find('div.nombreAlimento')
						   		   .html(nAlimento)
						   		   .parents('div.headAlimento')
						   		   .removeClass('hideHeadAlimento')
						   		   .parents('.fullAlimento')
						   		   .find('input.gramos_ingeridos')
						   		   .removeAttr('readonly')
						   		   .parents('.fullAlimento');
		
		// Traimos los valores de 100g y los pasamos a atributos data-	
		xd.find('div.bodyAlimento').data( "valoresAlimento", {  'kcal': xd.find('.kcalAlimento').val(),
															    'prot': xd.find('.protAlimento').val(),
															    'lip' : xd.find('.lipAlimento').val(),
															    'ch'  : xd.find('.chAlimento').val()});
		// Agregamos el alimento
		var booleanAction = divComidaSeleccionado.find('div.listadoComida').append(xd);
		
		if (booleanAction) {
			alertify.success("Ha agregado: " + nAlimento);
		}else{
			alertify.error("Error al agregar: " + nAlimento);
		}
	}
		// Acá hay que llamar a las funciones que sumarán todo
}else{
	alertify.error('Debe seleccionar una comida previamente');
}

		// Limpiamos las variables
		nAlimento             = undefined;
		clonAlmEnc            = undefined;
		xd                    = undefined;
		booleanAction         = undefined;
	});

//------------------- ELIMINAR ALIMENTO -------------------//
	containerEventos.on('click','a.deleteAlimento',function(e){
		e.preventDefault();
		var deleteTrigger         = $(this);
		var nombreAlimentoBorrado = deleteTrigger.parents('.headAlimento').find('.nombreAlimento').text();
		alertify
		.okBtn("Aceptar")
		.cancelBtn("Salir")
		.confirm("¿Está seguro de eliminar" + nombreAlimentoBorrado + " ?", function (ev) {
    		if (ev) {
    			var loborrotest = deleteTrigger.parents('.fullAlimento').remove();
    			if (loborrotest) {
    				alertify.success('Ha eliminado: ' + nombreAlimentoBorrado);
    			}else{
    				alertify.error('Error al eliminar: ' + nombreAlimentoBorrado);
    			}
    		}
		});
	});

//------------------- AJUSTAR VALORES SEGUN GRAMOS -------------------//
	var div = $('div.g');
	containerEventos.on('keyup mouseup','input.gramos_ingeridos',function(){
		// Traemos los nuevos gramos
		var nt 	   = $(this);
		var gramos = nt.val();

		// Traemos sus datos originales por 100g
		var obj   = $(this).parents('div.bodyAlimento').data("valoresAlimento");
		var okcal = obj.kcal;
		var oprot = obj.prot;
		var olip  = obj.lip;
		var och   = obj.ch;
		// Calculamos nuevos valores t seteamos
		nt.parents('div.bodyAlimento').find('.kcalAlimento').val(gramos*okcal/100);
		nt.parents('div.bodyAlimento').find('.protAlimento').val(gramos*oprot/100);
		nt.parents('div.bodyAlimento').find('.lipAlimento').val(gramos*olip/100);
		nt.parents('div.bodyAlimento').find('.chAlimento').val(gramos*och/100);
		// Vaciamos las variables
		nt     = undefined;
		gramos = undefined;
		kcal   = undefined;
		prot   = undefined;
		lip    = undefined;
		ch     = undefined;
		okcal  = undefined;
		oprot  = undefined;
		olip   = undefined;
		och    = undefined;
	});

// Mis funciones
function getElement(objJQuery){
	var elementos = [];
	$.each(objJQuery, function(index, item){
		if ($(item).val()) {
			elementos.push($(item).val());
		}
	});
	return elementos;
}

function searchElement(objJQuery,valor){
	var isEquals = 0;
	$.each(objJQuery, function(index, item){
		if ($(item).val().toString() === valor.toString()) {
			isEquals = 1;
			return;
		}
	});
	if (isEquals === 1) {
		return true;
	}else{
		return false;
	}
}

});// JQuery on load
