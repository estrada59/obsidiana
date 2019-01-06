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
	
	<!-- Map Section -->
	<section  class="map-responsive">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5367.581077832833!2d-92.95142286439673!3d17.95765034147295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd78011db8c69%3A0xc1c9e948d48093af!2sObsidiana+Micropigmentacion!5e0!3m2!1ses-419!2smx!4v1546505500218" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	<!--<div class="map">
		</div>-->
	</section>

	
	<!-- End Map Section-->
	
	<!-- Contact -->
	<section id="contact-us">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="title-block text-center">
						<h1>¡Pónte en contacto!</h1>
						<div class="line-block">
							<span class="bullet"><i class="fa fa-leaf"></i></span>
						</div>
						<p>Visítanos o bien haz tu cita al teléfono: 993 129 5160 </p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<ul class="contact-left">
						<li>
							<div class="contact-list wow fadeInLeft">
								<i class="fa fa-map-marker"></i>
								<div class="contact-info">
									<p>Tulipanes 125, Blancas Mariposas,  86179 <br/> Villahermosa, Tab.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="contact-list wow fadeInLeft">
								<i class="fa fa-phone"></i>
								<div class="contact-info">
									<p>Teléfono: 993 129 5160</p>
								</div>
							</div>
						</li>
						<li>
							<div class="contact-list wow fadeInLeft">
								<i class="fa fa-envelope"></i>
								<div class="contact-info">
									<p><a href="mailto:obsidiana.negocios@gmail.com">obsidiana.negocios@gmail.com</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="contact-list wow fadeInLeft">
								<i class="fa fa-clock-o"></i>
								<div class="contact-info">
									<p>Lunes a Viernes: 4:00 pm - 8:00 pm <br> Sábados y Domíngos: 9:00 am - 8:00 pm</p>
								</div>
							</div>
						</li>
					</ul>
					
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6" >
					<ul class="contact-left">
						<li>
							<div class="contact-list wow fadeInRight">
								<div class="contact-info">
									<img src="img/contact/logo_negro.jpg" alt="Obsidiana - Micropigmentación">
								</div>
							</div>
						</li>
					</ul>
					
					
							
				</div>
				<!-- Pendiente configurar cliente de correo
				<div class="col-xs-12 col-sm-12 col-md-8">
					<div class="contact-form content-right wow fadeInRight">
						<form id="contactForm" data-toggle="validator" method="post">
							<div class="row">
								<div class="col-sm-12 col-sm-6">
									<div class="form-group">
										<input placeholder="First Name" id="fname" class="form-control" name="fname" type="text" required data-error="Please enter your first name">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-12 col-sm-6">
									<div class="form-group">
										<input placeholder="Last Name" id="lname" class="form-control" name="lname" type="text">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input placeholder="Email Address" id="email" class="form-control" name="email" type="email" required data-error="Please enter your valid email address"> 
								<div class="help-block with-errors"></div>
							</div>
							
							<div class="form-group">
								<textarea placeholder="Your Comments" id="message" cols="20" rows="6" class="form-control" required data-error="Please enter your comments"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<input value="Submit" name="submit" class="btn btn-default" type="submit">
							<div id="msgSubmit" class="h3 text-center hidden"></div>
						</form>
					</div>
				</div>-->
			</div>
		</div>
	</section>
	
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
