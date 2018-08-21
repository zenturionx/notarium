@extends('publico.layout.master')

@section('title', 'Curso Laravel')



@section('content')
<hr class="my-4">
<div class="container">
	<!-- Foto Portada -->
	<section id="top_content" class="top_cont_outer">
		<div class="col-centered" ><img style="max-height: 100%;max-width: 100%;" src="{{ url('img/page/fondod-1024x495-1.jpg')}}"></div>
	</section>

	<hr class="my-4">

	<!--informacion-->

	<section id="informacion" class="pb-5">
		<div class="container">
			<h2 class="section-title h1">Información</h2>			
			<div class="row">
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

	<hr class="my-4">

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

	<hr class="my-4">

	<!-- servicios -->
	<section id="work_outer" class="work_outer"><!--main-section-start-->

		<div class="top_cont_latest">

			<div class="container">

				<h2 class="section-title h1">Servicios</h2>

				<div class="work_section">

					<div class="row">

						<div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">

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

						<div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s img-container">
							<img src="{{ asset('img/page/logob.png') }}" class="img-responsive" alt="Notaría">
						</div>

						

					</div>

				</div>

			</div>

			<!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->

		</div>

	</section>

	<hr class="my-4">

	<section class="main-section team" id="notario_Titular">
		<div class="container">
			<h2 class="section-title h1">Equipo de Trabajo</h2>
			<h6>Conoce a nuestro equipo</h6>
			<div class="col-lg-10 col-centered" ><img style="max-height: 100%;max-width: 100%;" src="{{ asset('img/page/equipo.jpg') }}"></div>
		</div>
	</section>

	<section>
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
							<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>							
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<h2 class="section-title h1">Instrumentos Publicos</h2>
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
							<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>							
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
							<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>							
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
							<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>							
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
							<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>							
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
							<div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>							
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<hr class="my-4">

</div>	
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