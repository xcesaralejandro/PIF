$(function(){

  $(".chosen-select").chosen({
  		 placeholder_text_single: "Esperando selección...",
  		 disable_search_threshold: 1,
  		 no_results_text: "No hay resultados",
  		 width: "100%"
   });


  var selectGrupos     = $('select#grupos');
  var selectCategorias = $('select#categorias');

  selectGrupos.on('change',function(){
    var id     = selectGrupos.val();
    var uri    = 'http://frust.cl/' + id + '/getCategorias';
    var method = 'GET';

    $.ajax({
        'url'    : uri,
        'type'   : method,
        'success': function(data){
          selectCategorias.find('option').remove();
          $.each(data,function(indice,valor){
            selectCategorias.append('<option value="' + valor['id'] + '">'+ valor['ct_nombre'] +'</option>');
            selectCategorias.trigger("chosen:updated");
          });
        },'error':function(jqXHR,mensaje,error){
          alertify.error('Hay problemas con la conexión a internet.');
        },timeout:15000
    }); // .Ajax
  });
});// Onload
