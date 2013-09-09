$(document).ready(function() {
	

	$('#registrar').click(function(event){
		event.preventDefault();
		$('#errores').html("");
		var nombres = $('#nombre').val();
		var paterno = $('#paterno').val();
		var materno = $('#materno').val();
		var pass1 = $('#pass1').val();
		var pass2 = $('#pass2').val();
		var error = "OK";
		var mayor = $('#checkbox1:checked');
		var legales = $('#checkbox2:checked');

		

		if(!validateText(nombres)){
			$('#nombre').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor revisa el nombre");
			error = "nombre";
		}

		if(!validateText(paterno)){
			$('#paterno').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor revisa el apellido paterno");
			error = "paterno";
		}

		if(!validateText(materno)){
			$('#materno').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor revisa el apellido materno");
			error = "materno";
		}

		if(!validateText(pass1)){
			$('#pass1').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor revisa la contraseña");
			error = "pass1";
		}

		if(!validateText(pass2)){
			$('#pass2').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor revisa la confirmación de contraseña");
			error = "pass2";
		}

		if(validateText(pass1) && validateText(pass2)){
			if(pass1 != pass2){
				$('#pass1').addClass('error');
				$('#pass2').addClass('error');
				if($('#errores').html() == "") 
					$('#errores').html("Por favor revisa que coincidan las contraseñas");
				error = "passwords";
			}
		}

		if(mayor.length==0){
			$('#checkbox1').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Si no eres mayor de edad no podrás participar");
			error='mayor';
		}

		if(legales.length==0){
			$('#checkbox2').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor lee y acepta términos y condiciones del juego");
			error='legales';
		}


		if(error=="OK"){
			ahoraSiGraba();
		}
	});

	$('#nombre, #paterno, #materno, #pass1, #pass2, #checkbox1, #checkbox2').focusout(function(){
		if($(this).hasClass('error')){
			$(this).removeClass('error');
		}
	});

	function ahoraSiGraba(){
		var nombre = $('#nombre').val();
		var paterno = $('#paterno').val();
		var materno = $('#materno').val();
		var pass = $('#pass1').val();
		var miToken = $('#mitoken').val();
		var ide = $('#ide').val();
		var csrf = $('input[name*="_token"]').val();
		
		$.post("../../usuario", { nombre: nombre, paterno:paterno, materno:materno, pass:pass, miToken:miToken, ide:ide, _token:csrf  },
			function(data){
				var err=0;
				if(data == "nombre"){
					if($('#errores').html() == "") 
						$('#errores').html("No se encontró el código que diste de alta");
					err=1;
				}
				if(data == "paterno"){
					if($('#errores').html() == "") 
						$('#errores').html("Por favor revisa tus datos");
					err=1;
				}
				if(data == "materno"){
					if($('#errores').html() == "") 
						$('#errores').html("Por favor revisa tus datos");
					err=1;
				}
				if(data == "pass"){
					if($('#errores').html() == "") 
						$('#errores').html("Por favor revisa tus datos");
					err=1;
				}
				if(data == "datos"){
					if($('#errores').html() == "") 
						$('#errores').html("Por favor revisa tus datos");
					err=1;
				}
				if(err==0){
					if($('#errores').html() == "") 
						$('#errores').html("Gracias por registrarte con nosotros. Ahora serás redirigido a la información del siguiente sorteo. <br>¡Suerte!");
					limpia();
				}
			});

	}

	function limpia(){
		$('#nombre').val("");
		$('#paterno').val("");
		$('#materno').val("");
		$('#pass1').val("");
		$('#pass2').val("");
		$('.checkbox').removeClass('checked');
		mayor = [];
		legales = [];
		setTimeout(function(){
			$('#errores').html("");
			window.location = '../../siguiente';
		},5000);
	}

});

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function validateText(code) { 
    var re = /^[áéíóúÁÉÍÓÚa-zA-Z0-9\d\s]+$/;
    return re.test(code);
} 