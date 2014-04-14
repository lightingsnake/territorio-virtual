<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield ('title')</title>
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/global.css')}}">
</head>
<body>
	<div id="header">
		<header>
			<nav id="mainMenu">
				<img id="logo" src="{{asset('assets/images/logo.png')}}" alt="Logo">
				<ul>
					<li>{{link_to('/', '', array('id' => 'btnHome'))}}</li>
					<li>{{link_to('quienessomos', 'Quienes Somos', array('class' => 'btnMainMenu'))}}</li>
					<li>{{link_to('nuestrotrabajo', 'Nuestro Trabajo', array('class' => 'btnMainMenu'))}}</li>
				</ul>
				<img id="imgContact" src="{{asset('assets/images/comuniquese.png')}}" alt="Comuniquese">
			</nav>
			@yield ('banner')
		</header>
	</div>

	<section id="body">
		@yield ('pageContent')
		<nav id="secondaryMenu">
			<ul>
				<li>
					<a href="mediosaudiovisuales" class="btnSecMenu">
						<h1>Medios<br>AudioVisuales</h1>
						<p>Animación digital,<br>
						 comerciales, spots y<br>
						 efectos especiales</p>
					</a>
				</li>
				<li>
					<a href="" class="btnSecMenu">
						<h1>Desarrollo<br>Web y soft</h1>
						<p>Tiendas virtuales,<br> 
						aplicaciones para redes,<br> 
						sitio web y software</p>
					</a>
				</li>
				<li>
					<a href="" class="btnSecMenu">
						<h1>Diseño<br>Grafico</h1>
						<p>Conceptos gráficos<br>
						para medios materiales<br>
						y digitales</p>
					</a>
				</li>
				<li>
					<a href="" class="btnSecMenu">
						<h1>Mercadeo y Publicidad</h1>
						<p>Compañias, BTL, logística,<br>
						estratégias, marketing,<br>
						comunicaciones branding</p>
					</a>
				</li>
				<li>
					<a href="" class="btnSecMenu">
						<h1>Integración<br>Digital</h1>
						<p>Aplicaciones interactivas, <br>
						Juegos 2D y 3D,<br> 
						multimedia y moviles</p>
					</a>
				</li>
			</ul>
		</nav>
		@yield ('homeContent')
	</section>
	<footer>
		<div id="foot">
			<div id="networks">
				<a href="" id="facebook"></a>
				<a href="" id="youtube"></a>
				<a href="" id="skype"></a>
				<a href="" id="twitter"></a>
			</div>
			<p>Bienvenido a Territorio Virtual Tel (574)5888271 Cel. 3148630601<br>
			Info@territoriovirtual.com</p>
		</div>
	</footer>
</body>
</html>
