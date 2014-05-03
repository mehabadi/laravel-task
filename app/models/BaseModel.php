<?php

class BaseModel extends Eloquent {
	
	protected $rules = array();
	
	protected $errors;
	
	public function validate($input){
		
		$validate = Validator::make($input, $this->rules);
		
		if ($validate->fails())
        {           
            $this->errors = $validate->errors();
            return false;
        }
		return true;		 
	}
	
	public function errors()
    {
        return $this->errors;
    }	
}