@extends('publico.layout.master')

@section('title', 'Curso Laravel')



@section('content')
<!-- Foto Portada -->
<section id="top_content" class="relative">
	<div class="col-centered" ><img style="max-height: 100%;max-width: 100%;" src="{{ url('img/page/fondod-1024x495-1.jpg')}}"></div>
</section>



<!--informacion-->

<section id="informacion" class="pb-5 interlude_background section-gap">
	<div class="container">
		<h2 class="section-title h1">Información</h2>			
		<div class="row ">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<p class="service_icon"> 
							<span><i class="fa fa-clock-o fa-5x"></i></span> 
						</p>
						<h3 class="card-title title-info">Horario de Atención</h3>
						<p class="card-text">Lun-Vie:</p>
						<p class="card-text">08:30 – 14:00 Hrs</p>
						<p class="card-text">15:00 – 18:00 Hrs</p>
					</div>						
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<p class="service_icon"> 
							<span><i class="fa fa-info-circle fa-5x"></i></span> 
						</p>
						<h3 class="card-title title-info">Dirección</h3>
						<p class="card-text">Caupolican Nº 355,Los Angeles</p>
						<h3 class="card-title title-info">Correo</h3>
						<p class="card-text">contacto@notariaaraneda.cl</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<p class="service_icon"> 
							<span><i class="fa fa-phone fa-5x"></i></span> 
						</p>
						<h3 class="card-title title-info">Teléfono Fijo</h3>
						<p class="card-text">43-2215151 / 43-2215152</p>
						<h3 class="card-title title-info">Teléfono Móvil</h3>
						<p class="card-text">Celular : +56990068606</p>
					</div>
				</div>
			</div>
		</div>			
	</div>
</section>

<!-- publicidad -->

<section class="c-logo-part" id="publicidad">
	<div class="container">
		<div class="row justify-content-center align-items-center animated  bounce wow">
			<div class="col-md-2">
				<a href="javascript:void(0)"><img src="{{ asset('img/page/btn_sii.png') }}" alt=""></a>
			</div>
			<div class="col-md-2">
				<a href="javascript:void(0)"><img src="{{ asset('img/page/btn_conservador.png') }}" alt=""></a>
			</div>
			<div class="col-md-2"> 
				<a href="javascript:void(0)"><img src="{{ asset('img/page/btn_judicial.png') }}" alt=""></a>
			</div>
			<div class="col-md-2">
				<a href="javascript:void(0)"><img src="{{ asset('img/page/btn_sbif.png') }}" alt=""></a>
			</div>
			<div class="col-md-2">
				<a href="javascript:void(0)"><img src="{{ asset('img/page/btn_bcn.png') }}" alt=""></a>
			</div>
		</div>
	</div>
</section>

<!-- servicios -->
<section id="servicios" class="section-gap interlude_background">
	<div class="container">
		<h2 class="section-title h1">Servicios</h2>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="service-list">
					<div class="service-list-col1"> <i class="fa fa-pencil fa-2x"></i> </div>
					<div class="service-list-col2">

						<h3>Implementación del servicio de firma electrónica</h3>

						<p>En los términos dispuestos por la Ley N° 19.799 y atendiendo las nuevas necesidades del tráfico jurídico y comercial, a la vez que respetando nuestra obligación frente a la fe pública.</p>

					</div>
				</div>
				<div class="service-list">
					<div class="service-list-col1"> <i class="fa fa-newspaper-o fa-2x"></i> </div>
					<div class="service-list-col2">

						<h3>Publicación en Diario Oficial:</h3>

						<p>Nuestras funcionarios del Departamento de Instrumentos Públicos se encargarán de solicitar la debida publicación oficial de aquellos instrumentos que requieran de dicha formalidad, poniendo especial atención a la reducción de los plazos de constitución de sujetos comerciales.</p>

					</div>
				</div>
				<div class="service-list">
					<div class="service-list-col1"> <i class="fa fa-database fa-2x"></i> </div>
					<div class="service-list-col2">

						<h3>Servicios notariales tradicionales:</h3>

						<p>Todas las herramientas mencionadas han sido implementadas para lograr una rápida expedición de aquellos instrumentos públicos y privados, necesarios en la cotidianeidad de nuestras relaciones civiles. Sírvase consultar nuestros servicios notariales tradicionales.</p>

					</div>
				</div>
				<div class="service-list">
					<div class="service-list-col1"> <i class="fa fa-user fa-2x"></i> </div>
					<div class="service-list-col2">
						<h3>Notaria en linea:</h3>

						<p>Esta herramienta está diseñada con el fin de realizar de manera más fácil y expedita sus trámites. Consiste en formularios, que al agregar sus datos, se envían a ésta notaría , convirtiéndose en un documento listo para ser certificado y firmado electronicamente</p>
					</div>
				</div>
			</div>	
			<div class="col-lg-6 justify-content-center align-items-center d-flex">
				<img src="{{ asset('img/page/logob.png') }}" class="img-responsive" alt="Notaría">
			</div>		
		</div>		
	</div>
</section>

<!-- Equipo de Trabajo -->
<section class="equipo-area section-gap relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center" style="height: 600px;">
			<div class="banner-content col-lg-12 col-md-12">
				<h1 class="section-title h1 text-white">
					Nuestro Equipo de Trabajo			
				</h1>
				<p class="text-white">
					Te presentamos las diferentes áreas de nuestra notaría <br> y las personas que integran sus equipos de trabajo.
				</p>
				<a href="#notario" class="primary-btn header-btn text-uppercase">Conocer</a>
			</div>												
		</div>
	</div>
</section>

