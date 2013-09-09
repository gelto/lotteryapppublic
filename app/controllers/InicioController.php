<?php

class InicioController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function inicio()
	{
		if(Sentry::check()){
			$usuario = Sentry::getUser();
			return View::make('inicio')->with('usuariolog', $usuario);
		}
		return View::make('inicio');
	}

	public function preusuario(){

		$codigo = Input::get('codigo');
		$email = Input::get('email');
		
		$num1 = Input::get('num1');
		$num2 = Input::get('num2');
		$num3 = Input::get('num3');
		$num4 = Input::get('num4');
		$num5 = Input::get('num5');


		$rules = array(
	        'codigo' => array('required', 'alpha_num', 'min:5', 'max:5'),
	        'email'  => array('required', 'email'),
	        'num1' => array('required', 'numeric', 'min:1', 'max:25'),
	        'num2' => array('required', 'numeric', 'min:1', 'max:25'),
	        'num3' => array('required', 'numeric', 'min:1', 'max:25'),
	        'num4' => array('required', 'numeric', 'min:1', 'max:25'),
	        'num5' => array('required', 'numeric', 'min:1', 'max:25')
	    );

	    $validation = Validator::make(Input::all(), $rules);

		if(!$validation->fails()){
			// busca que el código haya sido activado
			$codigoDB = Codigo::where('codigoB', '=', $codigo)->where('statusId','=','1')->get();
			// si así fué
			if(isset($codigoDB[0])){
				// busca el próximo sorteo con capacidad para el boleto
				$sorteo = Sorteo::where('statusId','=','1')->get();
				// guarda al preusuario, la jugada, cambia el código a status4 y envía mail
				if(isset($sorteo[0])){
					// PRE
					$preusuarioAux = Preusuario::where('email', "=", $email)->get();
					if(!isset($preusuarioAux[0])){
						$preusuario = new Preusuario();
						$preusuario->email = $email;
						$preusuario->codigovalidacion = $this->generaRand(); // será enviado por mail para validar la cuenta
						$preusuario->statusId = 1;
						$preusuario->save();
					}else{
						$preusuario = $preusuarioAux[0];
					}

					// COD
					$codigoDB[0]->statusId = 4;
					$codigoDB[0]->save();

					// JUG
					$jugada = new Jugada();
					$jugada->preusuario_id = $preusuario->id;
					$jugada->sorteo_id = $sorteo[0]->id;
					$jugada->codigo_id = $codigoDB[0]->id;
					$jugada->num1 = $num1;
					$jugada->num2 = $num2;
					$jugada->num3 = $num3;
					$jugada->num4 = $num4;
					$jugada->num5 = $num5;
					   
					$jugada->save();

					// MAIL
					$data=array();
					$data['idePreusuario'] = $preusuario->id;
					$data['jugada'] = $jugada->id;
					$data['email'] = $preusuario->email;
					$data['token'] = $preusuario->codigovalidacion;
					$data['numeros'] = $num1 . ", " . $num2 . ", " . $num3 . ", " . $num4 . ", " . $num5;

					// busca usuario relacionado
					$userRelacionado = $preusuario->user;
   
					if(isset($userRelacionado)){
						$vista = 'emails.viejopreusuario';
					}else{
						$vista = 'emails.nuevopreusuario';
					}
					
					Mail::queue($vista, $data, function($message) use ($email)
					{
						$message->to($email, 'Saludos')->subject('Bienvenido');
					});
					// MAIL fin

				}
			}else{
				// envía mensaje de vuelva a intentarlo
				return "codigo";
			}
			return "Gracias, tus números juegan para el sorteo del " . $sorteo[0]->fechaFin;
		}else{
			// regresa a inicio con campos llenos :)
			/*Input::flashOnly('codigo', 'email');
			return Redirect::to('/')->withInput();*/
			return "datos";
		}
	}

	public function usuario(){

		$nombre = Input::get('nombre');
		$paterno = Input::get('paterno');
		$materno = Input::get('materno');
		$pass = Input::get('pass');
		$ide = Input::get('ide');
		$miToken = Input::get('miToken');


		$rules = array(
	        'nombre' => array('required'),
	        'paterno'  => array('required'),
	        'materno' => array('required'),
	        'pass' => array('required', 'alpha_num', 'min:1', 'max:15'),
	        'ide' => array('required', 'numeric', 'min:1', 'max:25'),
	        'miToken' => array('required', 'alpha_num')
	    );

	    $validation = Validator::make(Input::all(), $rules);

		if(!$validation->fails()){

			$preusuario = Preusuario::where('id', '=', $ide)->where('codigovalidacion', '=', $miToken)->get();
			// crea el usuario
			try
			{
			    // Let's register a user.
			    $user = Sentry::register(array(
			        'email'    => $preusuario[0]->email,
			        'first_name'    => $nombre,
			        'last_name'    => ($paterno . " " . $materno),
			        'password' => $pass,
			        'preusuario_id' => $preusuario[0]->id,
			    ));

			    // activa
			    $activationCode = $user->getActivationCode();
			    $user->attemptActivation( $activationCode );

			    // crea session
			    Sentry::login($user, false);
			}
			catch (Exception $e)
			{
			    return 'datos';
			}

		}else{
			return "datos";
		}

		return "OK";
	}

	public function generaRand(){
		$vars = array("a","b","c","d","e","f","g","h","i","j","k","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9" );
		$random = $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)];
		$random .= $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)];
		$random .= $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)];
		$random .= $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)];
		$random .= $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)];
		$random .= $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)] . $vars[rand(0, 34)];
		return $random;
	}

}