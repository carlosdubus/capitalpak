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

Route::get('/', function()
{
	return View::make('index');
});

Route::post('/',function(){
	Mail::send('emails.form', $_POST, function($message)
	{
	    $message->to('gj.cocco@gmail.com')->subject('[capitalpak] Nueva solicitud');
	});
	return Redirect::to('/');
});

Route::get('/gracias', function()
{
	return View::make('gracias');
});

