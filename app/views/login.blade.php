@extends('layouts.login')
@section('content')

{{ Form::open(array('url' => 'login', 'class' => 'form-signin')) }}
<h2 class="form-signin-heading">Please sign in</h2>
@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<p>{{ $errors->first('username') }}</p>
	<p>{{ $errors->first('password') }}</p>
</div>
@endif
<div>	
	{{ Form::text('username', Input::old('username'), array('placeholder' => 'UserName', 'class' => 'form-control')) }}
</div>
<div>	
	{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
</div>
<div>
	{{ Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')) }}	
</div>
{{ Form::close() }}

@stop