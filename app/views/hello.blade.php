<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
	<title>Territorio Virtual</title>
</head>
<body>
	<header>
		<div class="container">
			<img id="logo" class="col-md-2" src="{{'assets/images/logo.png'}}" alt="">
			<nav id="mainMenu" class="col-md-10">
				<ul class="col-md-7">
					<li>{{link_to('/', '', array('id'=>'btnHome'))}}</li>
					<li>{{link_to('/', 'Quienes Somos')}}</li>
					<li>{{link_to('/', 'Nuestro Trabajo')}}</li>
				</ul>
				<img class="col-md-3" src="{{asset('assets/images/comuniquese.png')}}" alt="">
			</nav>
		</div>
		<div id="banner">
			<ul>
				<li style="background: url({{asset('assets/images/bannerPrincipalD.jpg')}})"></li>
			</ul>
		</div>
	</header>
</body>
</html>
