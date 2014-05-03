@extends('layouts.default')
@section('content')
	<div class="page-header">
	<div class="row">
		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn btn-default" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Year</button>
				<button class="btn btn-warning active" data-calendar-view="month">Month</button>
				<button class="btn btn-warning" data-calendar-view="week">Week</button>
				<button class="btn btn-warning" data-calendar-view="day">Day</button>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-md-8 ">
			<div id="calendar"></div>
		</div>
		<div class="col-md-4">
			<ul id="eventlist" class="nav nav-list"></ul>
		</div>
	</div>	
        <?php /* <h1 class="page-header">Projects</h1>

          <div class="row placeholders">
			@foreach($projects as $project)	
				<div class="col-xs-6 col-sm-3 placeholder">
					<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="200x200" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzBEOEZEQiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojZmZmO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=">
					<h4>{{ $project->title }}</h4>
					<span class="text-muted"></span>
				 </div>
			@endforeach		            
          </div>

          <h2 class="sub-header">Tasks</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Task Title</th>
                  <th>Project</th>
                  <th>Date</th>     
				  <th>Action</th>                 
                </tr>
              </thead>
              <tbody>			  
				@foreach($tasks as $task)				
                <tr>
                  <td>{{ $task->id }}</td>
                  <td><div class="priority no-{{ $task->priority }}"><span></span></div> {{ $task->title }}</td>
                  <td>{{ $task->project->title }}</td>
                  <td>{{ $task->task_date }}</td>   
				  <td>
					<a class="btn btn-small btn-success" href="{{ URL::to('task/' . $task->id) }}">View</a>				
					<a class="btn btn-small btn-info" href="{{ URL::to('task/' . $task->id . '/edit') }}">Edit</a>
					{{ Form::open(array('url' => 'task/' . $task->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				  </td>   				  
                </tr>
                @endforeach				
              </tbody>
            </table>
          </div> */?>       
@stop