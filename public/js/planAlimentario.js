$(function(){
onStart();
//--------------------- SELECT ON CHANGE  ---------------------//
var sCat   = $('#catSelect');
var sAli   = $('#alim');
// Funcion que llena el grupo de select
var sGpo   = $('#gpoSelect');

function setCategoria(){
	var ssGpo   = $('#gpoSelect option:selected');
	var ssCat   = $('#catSelect');
	var ssAli   = $('#alim');
	var uri    = "/cliente/planes/categorias/" + ssGpo.val();
	var method = "GET";
	
	$.ajax({
		url: uri,
		type: method, 
		success:function(data){
			limpiaSelect(ssCat);
			limpiaSelect(ssAli);

			$.each(data,function(index,value){
				ssCat.append('<option value="' + value +'">' + index +'</option>');
			});
			sCat.trigger("chosen:updated");
		},
		error:function(jqXHR, estado, error){
			alertify.error('Ha ocurrido un error, revise su conexión a internet.');
		},
		complete:function(){
			setAlimentos();
		},
		timeout:15000
	});
}

function setAlimentos(){
	var cat = $('#catSelect');
	var uri    = "/cliente/planes/alimentos/" + parseInt(cat.val());
	var method = "GET";
	$.ajax({
		url: uri,
		type: method, 
		success:function(data){
			limpiaSelect(sAli);
			
			for (var i = 0; i <= data.length - 1; i++) {
				var temp = data[i];
				sAli.append('<option value="' + temp['id'] +'">' + temp['al_nombre'] +'</option>');
				$('#alim option:last').data("alimento", {
					'cod'             : temp['id'],
					'kcal'            : 100,
					'al_gramos'       : temp['al_gramos'],
					'al_proteina'     : temp['al_proteina'],
					'al_lipidos'      : temp['al_lipidos'],
					'al_carbohidratos': temp['al_carbohidratos']
				});
			}
		
		sAli.trigger("chosen:updated");
		},
		error:function(jqXHR, estado, error){
			alertify.error('Ha ocurrido un error, revise su conexión a internet.');
		},
		complete:function(){
			llenarCampos();
		},
		timeout:15000
	});
} 

// Funcion que limpia un select de option
function limpiaSelect(obj){
	obj.find('option').remove().end();
}

// Esta funcion rellena la info del alimento seleccionado en los input correspondientes desde los atributos data

function llenarCampos(){
	var alimento = $('#alim option:selected').data("alimento");

	$('#searchAlim .codigoAlimento').val(alimento.cod);
	$('#searchAlim .gramos_ingeridos').val(alimento.kcal);
	$('#searchAlim .kcalAlimento').val(alimento.al_gramos);
	$('#searchAlim .protAlimento').val(alimento.al_proteina);
	$('#searchAlim .lipAlimento').val(alimento.al_lipidos);
	$('#searchAlim .chAlimento').val(alimento.al_carbohidratos);
}

// ....................  Llamamos a funcione cuando cambien de valor .............................

sGpo.on('change',function(){
	setCategoria();
});

sCat.on('change',function(){
	setAlimentos();
});

sAli.on('change',function(){
	llenarCampos();
});
//--------------------- VARIABLES GLOBALES  ---------------------//
var containerEventos = $('.listadoComida');
//---------------- INICIALIZAMOS CHOSEN PARA LOS SELECT ----------------//
	$(".chosen-select").chosen({
                placeholder_text_single: "Esperando selección...",
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
	// Seleccionar un div de comida
	divComida.on('click',function(){
		divComidaSeleccionado = $(this);
		if (divComidaSeleccionado.css('opacity') != 1) {
			alertify.success('Ha seleccionado: ' + divComidaSeleccionado.find('.tituloComida').text());
			divComida.css({'opacity':'0.7',
						   'box-shadow':'none'});
			divComidaSeleccionado.css({'opacity':'1',
									   'box-shadow':'0px 4px 20px 0px #b9b9b9'});
		}
	});
	// Metemos el alimento dentro del container
	btnAgregar.on('click',function(){
		if (divComidaSeleccionado){

	// Comprobamos que el elemento no esté agregado en el divcomida seleccionado
	var codigoNuevo = alimentoEncontrado.find('input.codigoAlimento').val();
	var padreItems = divComidaSeleccionado.find('.listadoComida'); 

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
			var obtenerAlimentos = divComidaSeleccionado.find('input.codigoAlimento');
			funcionMagica(divComidaSeleccionado);
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
		.confirm("¿Está seguro de eliminar " + nombreAlimentoBorrado + " ?", function (ev) {
    		if (ev) {
    			var loborrotest = deleteTrigger.parents('.fullAlimento').remove();
    			if (loborrotest) {
    				alertify.success('Ha eliminado: ' + nombreAlimentoBorrado);
					//Llamamos a la función que ajusta los totales del div seleccionado
    				funcionMagica(divComidaSeleccionado);
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
		nt.parents('div.bodyAlimento').find('.kcalAlimento').val(parseFloat(gramos*okcal/100).toFixed(2));
		nt.parents('div.bodyAlimento').find('.protAlimento').val(parseFloat(gramos*oprot/100).toFixed(2));
		nt.parents('div.bodyAlimento').find('.lipAlimento').val(parseFloat(gramos*olip/100).toFixed(2));
		nt.parents('div.bodyAlimento').find('.chAlimento').val(parseFloat(gramos*och/100).toFixed(2));

		//Llamamos a la función que ajusta los totales del div seleccionado
    	funcionMagica(divComidaSeleccionado);

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

// MIS FUNCIONES ///////////////////////////////////////////////////////////////////////////////////////////
//Acá agregamos todas las funciones que queremos lanzar cuando recien se cargue la pagina
function onStart(){
	cuantosGramos();
	kcalComida();
	setCategoria();
	setAlimentos();
}

// Esta función recibe una seleccion que podria tener varios objetos jquery y trae los valores
// correspondientes a todas sus selecciones, la devolución es un array con los elementos.
function getElement(objJQuery){
	var elementos = [];
	$.each(objJQuery, function(index, item){
		if ($(item).val()) {
			elementos.push($(item).val());
		}
	});
	return elementos;
}


// Esta función recibe una seleccion que podria tener varios objetos jquery y trae los valores
// correspondientes a todas sus selecciones, la devolución es la suma de todos los elementos encontrados.
function sumElement(objJQuery){
	var sumaTemp = 0;
	$.each(objJQuery, function(index, item){
		if ($(item).val()) {
			sumaTemp += parseFloat($(item).val());
		}
	});
	return sumaTemp;
}

// Esta función recibe un objeto jquery con los elementos previamente seleccionados y un valor,
// posteriormente busca en todos los items seleccionados del objeto jquery el valor indicado.
// Si el valor es encontrado devuelve true
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

//Esta es la función suprema que setea los totales de LIP PROT CH Kcal y además descuenta las kcal
function funcionMagica(divSeleccionado){
	// sumamos y seteamos las calorias en el respectivo div
	var totalKcalCom   = parseInt(divSeleccionado.find('strong.kcalComida').text());
	var allKcal        = divSeleccionado.find('input.kcalAlimento');
	var sumaKcal       = parseInt(sumElement(allKcal));
	var textoTotalKcal = divSeleccionado.find('strong.Kcal');
	
	var diffKcal = totalKcalCom - sumaKcal;

	textoTotalKcal.text(sumaKcal);
	if (totalKcalCom < sumaKcal) {
		alertify.okBtn("Entendido !").alert('Haz excedido las ' 
										   + totalKcalCom
										   +' Kcal para ' 
									       + divSeleccionado.find('.tituloComida').text()
									       + ', reduce la cantidad de gramos a ingerir para disminuir '
									       + diffKcal * -1
									       + ' Kcal o no podras registrar el plan alimentario.');
	}
	// Sumamos y seteamos las proteinas
	var allProt  = divSeleccionado.find('input.protAlimento');
	var sumaProt = 	sumElement(allProt);
	divSeleccionado.find('strong.PROT').text(parseFloat(sumaProt).toFixed(2));
	
	//Sumamos y seteamos los lípidos
	var allLip   = divSeleccionado.find('input.lipAlimento');
	var sumaLip  = 	sumElement(allLip);
	divSeleccionado.find('strong.LIP').text(parseFloat(sumaLip).toFixed(2));
	
	//Sumamos y seteamos los carbohidratos
	var allCh    = divSeleccionado.find('input.chAlimento');
	var sumaCh   = 	sumElement(allCh);
	divSeleccionado.find('strong.CH').text(parseFloat(sumaCh).toFixed(2));

	finalComidas();
	kcalComida();
	pintandoTotal(divSeleccionado);
	habilitaGuardar();
}

// Esta hermosa función suma el total de todas las comidas, PROT, LIP y CH para el total
function finalComidas(){
	var finalKcal = 0;
	var finalProt = 0;
	var finalLip  = 0;
	var finalCh   = 0;

	$.each($('.fullComida'), function(index,value){
		finalKcal += parseFloat($(value).find('strong.Kcal').text());
		finalProt += parseFloat($(value).find('strong.PROT').text());
		finalLip  += parseFloat($(value).find('strong.LIP').text());
		finalCh   += parseFloat($(value).find('strong.CH').text());
	});
	var barraTotal = $('.totalPlan');
	barraTotal.find('.finalKcal').text(finalKcal);
	barraTotal.find('.finalPROT').text(finalProt.toFixed(2));
	barraTotal.find('.finalLIP').text(finalLip.toFixed(2));
	barraTotal.find('.finalCH').text(finalCh.toFixed(2));
}

// Esta funcion calcula y setea los gramos que necesitará el plan, además de pasar el VCT al final
function cuantosGramos(){
	var barraReq = $('.totalRequerimientos');
	var kcalNec  = parseInt($('.vct').text());
	barraReq.find('.finalKcal').text(kcalNec);

	// Traemos los % 
	var pjProt = parseInt($('.pjPROT').text());
	var pjLip  = parseInt($('.pjLIP').text());
	var pjCh   = parseInt($('.pjCH').text());

	// Proteinas
	var gProt = pjProt * kcalNec / 100;
	gProt = gProt / 4;
	barraReq.find('.finalPROT').text(gProt.toFixed(2));

	// Lipidos
	var gLip = pjLip * kcalNec / 100;
	gLip = gLip / 9;
	barraReq.find('.finalLIP').text(gLip.toFixed(2));

	// Carbohidratos
	var gCh = pjCh * kcalNec / 100;
	gCh = gCh / 4;
	barraReq.find('.finalCH').text(gCh.toFixed(2));

	//Limpiamos las variables
	barraReq = undefined;
	kcalNec  = undefined;
	pjProt   = undefined;
	pjLip    = undefined;
	pjCh     = undefined;

}

// Esta funcion carga las kcal que se necesitan comer para cada comida
function kcalComida(){
	var vct        = parseInt($('.vct').text());
	var pDesayuno  = parseInt($('.pDesayuno').text()); 
	var pColacion1 = parseInt($('.pColacion1').text()); 
	var pAlmuerzo  = parseInt($('.pAlmuerzo').text()); 
	var pColacion2 = parseInt($('.pColacion2').text()); 
	var pOnce      = parseInt($('.pOnce').text()); 
	var pCena      = parseInt($('.pCena').text()); 

	// Seteamos los valores
	$('.kcalDesayuno').text(parseInt(pDesayuno * vct / 100));
	$('.kcalColacion1').text(parseInt(pColacion1 * vct / 100));
	$('.kcalAlmuerzo').text(parseInt(pAlmuerzo * vct / 100));
	$('.kcalColacion2').text(parseInt(pColacion2 * vct / 100));
	$('.kcalOnce').text(parseInt(pOnce * vct / 100));
	$('.kcalCena').text(parseInt(pCena * vct / 100)); 

	//Limpiamos la basurita
	vct        = undefined;
	pDesayuno  = undefined;
	pColacion1 = undefined;
	pAlmuerzo  = undefined;
	pColacion2 = undefined;
	pOnce      = undefined;
	pCena      = undefined;
}

// Esta funcion solo cambia el color del total del plan para que el user lo pille más facil
function pintandoTotal(divComidaSeleccionado){
	var finalKcal    = parseInt($('div.totalPlan .finalKcal').text()); 
	var finalPROT    = parseFloat($('.finalPROT').text()).toFixed(2);
	var finalLIP     = parseFloat($('.finalLIP').text()).toFixed(2);
	var finalCH      = parseFloat($('.finalCH').text()).toFixed(2);
	var requerimKcal = parseInt($('div.totalRequerimientos .finalKcal').text()); 
	var requerimPROT = parseFloat($('div.totalRequerimientos .finalPROT').text()).toFixed(2);
	var requerimLIP  = parseFloat($('div.totalRequerimientos .finalLIP').text()).toFixed(2);
	var requerimCH   = parseFloat($('div.totalRequerimientos .finalCH').text()).toFixed(2);

	// Pintan2 las kcal 
	if (finalKcal > requerimKcal + 100 || finalKcal < requerimKcal - 100) {
		$('div.totalPlan .finalKcal').css('color','#F6171D');
	}

	if (finalKcal > requerimKcal && finalKcal < requerimKcal + 100 || 
		finalKcal > requerimKcal - 100 && finalKcal < requerimKcal - 20) {
		$('div.totalPlan .finalKcal').css('color','#FF7509');
	}

	if (finalKcal>= requerimKcal - 10 && finalKcal <= requerimKcal) {
		$('div.totalPlan .finalKcal').css('color','#28B921');
	}

	// Pintan2 las proteinas
	if (finalPROT > (Number(requerimPROT) + Number(15)) || finalPROT < requerimPROT - 15) {
		$('div.totalPlan .finalPROT').css('color','#F6171D');
	}

	if (Number(finalPROT) > Number(requerimPROT) && Number(finalPROT) < (Number(requerimPROT) + Number(15)) || 
		Number(finalPROT) > (Number(requerimPROT) - 15) && Number(finalPROT) <= (Number(requerimPROT) - 1)) {
		$('div.totalPlan .finalPROT').css('color','#FF7509');
	}

	if (Number(finalPROT) >= (Number(requerimPROT)) - 1 && Number(finalPROT) < Number(requerimPROT) + 1 ) {
		$('div.totalPlan .finalPROT').css('color','#28B921');
	}

	//Pintan2 lipidos
	if (finalLIP > (Number(requerimLIP) + Number(15)) || finalLIP < requerimLIP - 15) {
		$('div.totalPlan .finalLIP').css('color','#F6171D');
	}

	if (Number(finalLIP) > Number(requerimLIP) && Number(finalLIP) < (Number(requerimLIP) + Number(15)) || 
		Number(finalLIP) > (Number(requerimLIP) - 15) && Number(finalLIP) <= (Number(requerimLIP) - 1)) {
		$('div.totalPlan .finalLIP').css('color','#FF7509');
	}

	if (Number(finalLIP) >= (Number(requerimLIP)) - 1 && Number(finalLIP) < Number(requerimLIP) + 1 ) {
		$('div.totalPlan .finalLIP').css('color','#28B921');
	}

	//Pintan2 carbohidratos
	if (finalCH > (Number(requerimCH) + Number(15)) || finalCH < requerimCH - 15) {
		$('div.totalPlan .finalCH').css('color','#F6171D');
	}

	if (Number(finalCH) > Number(requerimCH) && Number(finalCH) < (Number(requerimCH) + Number(15)) || 
		Number(finalCH) > (Number(requerimCH) - 15) && Number(finalCH) <= (Number(requerimCH) - 1)) {
		$('div.totalPlan .finalCH').css('color','#FF7509');
	}

	if (Number(finalCH) >= (Number(requerimCH)) - 1 && Number(finalCH) < Number(requerimCH) + 1 ) {
		$('div.totalPlan .finalCH').css('color','#28B921');
	}
}

function habilitaGuardar(){
	var kcalColor = $('div.totalPlan .finalKcal').css('color');
	var protColor = $('div.totalPlan .finalPROT').css('color');
	var lipColor  = $('div.totalPlan .finalLIP').css('color');
	var chColor   = $('div.totalPlan .finalCH').css('color');

	if (kcalColor.toString() === 'rgb(40, 185, 33)' &&
		protColor.toString() === 'rgb(40, 185, 33)' &&
		lipColor.toString() === 'rgb(40, 185, 33)' &&
		chColor.toString() === 'rgb(40, 185, 33)') {

		alertify.okBtn('Genial !').alert('El plan alimentario ya cumple con tus requisitos! Asignale un nombre y guardalo para utilizarlo más tarde.');
		$('#btnGuardar').css('display','block');
	}else{
		$('#btnGuardar').css('display','none');
	}
}

});// JQuery on load
