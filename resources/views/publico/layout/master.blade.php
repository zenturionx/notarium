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
<body >
	@section('header')
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#"> <img class="logo" src="{{ url('img/page/logo.png')}}" height="40"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="navbar-nav ml-auto"> 
				<li class="nav-item active">
					<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#informacion"> Información </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#servicios"> Servicios </a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Funcionarios  </a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item" href="#notario"> Notario</a>
						</li>
						<li>
							<a class="dropdown-item" href="#instrumentos_publicos"> Instrumentos Públicos </a>
						</li>
						<li>
							<a class="dropdown-item" href="#instrumentos_privados"> Instrumentos Privados </a>
						</li>
						<li>
							<a class="dropdown-item" href="#apoyo_administrativo"> Apoyo Administrativo </a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#servicios_adicionales"> Servicios Adicionales </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="html-components.html"> Contacto </a>
				</li>				
			</ul>
		</div>
	</nav>

	<!--Header_section-->
	<!--<header id="header">
		<div id="barra_color">
			<div class="col-lg-12" style="height: 20px; background-color: #7a6d5b;"></div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light align-items-center justify-content-between d-flex" style="background-color: #fff;">
			<div id="logo">
				<a href="index.html"><img src="img/page/logob.png" width="30%" height="30%" alt="" title="" /></a>
			</div>			
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
	</header>-->
	@show

	@yield('content')	

	@section('footer')
	
	@show

	@section('scriptjs')
	@show
</body>
</html>