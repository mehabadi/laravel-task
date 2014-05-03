<?php
class Project extends Eloquent
{
	protected $table = 'project';
	
	public function tasks(){
		return $this->hasMany('Task');
	}
	
}