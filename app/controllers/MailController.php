<?php

class MailController extends BaseController {

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

	public function original($token, $jugada)
	{
		// busca al preusuario o lo redirige
		$preusuario = Preusuario::where('codigovalidacion', '=', $token)->get();
		$jugada = Jugada::find($jugada);
		if(!isset($preusuario[0])){
			return Redirect::to('/');
		}elseif($jugada->preusuario->id != $preusuario[0]->id){
			return Redirect::to('/');
		}

		// busca si tiene usuario y lo redirige
		$usuario = $preusuario[0]->user;
		if(isset($usuario->id)){
			return Redirect::to('/');
		}

		$numeros = $jugada->num1 . ", " . $jugada->num2 . ", " . $jugada->num3 . ", " . $jugada->num4 . ", " . $jugada->num5;
		// muestra mensaje
		return View::make('emails.nuevopreusuario')
		->with('token', $token)
		->with('jugada', $jugada->id)
		->with('idePreusuario', $preusuario[0]->id)
		->with('email', $preusuario[0]->email)
		->with('numeros', $numeros);
	}

	public function original2($token, $jugada)
	{
		// busca al preusuario o lo redirige
		$preusuario = Preusuario::where('codigovalidacion', '=', $token)->get();
		$jugada = Jugada::find($jugada);
		if(!isset($preusuario[0])){
			return Redirect::to('/');
		}elseif($jugada->preusuario->id != $preusuario[0]->id){
			return Redirect::to('/');
		}

		
		$numeros = $jugada->num1 . ", " . $jugada->num2 . ", " . $jugada->num3 . ", " . $jugada->num4 . ", " . $jugada->num5;
		// muestra mensaje
		return View::make('emails.viejopreusuario')
		->with('token', $token)
		->with('jugada', $jugada->id)
		->with('idePreusuario', $preusuario[0]->id)
		->with('email', $preusuario[0]->email)
		->with('numeros', $numeros);
	}

	public function jugada(){
		return "jugada";
	}

	public function recuperar(){
		return "contraseña";
	}
	

}