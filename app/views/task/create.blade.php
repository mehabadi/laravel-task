@extends('layouts.entry')
@section('content')

<h1 class="page-header">Create Task</h1>
@if($errors->has())
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
{{ HTML::ul($errors->all()) }}
</div>
@endif

{{ Form::open(array('url' => 'task')) }}

<div class="form-group col-sm-6 col-md-6">
	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
</div>

<div class="form-group col-sm-6 col-md-6">
	{{ Form::label('project_id', 'Project') }}
	{{ Form::select('project_id', $projects, null , array('class' => 'form-control')) }}	
</div>

<div class="form-group col-sm-6 col-md-6">
	{{ Form::label('start_date', 'Start Date') }}
	{{ Form::text('start_date', Input::old('start_date'), array('class' => 'form-control')) }}	
</div>

<div class="form-group col-sm-6 col-md-6">
	{{ Form::label('end_date', 'End Date') }}
	{{ Form::text('end_date', Input::old('end_date'), array('class' => 'form-control')) }}	
</div>

<div class="form-group col-sm-6 col-md-6">
	{{ Form::label('priority', 'Priority') }}
	{{ Form::select('priority', array('1' => 'Select Priority', '1' => 'Priority 1', '2' => 'Priority 2', '3' => 'Priority 3', '4' => 'Priority 4'), null , array('class' => 'form-control')) }}	
</div>

<div class="form-group col-sm-12 col-md-12">
	{{ Form::label('description', 'Description') }}
	{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}	
</div>
<div class="form-group  col-sm-12 col-md-12">
	{{ Form::submit('Create Task', array('class' => 'btn btn-primary btn-block')) }}
</div>
	
{{ Form::close() }} 	       
@stop