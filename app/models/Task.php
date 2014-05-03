<?php

class Task extends BaseModel {

    protected $table = 'task';	
	
	protected $rules = array(
			'title'       => 'required|Min:3|Max:80|alpha_dash',
			'project_id'    => 'required|numeric',
			'priority' => 'required|numeric',
			'start_date' => 'required|date|before:end_date',
			'end_date' => 'required|date|after:start_date',
			'description' => ''
		);
	
	/* relation */	
	public function project(){
		return $this->belongsTo('Project');
	}
	
}