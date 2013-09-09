$(document).ready( function(event) {
	// Carga las primeras etiquetas
	traeEtiquetas(1);

	// Cambio del select
	$(document).on('change', '.selectorModulos', function(){
		traeEtiquetas($(this).val());
	});

	function traeEtiquetas(ide){
		$.post("etiquetas", { ide: ide },
	       function(data) {
	         $('.zonaDeEtiquetas').html(data);
	    });
	}


	$(document).on('click', '.guardarEtiqueta', function(){
		var orden = $(this).attr('ordenDeEtiqueta');
		var texto = $('.textoDeEtiqueta').eq(orden).val();
		var ide = $('.textoDeEtiqueta').eq(orden).attr('etiquetaid');

		$.post("guardaetiquetas", { ide: ide, texto:texto },
	       function(data) {
	         console.log(data);
	    });

	});

});