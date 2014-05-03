<!doctype html>
<html>
<head>
	@include('includes.head')
<style>
/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}


/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
.priority{
background-image: url({{ URL::to('/') }}/assets/17367d5799ea670482788731a03630bb.png);
width: 21px;
height: 21px;
float: left;
}
.priority.no-1{background-position: 0 -820px;}
.priority.no-2{background-position: 0 -798px;}
.priority.no-3{background-position: 0 -776px;}
.priority.no-4{background-position: 0 -754px;}

</style>
<link href="{{ URL::to('/') }}/assets/datepicker.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">

	
		@include('includes.header')	

	<div id="main" class="row">
		
		<!-- sidebar content -->
		<div id="sidebar" class="col-sm-3 col-md-2 sidebar">
			@include('includes.sidebar')
		</div>

		<!-- main content -->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">			
			@if (Session::has('message'))
				<div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif					
			@yield('content')
		</div>

	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/assets/underscore-min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/assets/calendar.js"></script>	
    <script type="text/javascript">
	var options = {
		events_source: "{{ URL::to('/task/getTasks') }}",
		tmpl_path: "{{ URL::to('/') }}/assets/tmpls/",
		view: 'month',
		
		onAfterEventsLoad: function(events) {
			if(!events) {
				return;
			}
			var list = $('#eventlist');
			list.html('');

			$.each(events, function(key, val) {
				$(document.createElement('li'))
					.html('<a href="' + val.url + '">' + val.title + '</a>')
					.appendTo(list);
			});
		},
		onAfterViewLoad: function(view) {
			$('.page-header h3').text(this.getTitle());
			$('.btn-group button').removeClass('active');
			$('button[data-calendar-view="' + view + '"]').addClass('active');
		},
		classes: {
			months: {
				general: 'label'
			}
		}
	};
	
 var calendar = $("#calendar").calendar(options);
    </script>
	<script type="text/javascript" src="{{ URL::to('/') }}/assets/app.js"></script>
</body>
</html>