<!--                                                    
     ("`-''-/").___....''"`-._
      `6_ 6  )   `-.  (     ).`-.__.`) 
      (_Y_.)'  ._   )  `._ `. ``-..-'
    _..`..'_..-_/  /..'_.' ,'
   (il),-''  (li),'  ((!.-'

   Desarrollado por  @orugal
-->

<?php require("config/configuracion.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mar Adentro - Galerías</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="css/maInt.css" />
		<link rel="stylesheet" type="text/css" href="css/blueimp-gallery.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-image-gallery.min.css" />
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	</head>
	<body>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false" style="display: none;">
    <!-- The container for the modal slides -->
    <div class="slides" style="width: 24320px;"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"> </h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Anterior
                    </button>
                    <button type="button" class="btn btn-primary next">
                        siguiente
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


	<?php include("menu.php") ?>

	<div class="container-fluid bgGaleria">
		<div class="container text-center colorMsgCenter">
			<!--<h1>Lorem ipsum dolor sit amet</h1>-->
		</div>
	</div>



	<div class="container-fluid" style="padding: 3%;">
		<div class="container text-center">
			<div class="row saltoGaleria">
				<h2 class="tituloSeccion text-left">GALERÍA</h2><br>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 text-left pInternas"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">

					<div id="myCarousel" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							    <li data-target="#myCarousel" data-slide-to="1"></li>
							    <li data-target="#myCarousel" data-slide-to="2"></li>
							    <li data-target="#myCarousel" data-slide-to="3"></li>
							    <li data-target="#myCarousel" data-slide-to="4"></li>
							    <li data-target="#myCarousel" data-slide-to="5"></li>
							    <li data-target="#myCarousel" data-slide-to="6"></li>
							    <li data-target="#myCarousel" data-slide-to="7"></li>
							    <li data-target="#myCarousel" data-slide-to="8"></li>
							    <li data-target="#myCarousel" data-slide-to="9"></li>
							    <li data-target="#myCarousel" data-slide-to="10"></li>
							    <li data-target="#myCarousel" data-slide-to="11"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">

							  	<!--<div class="item active">
							      <a href="img/big_img0.jpg" data-gallery><img src="img/big_img0.jpg" alt=""></a>
							    </div>-->

							    <div class="item active">
							      <a href="img/big_img10.jpg" data-gallery><img src="img/big_img10.jpg" alt=""></a>
							    </div>

							    <div class="item ">
							      <a href="img/big_img11.jpg" data-gallery><img src="img/big_img11.jpg" alt=""></a>
							    </div>

							    <div class="item ">
							      <a href="img/big_img8.jpg" data-gallery><img src="img/big_img8.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img9.jpg" data-gallery><img src="img/big_img9.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img5.jpg" data-gallery><img src="img/big_img5.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img6.jpg" data-gallery><img src="img/big_img6.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img7.jpg" data-gallery><img src="img/big_img7.jpg" alt=""></a>
							    </div>

							    <div class="item ">
							      <a href="img/big_img1.jpg" data-gallery><img src="img/big_img1.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img2.jpg" data-gallery><img src="img/big_img2.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img3.jpg" data-gallery><img src="img/big_img3.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img4.jpg" data-gallery><img src="img/big_img4.jpg" alt=""></a>
							    </div>
							  </div>

							  <!-- Left and right controls -->
							  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 text-left pInternas">
					<!--<h4 class="tituloSeccion">COCINA</h4>-->
					<!--<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>-->
					<!--<a href="img/big_img1.jpg" data-gallery alt="Cocina" title="Cocina">Ver imágenes</a>-->
				</div>
			</div>
		</div>
	</div>

	<?php include("pie.php") ?>



	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/R-preloadcssimages.jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.blueimp-gallery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-image-gallery.min.js"></script>
	<script type="text/javascript" src="js/ma.js"></script>
	<script type="text/javascript">
		$(document).ready(function{
			$('.carousel').carousel({
			  interval: 2000
			})
		});
	</script>
	</body>
</html>