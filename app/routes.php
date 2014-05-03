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


Route::get('/', array('uses' => 'HomeController@loginForm'));

Route::get('login', array('uses' => 'HomeController@loginForm'));

Route::post('login', array('uses' => 'HomeController@login'));

Route::get('logout', array('uses' => 'HomeController@logout'));

// Route::get('task', array('uses' => 'TaskController@dashboard'));
// Route::when('task', array('before' => 'auth'));

Route::group(array('before' => 'auth'), function()
{
  // Route::get('task', array('uses' => 'TaskController@dashboard'));
   
   Route::get('task/getTasks', array('uses' => 'TaskController@getTasks'));
   Route::resource('task', 'TaskController');
   Route::resource('project', 'ProjectController');
});

App::missing(function($exception)
{
	return Response::view('error', array(), 404);
});
