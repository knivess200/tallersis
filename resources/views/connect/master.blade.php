<!DOCTYPE html>
<html>
<head>
	<title>MyCMS - @yield('title')</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="{{url('static/css/connect.css?v='.time()) }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/86141630ad.js" crossorigin="anonymous"></script>


</head>
<body>
		


		


		@section('content')
		Holamundo
		@show

</body>
</html>