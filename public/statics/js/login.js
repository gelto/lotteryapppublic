$(document).ready(function() {
	

	$('#ingresar').click(function(event){
		event.preventDefault();
		$('#errores').html("");
		var email = $('#email').val();
		var pass = $('#pass').val();
		var csrf = $('input[name*="_token"]').val();
		var error = "OK";
		

		if(!validateEmail(email)){
			$('#email').addClass('error');
			$('#pass').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Correo o contraseña incorrectos");
			$('#recuperar').html("<a href='../../recuperar'>Recuperar contraseña</a>");
			error = "email";
		}

		if(!validateText(pass)){
			$('#email').addClass('error');
			$('#pass').addClass('error');
			if($('#errores').html() == "") 
				$('#errores').html("Correo o contraseña incorrectos");
			$('#recuperar').html("<a href='../../recuperar'>Recuperar contraseña</a>");
			error = "pass";
		}

		if(error=="OK"){
			ahoraSiLoguea();
		}
	});

	$('#email').click(function(){
		if($('#email').hasClass('error')){
			$('#email').removeClass('error');
		}
		if($('#pass').hasClass('error')){
			$('#pass').removeClass('error');
		}
		$('#recuperar').html("");
		$('#errores').html("");
	});

	$('#pass').click(function(){
		if($('#email').hasClass('error')){
			$('#email').removeClass('error');
		}
		if($('#pass').hasClass('error')){
			$('#pass').removeClass('error');
		}
		$('#recuperar').html("");
		$('#errores').html("");
	});

	function ahoraSiLoguea(){
		var email = $('#email').val();
		var pass = $('#pass').val();
		var csrf = $('input[name*="_token"]').val();
		
		$.post("login", { email: email, pass:pass, _token:csrf  },
			function(data){
				var err=0;
				if(data == "error"){
					if($('#errores').html() == "") 
						$('#errores').html("Correo o contraseña incorrectos");
					$('#email').addClass('error');
					$('#pass').addClass('error');
					$('#recuperar').html("<a href='../../recuperar'>Recuperar contraseña</a>");
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
		$('#email').val("");
		$('#pass').val("");
		setTimeout(function(){
			$('#errores').html("");
			window.location = '../../';
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