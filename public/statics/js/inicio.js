$(document).ready(function() {
	var numeros = [];

	$('.r').click(function(event){
		event.preventDefault();
		$.post("newcaptcha",
		function(data){
			$('#captchaImg').html(data);
		});
	});

	$('.numero').click(function(event){
		event.preventDefault();
		if($(this).hasClass('success')){
			if(numeros.length > 0){
				$(this).removeClass('success');
				numeros.pop($(this).html());
			}
		}else{
			if(numeros.length < 5){
				numeros.push($(this).html());
				$(this).addClass('success');
			}
		}
	});

	$('#registrarCodigo').click(function(event){
		event.preventDefault();
		$('#errores').html("");
		var email = $('#email').val();
		var codigo = $('#codigo').val();
		var captcha = $('#captcha').val();
		var mayor = $('#checkbox1:checked');
		var legales = $('#checkbox2:checked');
		var error = "OK";

		

		if(!validateCode(codigo)){
			$('#codigo').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor revisa el código de tu boleto");
			error = "codigo";
		}

		if(!validateEmail(email)){
			$('#email').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor revisa el email que registras");
			error = "email";
		}

		if(!validateCode(captcha)){
			$('#captcha').val("");
			$('#captcha').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor revisa el código de validación");
			error = "captcha";
		}

		if(numeros.length < 5){
			$('#numeros5').addClass('error');
			error = "numeros";
			if($('#errores').html() == "") 
				$('#errores').html("Por favor selecciona 5 números para el siguiente sorteo");
		}else{
			$('#numeros5').removeClass('error');
		}

		if(mayor.length==0){
			$('#checkbox1').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Si no eres mayor de edad no podrás participar");
			error="mayor";
		}

		if(legales.length==0){
			$('#checkbox2').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Por favor lee y acepta términos y condiciones del juego");
			error='legales';
		}

		if(error=="OK"){
			$.post("captcha", { captcha: captcha },
			function(data){
				if(data == "error"){
					$('#captcha').val("");
					$('#captcha').addClass('error');
					if($('#errores').html() == "") 
						$('#errores').html("Por favor revisa el código de validación");
				}else if(data == "OK"){
					ahoraSiGraba();
				}
			});
		}
	});

	$('#email , #captcha, #codigo').focusout(function(){
		if($(this).hasClass('error')){
			$(this).removeClass('error');
		}
	});

	function ahoraSiGraba(){
		var email = $('#email').val();
		var codigo = $('#codigo').val();
		var csrf = $('input[name*="_token"]').val();
		var num1 = numerosPorOrden(1);
		var num2 = numerosPorOrden(2);
		var num3 = numerosPorOrden(3);
		var num4 = numerosPorOrden(4);
		var num5 = numerosPorOrden(5);

		$.post("preusuario", { email: email, codigo:codigo, num1:num1, num2:num2, num3:num3, num4:num4, num5:num5, _token:csrf  },
			function(data){
				if(data == "codigo"){
					if($('#errores').html() == "") 
						$('#errores').html("No se encontró el código que diste de alta");
				}
				if(data == "datos"){
					if($('#errores').html() == "") 
						$('#errores').html("Por favor revisa tus datos");
				}
				if(data != "codigo"  && data != "datos"){
					if($('#errores').html() == "") 
						$('#errores').html(data);
					limpia();
				}
			});

	}

	function numerosPorOrden(orden){
		
		var ordenado = [];
		for(i=0; i<5; i++){
			lugar = 0;
			for(j=0; j<5; j++){
				if(numeros[i] > numeros[j]){
					lugar++;
				}
			}
			ordenado[lugar] = numeros[i];
		}	

		return ordenado[orden-1];
	}

	function limpia(){
		$('#email').val("");
		$('#codigo').val("");
		$('#captcha').val("");
		$('.numero').removeClass('success');
		$('.checkbox').removeClass('checked');
		numeros = [];
		mayor = [];
		legales = [];
		setTimeout(
			function(){$('#errores').html("");
			window.location.reload(true);
		},5000);
	}

});

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function validateCode(code) { 
    var re = /^[a-zA-Z0-9]{5}$/;
    return re.test(code);
} 