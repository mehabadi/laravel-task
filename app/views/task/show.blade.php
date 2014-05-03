@extends('layouts.default')
@section('content')
<h1>Showing {{ $task->title }}</h1>

	<div class="jumbotron text-center">
		<h2><div class="priority no-{{ $task->priority }}"><span></span></div> {{ $task->title }}</h2>
		<p>
			<strong>Project:</strong> {{ $task->project->title }}<br>
			<strong>Date:</strong> {{ $task->task_date }}<br>
			<strong>Description:</strong> <br>
			{{ $task->description }}
		</p>			
		<a class="btn btn-small btn-success pull-right" href="{{ URL::to('task/' . $task->id . '/edit') }}">Edit</a>
		{{ Form::open(array('url' => 'task/' . $task->id, 'class' => 'pull-right')) }}
		{{ Form::hidden('_method', 'DELETE') }}
		{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
		{{ Form::close() }}
	</div>
@stop