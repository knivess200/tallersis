<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title') - Tallersis</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta name="routeName" content="{{ Route::currentRouteName()}}">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	
	<link rel="stylesheet" type="text/css" href="{{url('/static/css/admin.css?v='.time())}}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/86141630ad.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


	<script src="{{ url('/static/libs/ckeditor/ckeditor.js')}}"></script>
	<script src="{{ url('/static/js/admin.js?v='.time())}}"></script>

<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip()

	});
</script>
</head>
<body>
	<div class="wrapper">
		<div class="col1">@include('admin.sidebar')</div>
		<div class="col2">
			<nav class="navbar navbar-expand-lg shadow">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="{{url('/admin')}}" class="nav-link">
								<i class="fas fa-home"></i> Dashboard</a>
							
						</li>
						
					</ul>
					
				</div>
			</nav>
			<div class="page">

				<div class="container-fluid">
					<nav aria-label="breadcrumb shadow">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="{{url('/admin')}}">
								<i class="fas fa-home"></i> Dashboard</a>
							</li>
							@section('breadcrumb')
							@show							
						</ol>
					</nav>					
				</div>

				@if(Session::has('message'))
					<div class="container-fluid">
					<div class="mtop16 alert alert-{{ Session::get('typealert') }}" style="display:block; margin-bottom: 16px;">
						{{ Session::get('message') }}
						@if ($errors->any())
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }} </li>
							@endforeach
						</ul>
						@endif
						<script>
							$('.alert').slideDown();
							setTimeout(function(){ $('.alert').slideUp(); }, 10000);
						</script>
					</div>
					</div>
				@endif

				@section('content')
				@show
			</div>
		</div>
	</div>

</body>
</html>