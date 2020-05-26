<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body style="margen:0px; padding: 0px; background-color: #f3f3f3">
	<div style="
	display: block;
	max-width: 728px;
	margin: 0px auto;
	width: 60%;
	">
		<img src="{{url('static/images/logo.png')}}" style="width: 100%; display: block; background-color: #2caaff;">
		
		<div style="
		background-color: #fff;
		padding: 24px;
		" 
		>
			@yield('content')
			

		</div>
	</div>

</body>
</html>