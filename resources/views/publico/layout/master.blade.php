<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<title>Notaría Araneda - @yield('title')</title>

	<meta name="keywords" content="Notaria, notaria los angeles, notaria en los angeles, araneda, notaria araneda, notario">
	<meta name="description" content="Notaría Araneda. Firma electronica y documentos notariales, notaría en los angeles.">

	<link rel="icon" href="{{ url('img/icon/favicon.ico')}}" type="image/png">

	<link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/animate.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/new_style.css')}}" rel="stylesheet" type="text/css">
	<!--<link href="{{ url('css/responsive.css')}}" rel="stylesheet" type="text/css">-->	
	<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>
</head>
<body>
	@section('header')
	<!--Header_section-->
	<header>
		<div id="barra_color">
			<div class="col-lg-12" style="height: 50px; background-color: #7a6d5b;"></div>
		</div>
		<nav class="navbar flex-row-reverse navbar-expand-lg navbar-light" style="background-color: #fff;">
			<a class="navbar-brand" href="#">
    			<img src="{{ url('img/page/logob.png')}}" width="60%" height="60%" alt="">
  			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbarNavAltMarkup" class="collapse navbar-collapse" >
				<ul class="navbar-nav  mx-md-auto order-1 order-md-2 mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#top_content">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#informacion">Información</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#work_outer">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#notario_Titular">Funcionarios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Notaria_Turno">Notaria de Turno</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contacto">Contacto</a>
					</li>
				</ul>
			</div>
		</nav>		
	</header>		
		
	
	@show

	<div class="container">
		@yield('content')
	</div>

	@section('footer')
	
	@show

	@section('scriptjs')
	@show
</body>
</html>