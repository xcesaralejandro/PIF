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

sGpo.on('change',function(){
	setCategoria();
});

//---------------- INICIALIZAMOS CHOSEN PARA LOS SELECT ----------------//
	$(".chosen-select").chosen({
                placeholder_text_single: "Esperando selección...",
                disable_search_threshold: 1,
                no_results_text: "No hay resultados",
                width: "100%"
            });
	
function onStart(){	
	setCategoria();
}
});