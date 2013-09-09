<?php

class SeccionesController extends BaseController {

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

	public function privacidad()
	{
		if(Sentry::check()){
			$usuario = Sentry::getUser();
			return View::make('privacidad')->with('usuariolog', $usuario);
		}
		return View::make('privacidad');
	}

}