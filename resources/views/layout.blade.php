<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/bulma.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	
	<script src="{{asset('js/jquery.min.js')}}"></script>
	
	<title>@yield('title')</title>
	
</head>

<body class="has-navbar-fixed-top">

	<div class="container has">

		@yield('content')

	</div>


<script src="{{asset('js/script.js')}}">
	

	</script>
</body>

</html>