<!-- Notario -->
<section id="notario" class="section-gap interlude_background">
	<div class="container">
		<h2 class="section-title h1">Notario</h2>
		<div class="row py-4">
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/notario1.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Juan Mauricio Araneda Medina<small>Notario Titular</small></h2>
						<p class="card-text text-center">Abogado. Egresado de la Escuela de Derecho de la Universidad de Concepción.
						Mauricio@notariaaraneda.cl</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>				
		</div>
	</div>
</section>

<!-- Instrumentos públicos -->
<section id="instrumentos_publicos" class="section-gap">
	<div class="container">
		<h2 class="section-title h1">Instrumentos Públicos</h2>
		<div class="row py-4">
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/cristian_palacios1.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Cristian <br>Palacios</h2>							
						<p class="card-text text-center">cristianpalacios.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->							
					</div>
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/juancarlos1.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Juan Carlos Muñoz Diocares</h2>
						<p class="card-text text-center">jcmunoz.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->							
					</div>
				</div>
			</div>	
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/eduardo1.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Eduardo Heriberto Iraira Pérez</h2>
						<p class="card-text text-center">eiraira.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/CamlaA.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Camila Anaís Salazar Salazar</h2>
						<p class="card-text text-center"><br></p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/valeria.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Valeria <br> Hermosilla</h2>
						<p class="card-text text-center">Valeria.hermosilla5351@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>				
		</div>
	</div>
</section>

<!-- Instrumentos privados -->
<section id="instrumentos_privados" class="section-gap interlude_background">
<div class="container">
	<h2 class="section-title h1">Instrumentos Privados</h2>
<div class="row py-4">
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/Marcela.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Marcela <br> Fritz</h2>
						<p class="card-text text-center">Informaciones - Coordinación, Atención Abogados y Público</p>
						<p class="card-text text-center">Mfritz.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
				</div>
</div>
</div>
	<div class="container">
		<div class="row py-4">
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/angelica1.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Angélica María Pezoa Zúñiga</h2>							
						<p class="card-text text-center">angelica.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/natali1.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Natali Sepúlveda Sepúlveda</h2>
						<p class="card-text text-center">natali.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>	
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/marcia.png') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Marcia Ivonne Palacios Salazar</h2>
						<p class="card-text text-center">marcia.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/Marcela.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Marcela <br> Fritz</h2>
						<p class="card-text text-center">Informaciones - Coordinación Atención Abogados y Público</p>
						<p class="card-text text-center">Mfritz.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/karin.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Karin Betzabe Salazar Sanhueza</h2>
						<p class="card-text text-center">karin.cuartanotaria@gmail.com</p>
						<p class="card-text text-center"><br><br></p>						
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>	
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/Camila.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Camila <br> Cruces</h2>
						<p class="card-text text-center">Instrumentos Públicos</p>
						<p class="card-text text-center">Camila.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>				
		</div>
	</div>
</section>

<!-- Apoyo administrativo -->
<section id="apoyo_administrativo" class="section-gap">
	<div class="container">
		<h2 class="section-title h1">Apoyo Administrativo</h2>
		<div class="row py-4">
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/nicol.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Patricia Nicol Jara Aguilera</h2>							
						<p class="card-text text-center">Caja y Finanza</p>
						<p class="card-text text-center">nicol.cuartanotaria@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>
			<div class="col-md-4 mx-auto">
				<div class="card profile-card-3">
					<div class="background-block">
						<img src="{{ asset('img/page/section-bg1.jpg') }}" alt="profile-sample1" class="background"/>
					</div>
					<div class="profile-thumb-block">
						<img src="{{ asset('img/page/Horacio.jpg') }}" alt="profile-image" class="profile"/>
					</div>
					<div class="card-content">
						<h2>Horacio <br> Rojas</h2>
						<p class="card-text text-center">Asesor Informático</p>
						<p class="card-text text-center">Horacio.rojas.p@gmail.com</p>
						<!--<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>-->						
					</div>
				</div>
			</div>	
			</div>
	</div>
</section>

<!-- servicios adicionales -->
<section id="servicios_adicionales" class="section-gap interlude_background">
	<div class="container">
		<h2 class="section-title h1">Servicios Adicionales</h2>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="service-list">
					<div class="service-list-col1"> <i class="fa fa-pencil fa-2x"></i> </div>
					<div class="service-list-col2">

							<h3>Notaria de turno en el mes de {{$mesActual}} </h3>

							
							<?php echo $NotarioTurno ?>

					</div>
				</div>
				<div class="service-list">
					<div class="service-list-col1"> <i class="fa fa-newspaper-o fa-2x"></i> </div>
					<div class="service-list-col2">

						<h3>PRIVILEGIO DE POBREZA MES DE {{$mesActual}}</h3>

						<?php echo $notariaPrivilegio; ?>

					</div>
				</div>				
			</div>	
			<div class="col-lg-6 justify-content-center align-items-center d-flex">
				<img src="{{ asset('img/page/logob.png') }}" class="img-responsive" alt="Notaría">
			</div>		
		</div>		
	</div>
</section>

@stop

@section('scriptjs')
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/wow.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/classie.js')}}"></script>

<script type="text/javascript">

	$(document).ready(function(e) {
		$('.res-nav_click').click(function(){
			$('ul.toggle').slideToggle(600)	
		});

		$(window).bind('scroll', function() {
			if ($(window).scrollTop() > 0) {
				$('#header_outer').addClass('fixed');
			} else {
				$('#header_outer').removeClass('fixed');
			}
		});
	});	

	function resizeText() {

		var preferredWidth = 767;

		var displayWidth = window.innerWidth;

		var percentage = displayWidth / preferredWidth;

		var fontsizetitle = 25;

		var newFontSizeTitle = Math.floor(fontsizetitle * percentage);

		$(".divclass").css("font-size", newFontSizeTitle);
	}
</script>
@stop