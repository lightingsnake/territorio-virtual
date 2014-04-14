@extends ('layout')

@section ('title')
	Territorio Virtual
@stop

@section ('banner')
	<div id="bannerHome">
		<ul>
			<li style="background: url({{asset('assets/images/bannerPrincipalA.jpg')}})">
				&nbsp;
			</li>
		</ul>
	</div>
@stop

@section ('homeContent')
	<div id="homeContent">
		<div id="welcome">
			<h2>Bienvenidos a Nuestro Sitio Web</h2>
			<h1>Comuniquese</h1>
			<h3>
				Somos su equipo de trabajo
			</h3>
			<ul>
				<li>Soporte en linea</li>
				<li>Asesoría</li>
				<li>Cotizaciones</li>
				<li>Acceso Remoto</li>
				<li>Sugerencias</li>
				<li>Entre otros</li>
			</ul>
		</div>
	</div>
@stop