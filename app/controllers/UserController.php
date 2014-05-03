<?php

class UserController extends BaseController{
	
	/**
     * Show the profile for the given user.
     */
	 
	protected $layout = 'layout';
	
	public function showProfile($id){
		//$user = User::find($id);
		return 'user.profile'. $user;
		return View::make('user.profile', array('user' => $user));
	}
	
	public function loginTest(){
		
		return 'loged in' . Route::currentRouteAction();;
	}
}