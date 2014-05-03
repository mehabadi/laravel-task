<?php

class HomeController extends BaseController {

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
	//$layouts = 'default';

	public function loginForm(){
		return View::make('login');
	}
	
	public function login(){
		
		$rules = array(
			'username' => 'required',
			'password' => 'required|alphaNum|min:3'			
		);
		
		$validate = Validator::make(Input::all(), $rules);
		
		if($validate->fails()){
			return Redirect::to('login')->withErrors($validate)->withInput(Input::except('password'));						
		}else{
			$inputData = array(
				'username' => Input::get('username'),
				'password' => Input::get('password'),
			);
			
			if(Auth::attempt($inputData)){						
				return Redirect::to('task')->withErrors(array('username' => 'Username or password is incorrect'));
			}else{
				return Redirect::to('login')->withErrors(array('username' => 'Username or password is incorrect'));
			}
		}
	}
	
	public function logout(){		
		Auth::logout(); 
		return Redirect::to('login');
	}
}
