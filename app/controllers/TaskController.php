<?php

class TaskController extends BaseController {
	
	public function index(){
	
		$tasks = Task::with('project')->get();
		$projects = Project::all();
		
		return View::make('task.index')->with('tasks', $tasks)->with('projects', $projects);		
	}

	public function create(){		
		$projects = DB::table('project')->orderBy('title', 'asc')->lists('title','id');
		return View::make('task.create')->with('projects', $projects);
	}
	
	public function store(){
		
		$task = new Task; 
		if ($task->validate(Input::all())) {
								
			$task->title = Input::get('title');
			$task->project_id = Input::get('project_id');
			$task->priority = Input::get('priority');
			$task->start_date = date('Y-m-d', strtotime(Input::get('start_date')));
			$task->end_date = date('Y-m-d', strtotime(Input::get('end_date')));
			$task->description = Input::get('description');
			$task->save();
			
			Session::flash('message', 'Successfully created task!');
			return Redirect::to('task');
		}else{
			return Redirect::to('task/create')->withErrors($task->errors())->withInput();
		}
	}	
	
	public function edit($id){
		$projects = DB::table('project')->orderBy('title', 'asc')->lists('title','id');
		$task = Task::with('project')->find($id);
		return View::make('task.edit')->with('projects', $projects)->with('task', $task);
	}
	
	public function update($id){					
		$task = new Task; 
		if ($task->validate(Input::all())) {
		
			$task = Task::find($id);
			$task->title = Input::get('title');
			$task->project_id = Input::get('project_id');
			$task->priority = Input::get('priority');
			$task->start_date = date('Y-m-d', strtotime(Input::get('start_date')));
			$task->end_date = date('Y-m-d', strtotime(Input::get('end_date')));
			$task->description = Input::get('description');
			$task->save();
			
			// redirect
			Session::flash('message', 'Successfully update task	');
			return Redirect::to('task');
		}else{			
			return Redirect::to('task/' . $id . '/edit')->withErrors($task->errors())->withInput();
		}
	}
	
	public function destroy($id){
		$task = Task::find($id);
		$task->delete();
		Session::flash('message', 'Successfully deleted the task');
		return Redirect::to('task');
	}
	
	public function show($id){
		$task = Task::with('project')->find($id);
				
		return View::make('task.show')->with('task', $task);	
	}
	
	public function getTasks(){
	
		$tasks = Task::all();
		// {
			// "id": "293",
			// "title": "This is warning class event with very long title to check how it fits to evet in day view",
			// "url": "http://www.example.com/",
			// "class": "event-warning",
			// "start": "1362938400000",
			// "end":   "1363197686300"
		// },
		$result = array();
		foreach($tasks as $item ){
			$priority = $item->priority;
			switch($priority){
				case 1:
					$priority = 'event-important';
				break;
				case 2:
					$priority = 'event-warning';
				break;
				case 3:
					$priority = 'event-inverse';
				break;
				case 4:
					$priority = 'event-special';
				break;
			}
			$result[] = array(
				"id" => $item->id,
				"title" => $item->title,
				"url" =>  URL::to('task/' . $item->id),
				"class" => $priority,
				"start" => strtotime($item->start_date) * 1000,
				"end" => strtotime($item->end_date) * 1000,
			);
		}
		$ar = array(			
				'success' => 1,
				'result' => $result
			);
		//return $task->toJson();
		return $ar;
	}
}
