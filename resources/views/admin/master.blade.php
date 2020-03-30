<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta name="routeName" content="{{ Route::currentRouteName()}}">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{{url('/static/css/admin.css?v='.time())}}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<div class="col1">@include('admin.sidebar')</div>
		<div class="col2"></div>
	</div>

</body>
</html>