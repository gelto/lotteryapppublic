<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// inicio captcha
Route::post('captcha', function()
{
	$captcha = Input::get('captcha');
    $rules =  array('captcha' => array('required', 'captcha'));
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()){
    	return "error";
    }
    return "OK";
});

Route::post('newcaptcha', function()
{
	return HTML::image(Captcha::img(), 'Captcha image');
});

// inicio 
Route::get('/', 'InicioController@inicio');

// inicio posteado (cuando ya registra sus numeros)
Route::post('/preusuario', array('before' => 'csrf' , 'uses' => 'InicioController@preusuario') );

// registro de usuarios (cuando muestra modulo de registro)
Route::get('/registro/{token}/{ide}', 'IngresoController@registro')
->where(array('ide' => '[0-9]+', 'token' => '[a-z0-9]+'));

// inicio usuario (cuando ya registra el usuario)
Route::post('/usuario', array('before' => 'csrf' , 'uses' => 'InicioController@usuario') );

// login
Route::get('/login', 'IngresoController@login');

// inicio usuario (cuando ya registra el usuario)
Route::post('/login', array('before' => 'csrf' , 'uses' => 'IngresoController@logea') );

// logout
Route::get('/logout', function(){
	try{
		Sentry::logout();
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
	    // User wasn't found, should only happen if the user was deleted
	    // when they were already logged in or had a "remember me" cookie set
	    // and they were deleted.
	}
	return Redirect::to('/');
});

// recuperacion de password
Route::get('/recuperacion', 'IngresoController@recuperacion');

// historia de sorteos
Route::get('/historial', 'HistorialController@todoslossorteos');

// historia de sorteos propios
Route::get('/mihistorial', 'HistorialController@tussorteos');

// aviso de privacidad
Route::get('/privacidad', 'SeccionesController@privacidad');


// *********** MAILS *********** //
Route::get('/original/{token}/{jugada}', 'MailController@original')
->where(array('jugada' => '[0-9]+', 'token' => '[a-z0-9]+'));

Route::get('/original2/{token}/{jugada}', 'MailController@original2')
->where(array('jugada' => '[0-9]+', 'token' => '[a-z0-9]+'));

Route::get('/test', function(){
/*
	$email = "luisgnava@gmail.com";
	$preusuario = Preusuario::find(1);
	$data=array('preusuario' => $preusuario);

	$vista = 'emails.testeo';

	Mail::queue($vista, $data, function($message) use ($preusuario)
	{
		$message->to($preusuario->email, 'Saludos')->subject('Bienvenido');
	});
	*/
	return View::make('emails.testeo');
});
// *********** MAILS FIN ******* //

// *********** EXCEPCIONES ******* //
/*
App::missing(function($exception)
{
    return "hubo un error";
});
*/
// *********** EXCEPCIONES FIN ******* //