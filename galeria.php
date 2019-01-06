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
	<section id="page-title" class="parallax" style="background-image: url(img/bg/imagen_3.jpg);">
		<div class="title-info">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-title text-center">
							<h1>Galería</h1>
							<ol class="breadcrumb">
								
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div><!--end title-info-->
	</section>
	<!--end page-title-->

	<!-- Portfolio Section -->
	<section id="portfolio">
		<div class="container">
			<div class="row">
            	<div class="col-xs-12">
                	<ul id="filter-list">
                     	<li class="filter" data-filter="all">Todo</li>
                      	<li class="filter" data-filter="stone-message">Micropigmentación</li>
                      	<li class="filter" data-filter="colocacion_de_pestañas">Pestañas</li>
                      	<li class="filter" data-filter="herbal-spa">Cuidado Facial</li>
						
                    </ul><!-- @end #filter-list -->
                </div>
            </div><!--end row-->
			
			<div class="row">
				<div class="col-xs-12">
					<ul class="gallery-item">
						
						<li class="gallery colocacion_de_pestañas">
							<div class="post_thumb">
								<img src="img/gallery/p1.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/p1.jpg" class="fancybox" title="Colocación de pestañas paso:1"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>


						<li class="gallery colocacion_de_pestañas">
							<div class="post_thumb">
								<img src="img/gallery/p2.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/p2.jpg" class="fancybox" title="Colocación de pestañas paso:2"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li class="gallery colocacion_de_pestañas">
							<div class="post_thumb">
								<img src="img/gallery/p3.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/p3.jpg" class="fancybox" title="Colocación de pestañas paso:3"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li class="gallery herbal-spa">
							<div class="post_thumb">
								<img src="img/gallery/microblading_1.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/5.jpg" class="fancybox" title="Gallery Image 5"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li class="gallery skin-care">
							<div class="post_thumb">
								<img src="img/gallery/microblading_2.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/6.jpg" class="fancybox" title="Gallery Image 6"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li class="gallery body-message">
							<div class="post_thumb">
								<img src="img/gallery/microblading_3.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/7.jpg" class="fancybox" title="Gallery Image 7"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li class="gallery skin-care">
							<div class="post_thumb">
								<img src="img/gallery/microblading_4.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/8.jpg" class="fancybox" title="Gallery Image 8"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li class="gallery herbal-spa">
							<div class="post_thumb">
								<img src="img/gallery/punteado_de_pestañas.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/9.jpg" class="fancybox" title="Gallery Image 9"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li class="gallery stone-message">
							<div class="post_thumb">
								<img src="img/gallery/10.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/10.jpg" class="fancybox" title="Gallery Image 10"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li class="gallery skin-care">
							<div class="post_thumb">
								<img src="img/gallery/11.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/11.jpg" class="fancybox" title="Gallery Image 11"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li class="gallery stone-message">
							<div class="post_thumb">
								<img src="img/gallery/12.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/12.jpg" class="fancybox" title="Gallery Image 12"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Portfolio Section -->
	
	<!-- Start footer-->
	<?php
        footer();
    ?>
    <!-- Edn footer-->
	
	<!-- Bact to top Section-->
	<div class="back-top">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	
    <!-- Modal -->
    <div class="modal fade modal-vcenter" id="reservation" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2>REQUEST AN APPOINTMENT</h2>
                </div>
                <div class="modal-body">
					<form id="reservation-form" method="post" data-toggle="validator">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>First Name*</label>
									<input type="text" id="rfname" class="form-control" name="fname" required data-error="Please enter your first name">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id="rlname" class="form-control" name="lname" >
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Email*</label>
									<input type="email" id="remail" class="form-control" name="email" required data-error="Please enter valid email address">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Phone*</label>
									<input type="tel" id="rphone" class="form-control" name="phone" required data-error="Please enter your phone number">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
						</div>
						
						<div class="form-group">
							<label>Address</label>
							<input type="text" id="raddress" class="form-control" name="address">
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Zip Code</label>
									<input type="text" id="rzipcode" class="form-control" name="zipcode">
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-8">
								<div class="form-group">
									<label>City</label>
									<input type="text" id="rcity" class="form-control" name="city">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label>Service</label>
							<select id="rselect-service" class="select-option" name="service">
								<option value="Herbal Spa">Herbal Spa</option>
								<option value="Skin Care">Skin Care</option>
								<option value="Stone Message">Stone Message</option>
								<option value="Body Message">Body Message</option>
								<option value="Aromatherapy">Aromatherapy</option>
								<option value="Hydrotherapy">Hydrotherapy</option>
							</select>
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Reservation Date*</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="date" id="rdate" class="form-control date-pic" name="date" placeholder="mm/dd/yyyy" required data-error="Please select reservation date">
									</div><!-- /.input group -->
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="bootstrap-timepicker">
									<div class="form-group">
										<label>Time picker*</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
											<input type="text" id="rtime" name="time" class="form-control timepicker" required data-error="Please select reservation time">
										</div><!-- /.input group -->
										<div class="help-block with-errors"></div>
									</div><!-- /.form group -->
								</div>
							</div>
						</div>
						
						<div class="submit-block text-right">
							<a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
							<input value="Submit" name="submit" class="btn btn-primary" type="submit">
						</div>
						
						<div id="msgSubmitRes" class="h3 text-center hidden"></div>
						
					</form>
                </div>
                
            </div>
        </div>
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
