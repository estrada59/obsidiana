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
	
	<!-- Page Title-->
	<section id="page-title" class="parallax" style="background-image: url(img/bg/imagen_4.jpg);">
		<div class="title-info">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-title text-center">
							<h1>Labios FULL COLOR</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div><!--end title-info-->
	</section>
	<!--end page-title-->
	
	<!-- Procedures -->
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-md-4">
					<div class="service-list single">
						<div class="thumb">
							<img src="img/services/labios_full_color.jpg" alt="Labios FULL COLOR" />
						</div>
						<h2>Labios FULL COLOR</h2>
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-8">
					<div class="service-details">
						<h3>Tiempo de procedimiento apróx. 90min<br/>$3,500.00 <br/> Duración de 1 a 4 años aprox. </h3>
						<p>Consiste en micropigmentar los labios en su totalidad. Primero delineamos y luego rellenamos con color. </p>
                        <p>Con esta técnica podemos lucir unos labios simétricos, ligeramente más voluminosos, todo por efecto visual del color. </p>
                        <p>El tono dependerá del look que se desee, pues podemos usar una amplia gama de rosas, rojos, terracotas para resaltar los labios o simplemente colores nude para corregir y perfeccionar la simetría de los labios.</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Procedures -->
	
	<!-- Related Procedures -->
	<section class="section-padding inverse">
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
								//echo'<div class="col-xs-6 col-sm-6 col-md-4">';
									servicios($i);
								//echo'</div>';
							}
						?>
					</div>
				</div>
			</div>

		
		</div>
	</section>
	<!-- End Related Procedures -->
	
	
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
