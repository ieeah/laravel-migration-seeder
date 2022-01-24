<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>Agenzia Viaggi</title>
</head>
<body>
	@include('partials.header')
	
	<main>
		@yield('content')
	</main>
	
	@include('partials.footer')
</body>
</html>