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
			<div class="item active" style="background-image:url(img/banner/1.jpg);">
				<div class="caption-info">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-md-offset-2">
								<div class="caption-info-inner text-center">
									<h1 class="animated flipInX">¡Bienvenidos! a OBSIDIANA MICROPIGMENTACIÓN</h1>
									<p class="animated flipInX">"lo que es digno de hacerse, es digno que se haga bien"</p>
									<a href="acerca_de_nosotros.php" class="animated flipInY btn btn-primary">Leer más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item" style="background-image:url(img/banner/2.jpg);">
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
			
			<div class="item" style="background-image:url(img/banner/3.jpg);">
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
						<h1>Procedimientos destacados</h1>
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
						<div class="service-list">
							<div class="thumb">
								<img src="img/services/1.jpg" alt="" />
							</div>
							<h2>Contorno de labios</h2>
							<div class="price-text"><sup>$</sup>160<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/2.jpg" alt="" />
							</div>
							<h2>Labios full color</h2>
							<div class="price-text"><sup>$</sup>110<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
						</div>
						
						<div class="service-list">
							<div class="thumb">
								<img src="img/services/3.jpg" alt="" />
							</div>
							<h2>Línea párpado súperior</h2>
							<div class="price-text"><sup>$</sup>120<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
						</div>
						
						<div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Línea párpado inferior</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
						</div>
						
						<div class="service-list">
							<div class="thumb">
								<img src="img/services/2.jpg" alt="" />
							</div>
							<h2>Línea de luz párpado superior</h2>
							<div class="price-text"><sup>$</sup>110<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
						</div>
						
						<div class="service-list">
							<div class="thumb">
								<img src="img/services/3.jpg" alt="" />
							</div>
							<h2>Cejas compactas</h2>
							<div class="price-text"><sup>$</sup>120<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
						</div>
						
						<div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Cejas sombreadas</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Cejas técnica mixta</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Microblading</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Extensiones de pestañas 1x1</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Extensiones de pestañas Técnica Mixta</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Extensiones de pestañas Volumen</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Lash lifting</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Antifaz de juventud</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Microdermoabrasion + Hidratación</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        
                        <div class="service-list">
							<div class="thumb">
								<img src="img/services/4.jpg" alt="" />
							</div>
							<h2>Limpieza profunda</h2>
							<div class="price-text"><sup>$</sup>130<sub>/hr</sub></div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							<a href="procedures-details.html" class="btn btn-default">Read More</a>
                        </div>
                        

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
	<section class="count-section bg" id="counter" data-stellar-background-ratio="0.5" style="background-image: url(img/bg/counter-bg.jpg);">
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
						<span class="counter">18</span><h2>Tratamientos</h2>
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
								<img src="img/gallery/1.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/1.jpg" class="fancybox" title="Gallery Image 1"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/2.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/2.jpg" class="fancybox" title="Gallery Image 2"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/3.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/3.jpg" class="fancybox" title="Gallery Image 3"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/4.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/4.jpg" class="fancybox" title="Gallery Image 4"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/5.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/5.jpg" class="fancybox" title="Gallery Image 5"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/6.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/6.jpg" class="fancybox" title="Gallery Image 6"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/7.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/7.jpg" class="fancybox" title="Gallery Image 7"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/8.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/8.jpg" class="fancybox" title="Gallery Image 8"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/9.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/9.jpg" class="fancybox" title="Gallery Image 9"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/10.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/10.jpg" class="fancybox" title="Gallery Image 10"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="post_thumb">
								<img src="img/gallery/11.jpg" alt="">
								<div class="gallery-overlay">
									<a href="img/gallery/11.jpg" class="fancybox" title="Gallery Image 11"><i class="fa fa-camera"></i></a>
								</div>
							</div>
						</li>
						<li>
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
			
			<div class="row">
				<div class="col-xs-12">
					<div class="load-more text-center">
						<a href="#" class="btn btn-primary">View All</a>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- End Gallery -->
	
	
	
	<!-- Testimonials -->
	<!--<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="title-block text-center">
						<h1>Our Clients Say</h1>
						<div class="line-block">
							<span class="bullet"><i class="fa fa-leaf"></i></span>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
					<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">-->
						<!-- Carousel items -->
						<!--<div class="carousel-inner">
							<div class="active item">
								<div class="testimonial-item text-center">
									<i class="fa fa-quote-left"></i>
									<div class="author-comments">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
									<div class="author">
										<img src="img/testimonials/1.png" alt="">
									</div>
									<div class="designation">Philip Josep <small>CEO - Company Name</small></div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-item text-center">
									<i class="fa fa-quote-left"></i>
									<div class="author-comments">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
									<div class="author">
										<img src="img/testimonials/2.png" alt="">
									</div>
									<div class="designation">Philip Josep <small>Founder - Company Name</small></div>
								</div>
							</div>
							
						</div>-->
						<!-- Carousel nav -->
						<!--<a class="control left" href="#testimonial-carousel" data-slide="prev"> <i class="fa fa-long-arrow-left"></i></a>
						<a class="control right" href="#testimonial-carousel" data-slide="next"> <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
			
		</div>
		
	</section>-->
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
