<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        //head
        //en éste encabezado podemos cambiar color a los css
        include_once "header.php";
		head();
	?>
</head>
<body>
	<!--Preload-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	
	<!-- Top bar -->
    <?php
		top_bar();
    ?>
	<!-- End Top bar -->
	
    <!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" data-spy="affix">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
							<span class="sr-only">Toggle navigation</span>
							<span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</span>
                        </button>
                        <?php 
                            logo();
                        ?>	
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
                     <?php 
                        nav();
                     ?>
					<!-- /.navbar-collapse -->
				</div>
			</div>
			
		</div>
		<!-- /.container -->
	</nav>
	
	
	<!-- Banner Section -->
	<div id="banner" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active" style="background-image:url(img/banner/imagen_1.jpg);">
				<div class="caption-info">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-md-offset-2">
								<div class="caption-info-inner text-center">
									<h1 class="animated flipInX">¡Bienvenidos! a OBSIDIANA MICROPIGMENTACIÓN</h1>
									<p class="animated flipInX">“Para ser bella, no se necesita ver estrellas! ..solo brillar como una”</p>
									<a href="acerca_de_nosotros.php" class="animated flipInY btn btn-primary">Leer más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item" style="background-image:url(img/banner/imagen_2.jpg);">
				<div class="caption-info">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-md-offset-2">
								<div class="caption-info-inner text-center">
									<h1 class="animated fadeInDown">En búsqueda de la Belleza natural</h1>
									<p class="animated fadeInUp">Obsidiana nace con la inquietud de expresar creatividad, resaltar la belleza, y dibujar sonrisas</p>
									<a href="contactanos.php" class="animated fadeInUp btn btn-primary">Contacto</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item" style="background-image:url(img/banner/imagen_3.jpg);">
				<div class="caption-info">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-md-offset-2">
								<div class="caption-info-inner text-center">
									<h1 class="animated fadeInLeft">En OBSIDIANA MICROPIGMENTACIÓN </h1>
									<p class="animated fadeInLeft">Nos preocupamos de trabajar con productos de buena calidad y mejorar la técnica de cada servicio para ofrecer servicios confiables y satisfacer las expectativas de nuestros clientes.</p>
									<a href="contactanos.php" class="animated fadeInRight btn btn-primary">Contacto</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item" style="background-image:url(img/banner/imagen_4.jpg);">
				<div class="caption-info">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-md-offset-2">
								<div class="caption-info-inner text-center">
									<h1 class="animated fadeInDown">En búsqueda de la Belleza natural</h1>
									<p class="animated fadeInUp">Obsidiana nace con la inquietud de expresar creatividad, resaltar la belleza, y dibujar sonrisas</p>
									<a href="contactanos.php" class="animated fadeInUp btn btn-primary">Contacto</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item" style="background-image:url(img/banner/imagen_5.jpg);">
				<div class="caption-info">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-md-offset-2">
								<div class="caption-info-inner text-center">
									<h1 class="animated fadeInDown">En búsqueda de la Belleza natural</h1>
									<p class="animated fadeInUp">Obsidiana nace con la inquietud de expresar creatividad, resaltar la belleza, y dibujar sonrisas</p>
									<a href="contactanos.php" class="animated fadeInUp btn btn-primary">Contacto</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			
		</div><!--end carousel-inner-->
		
		
		<!-- Controls -->
		<a class="control left" href="#banner" data-slide="prev"><i class="fa fa-long-arrow-left"></i></a>
		<a class="right control" href="#banner" data-slide="next"><i class="fa fa-long-arrow-right"></i></a>
	</div>
	<!--End Banner Section -->
	
	<!-- Procedures -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="title-block text-center">
						<h1>Servicios destacados</h1>
						<div class="line-block">
							<span class="bullet"><i class="fa fa-leaf"></i></span>
						</div>
						<p>La micropigmentación es un procedimiento cosmético que nos permite corregir o acentuar ciertos rasgos, para potenciar el equilibrio estético en nuestro rostro, con la finalidad de embellecer al mismo.</p>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-xs-12">
					<div class="services-block" id="services-carousel">
						<?php 
							include_once "servicios_s.php";
							for($i=1; $i<=15; $i++){
								servicios($i);
							}	
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Procedures -->
	
	<!-- Subscribe -->
	<!--<section class="section-padding bg" id="subscribe" data-stellar-background-ratio="0.5" style="background-image:url(img/bg/subscribe-bg.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
					<div class="subscribe-content text-center">
						<h1>Subscribe &amp; get amazing update</h1>
						<form action="#" method="post">
							<div class="input-group">
								<input type="email" class="form-control" placeholder='Enter your email' />
								<span class="input-group-addon">
									<input type="submit" class="btn btn-default" value="subscribe" />
								</span>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>-->
    <!-- End Subscribe -->
    
    <!-- Counter Section -->
	<section class="count-section bg" id="counter" data-stellar-background-ratio="0.5" style="background-image: url(img/bg/delineado_de_parpados.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-4">
					<div class="features-info">
						<span class="counter">870</span><h2>Clientes nos siguen</h2>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4">
					<div class="features-info">
						<span class="counter">1</span><h2>Especialista</h2>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4">
					<div class="features-info">
						<span class="counter">18</span><h2>Servicios</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Gallery -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="title-block text-center">
						<h1>Galería OBSIDIANA MICROPIGMENTACIÓN</h1>
						<div class="line-block">
							<span class="bullet"><i class="fa fa-leaf"></i></span>
						</div>
						<p>En Micropigmentación se busca que la pigmentación sea Semi-permanente para garantizar al usuario que podrá olvidarse de la esclavitud del maquillaje  por un lapso determinado, sin esclavizarlo de por vida a un diseño de maquillaje determinado.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<ul class="gallery-item">
						<li>
							<div class="post_thumb">
								<img src="img/gallery/microblading_1.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/microblading_1.jpg" class="fancybox" title=""><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/microblading_2.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/microblading_2.jpg" class="fancybox" title=""><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/microblading_3.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/microblading_3.jpg" class="fancybox" title=""><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/microblading_4.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/microblading_4.jpg" class="fancybox" title=""><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
					
					</ul>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<div class="load-more text-center">
						<a href="galeria.php" class="btn btn-primary">Ver todo</a>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- End Gallery -->
	
	
	
	<!-- Testimonials -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="title-block text-center">
						<h1>Qué dicen nuestros clientes</h1>
						<div class="line-block">
							<span class="bullet"><i class="fa fa-leaf"></i></span>
						</div>
						<!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit</p>-->
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
					<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="active item">
								<div class="testimonial-item text-center">
									<i class="fa fa-quote-left"></i>
									<div class="author-comments">
										<p>Me hice el microblading hace aproximadamente 4 meses y siguen intactas!!
											Lavo mi cara normal, hago ejercicio entre semana y mis cejas siguen sin ningún descuido a pesar del sudor.
											El microblading hace que se vean naturales y ya no tengo la necesidad de maquillarme tanto.</p>
									</div>
									<div class="author">
										<img src="img/testimonials/alanis_zurita.png" alt="">
									</div>
									<div class="designation">Alanis J. Zurita Dominguez<small>Lic. en Enfermeria</small></div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-item text-center">
									<i class="fa fa-quote-left"></i>
									<div class="author-comments">
										<p>"Excelente trabajo!" 
											Me encantaron mis pestañas con volumen, altamente recomendada!</p>
									</div>
									<div class="author">
										<img src="img/testimonials/ana_lilia.png" alt="">
									</div>
									<div class="designation">Ana Lilia Canabal <small>Maestra de preescolar & MUA</small></div>
								</div>
							</div>


							<div class="item">
								<div class="testimonial-item text-center">
									<i class="fa fa-quote-left"></i>
									<div class="author-comments">
										<p>Estoy encantada con mis cejas! Antes de hacerme el microblading mis cejas eran sumamente rectas y sin forma, aunque me las maquillara nunca me gustaban, mucha gente me decía que me realizara el microblading pero tenía miedo de que no me gustara y me doliera, como mucha gente dice. Pero con Obsidiana no me dolió nada, no tuve ninguna molestia ni antes ni después, mis cejas quedaron a mi gusto, como siempre las había querido! y además de todo, el trato es muy profesional y amable, sin duda sería algo que me volvería a realizar. Gracias!! </p>
									</div>
									<div class="author">
										<img src="img/testimonials/giselle_fuentes.png" alt="">
									</div>
									<div class="designation">Giselle Fuentes Aguilar Romellón  <small>Lic. Administración turística</small></div>
								</div>
							</div>
							
						</div>
						<!-- Carousel nav -->
						<a class="control left" href="#testimonial-carousel" data-slide="prev"> <i class="fa fa-long-arrow-left"></i></a>
						<a class="control right" href="#testimonial-carousel" data-slide="next"> <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
			
		</div>
		
	</section>
	<!-- End Testimonials -->
	
	
    
    <!-- Start footer-->
    <?php
        footer();
    ?>
    <!-- Edn footer-->
	
	<!-- Bact to top Section-->
	<div class="back-top">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	  
		
    <!-- jQuery -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.min.js" type="text/javascript"></script>
	<script src="js/wow.js" type="text/javascript"></script>
	<script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
	<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="js/waypoints.min.js" type="text/javascript"></script>
	<script src="js/jquery.counterup.min.js" type="text/javascript"></script>
	<script src="js/newsticker.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?js?sensor=false&key=AIzaSyCYI9QbpcEgmUSfnoBplXycjesknwlFW-w"></script>
	<script src="js/gmap3.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script src="js/chosen.jquery.js" type="text/javascript"></script>
	<script src="js/masonry.pkgd.js" type="text/javascript"></script>
	<script src="js/bootstrap-timepicker.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="mail/js/form-validator.min.js" type="text/javascript"></script>
	<script src="mail/js/contact-form-script.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>

</body>
</html>
