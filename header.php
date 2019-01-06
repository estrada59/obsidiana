<?php 
    function head(){
        
        echo'    
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Obsidiana - Micropigmentación</title>
            
            
            <!-- START FAVICON -->
            <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
            <link rel="manifest" href="img/favicon/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">
            <!-- END FAVICON -->




            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <!-- Animate CSS -->
            <link href="css/animate.css" rel="stylesheet">
            <!--Fancybox-->
            <link href="css/jquery.fancybox.css" rel="stylesheet">
            <!-- font-awesome-->
            <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
            <!--Owl Carousel-->
            <link href="css/owl.carousel.css" rel="stylesheet">
            <!--Chosen-->
            <link href="css/chosen.css" rel="stylesheet">
            <!--Time picker-->
            <link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
            <!--Date picker-->
            <link href="css/datepicker.css" rel="stylesheet">
            <!--Google Fonts-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
            <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet"> 
            <!-- Main CSS -->
            <link href="style.css" rel="stylesheet">
            <!-- Color switcher -->
            <link rel="stylesheet" href="css/skin/color2.css" id="colors">
    
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->';

    }
    function top_bar()
    {
        echo '
                <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-xs-6">
                            <div class="top-left">
                                <ul>
                                    <li><i class="fa fa-phone"></i> <a href="tel:993 129 5160">993 129 5160</a></li>
                                    <li><i class="fa fa-envelope-o"></i> <a href="mailto:obsidiana.negocios@gmail.com">obsidiana.negocios@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-xs-6">
                            <div class="top-right">
                                <ul class="social-media">
                                    <li><a href="https://www.facebook.com/Obsidiana.micropigmentacion" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                                    <li><a href="https://www.instagram.com/obsidiana_micro/?hl=es-la" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
    function nav(){
        echo'
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Inicio <span class="caret"></span></a>
                    </li>
                    
                    <li>
                        <a href="servicios.php">Servicios</a>
                    </li>

                    <li><a href="acerca_de_nosotros.php">Nosotros</a></li>
                    
                    <li><a href="galeria.php">Galería</a></li>

                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                        </ul>
                    </li>-->
                    
                    <li><a href="contactanos.php">Contacto</a></li>

                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="procedures.html">Procedures</a></li>
                            <li><a href="procedures-details.html">Procedures Details</a></li>
                            <li><a href="therapists.html">Therapists</a></li>
                            <li><a href="pricing-table.html">Pricing Table</a></li>
                            <li><a href="404.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="gallery-two-column.html">Gallery Two Column</a></li>
                            <li><a href="gallery-three-column.html">Gallery Three Column</a></li>
                            <li><a href="gallery-without-filter.html">Gallery Without Filter</a></li>
                            <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-list-view.html">Blog List View</a></li>
                            <li><a href="blog-grid-view.html">Blog Grid View</a></li>
                            <li><a href="blog-grid-view-2.html">Blog Grid View 2</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>-->
                    <!--<li>
                        <a href="contact-us.html">Contact Us</a>
                    </li>-->
                    <!--<li class="reservation">
                        <a href="#" data-toggle="modal" data-target="#reservation">Reservation</a>
                    </li>-->
                </ul>
            </div>
        
        ';
    
    }

    function logo(){
        echo '<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo" /></a>';
    }
    function footer(){

        echo'
            <footer id="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3">
                                <div class="footer-widget">
                                    <h2>Nosotros</h2>
                                    <p>Obsidiana nace con la inquietud de expresar creatividad, resaltar la belleza, y dibujar sonrisas.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                    <img src="img/contact/logo_blanco.png" alt="Obsidiana - Micropigmentación">
                                    <!--<div class="footer-widget">
                                    <h2>Quick Links</h2>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Procedures</a></li>
                                        <li><a href="#">Therapists</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>-->
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="footer-widget">
                                    <h2>Información de contacto:</h2>
                                    <ul>
                                        <li><i class="fa fa-send" aria-hidden="true"></i> Tulipanes 125, Blancas Mariposas,  86179 Villahermosa, Tab.</li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i> 993 129 5160</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>obsidiana.negocios@gmail.com</li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="footer-widget">
                                    <h2>Nuestros horarios:</h2>
                                    <ul class="bussiness-hour">
                                        <li>Lunes-Viernes: <span class="pull-right">4:00 pm - 8:00 pm.</span></li>
                                        <li>Sábados y Domingos: <span class="pull-right">9:00 am - 2:00 pm.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="copyright text-center">
                                    <p>&copy;copyright 2019 Obsidiana | All right reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        ';
    }

    
?>

