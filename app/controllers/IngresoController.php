<?php

class IngresoController extends BaseController {

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

	public function registro($token, $ide)
	{
		// busca al preusuario
		$preusuario = Preusuario::where('id','=',$ide)->where('codigovalidacion','=', $token)->get();

		if(!isset($preusuario[0])){
			return Redirect::to('/');
		}

		// busca si ya tiene usuario y redirige
		if($preusuario[0]->user){
			return Redirect::to('/login');
		}

		// carga la vista de registro
		return View::make('registro')
		->with('ide', $ide)
		->with('email', $preusuario[0]->email)
		->with('token', $token);
	}

	public function login()
	{
		return 'login';
	}

	public function recuperacion()
	{
		return 'recuperacion';
	}

}