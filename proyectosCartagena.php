<!--                                                    
     ("`-''-/").___....''"`-._
      `6_ 6  )   `-.  (     ).`-.__.`) 
      (_Y_.)'  ._   )  `._ `. ``-..-'
    _..`..'_..-_/  /..'_.' ,'
   (il),-''  (li),'  ((!.-'

   Desarrollado por  @orugal
-->
<?php 

$aruba[0]['img'] = "1.png";
$aruba[1]['img'] = "2.png";
$aruba[2]['img'] = "3.png";
$aruba[3]['img'] = "4.png";
$aruba[4]['img'] = "5.png";
$aruba[5]['img'] = "6.png";
$aruba[6]['img'] = "7.png";


$curacao[0]['img'] = "1.png";
$curacao[1]['img'] = "2.png";
$curacao[2]['img'] = "3.png";

?>

<?php require("config/configuracion.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mar Adentro - Cartagena</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>css/maInt.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>css/blueimp-gallery.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>css/bootstrap-image-gallery.min.css" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo _DOMINIO?>img/favicon.ico" />
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-79433495-1', 'auto');
		  ga('send', 'pageview');

		</script>
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

	<div class="container-fluid bgAme">
		<div class="container text-center colorMsgCenter">
			<h1>&nbsp;<!--La Nueva Era de la vivienda en Colombia--></h1>
		</div>
	</div>

	<div class="container-fluid" style="padding: 3%">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<h2 class="tituloSeccion text-center">CARTAGENA</h2>
					
					<p class="pInternas">
						La heroica, monumento histórico de la humanidad, brillante,
						internacional y cálida Cartagena tendrá en sus playas el proyecto		
						de Mar Adentro con la categoría Diamante con toda la exclusividad,
						el lujo y la última tendencia en viviendas inteligencias		
						que <strong>Constructora NIO</strong> desarrolla en Colombia.		
					</p><br>
					<a data-toggle="modal" data-target="#legales" style="float:left;cursor:pointer">Notas legales</a>
					<!--
					<center><a href="<?php echo _DOMINIO?>files/Brochure.pdf" target="_blank" type="button" class="btn btn-danger fa fa-file-pdf-o" style="padding:2%;border:none">
					    <i class="fa fa-file-pdf-o">
					    	<img src="<?php echo _DOMINIO?>img/bajar.png" />
					    </i> Descargar Brochure
					  </a></center>-->
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
			
		</div>
	</div>
	<div class="container-fluid" style="padding: 3%;">
		<div class="container">

			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-md visible-lg"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<center>
					    <ul id="tabs" class="nav nav-pills nav-justified">
					        <li><a href="#yellow" data-toggle="tab">AMENITIES</a></li>
					        <li><a href="#green" data-toggle="tab">UBICACIÓN</a></li>
					        <!--<li><a href="#legales"  data-toggle="modal" data-target="#legales">NOTAS LEGALES</a></li>-->
					    </ul>
				    </center>
			    </div>
			    <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-md visible-lg"></div>
		    </div>
		</div>
	</div>

	<div class="container-fluid" style="padding: 3%;background:#f1f1f1">
		<div class="container text-center">

			<div class="row saltoGaleria">
				<div class="col-lg-1 col-md-1 visible-lg visible-md"></div>
				<div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
					<div id="content">
					    <div id="my-tab-content" class="tab-content">

					        <div class="tab-pane" id="yellow">
					            <h2 class="tituloSeccion text-left">AMENITIES</h2>
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
							    <li data-target="#myCarousel" data-slide-to="12"></li>
							    <li data-target="#myCarousel" data-slide-to="13"></li>
							    <li data-target="#myCarousel" data-slide-to="14"></li>
							    <li data-target="#myCarousel" data-slide-to="15"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">

							    <div class="item active	">
							      <a href="<?php echo _DOMINIO?>img/cartagena/10.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/10.jpg" alt=""></a>
							    </div>

							  	<div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/0.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/0.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/1.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/1.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/2.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/2.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/3.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/3.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/4.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/4.jpg" alt=""></a>
							    </div>

							   <!-- <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/5.png" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/5.png" alt=""></a>
							    </div>-->

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/6.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/6.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/7.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/7.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/8.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/8.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/9.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/9.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/11.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/11.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/12.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/12.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/13.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/13.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/14.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/14.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/15.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/15.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="<?php echo _DOMINIO?>img/cartagena/16.jpg" data-gallery><img src="<?php echo _DOMINIO?>img/cartagena/16.jpg" alt=""></a>
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
					        <div class="tab-pane" id="green">
					            <h2 class="tituloSeccion text-left">UBICACIÓN</h2>
					            <div class="row">
									<!--<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">

										<p class="text-left">
											
										</p>
										<h2 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.8em;font-weight: 400;text-transform:uppercase">Neiva</h2>
										<p class="text-left">Sala de ventas: Ciudadela NIO, AV. 26 No. 41-66<br>
										Cel.: (+57) 315 707 6127<br>
										Tel.: (8) 8677190<br>
										info@constructoranio.com</p><br>
										<h2 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.8em;font-weight: 400;text-transform:uppercase">Bogotá</h2>
										<p class="text-left">Constructora NIO S.A.<br>
										Calle 79 No. 8 - 38<br>
										Cel.: (+57) 350 860 1628<br>
										Lunes a Viernes - 8:00 a.m. - 5:30 p.m.</p>
										<br>
										<h2 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.8em;font-weight: 400">UBICACIÓN LOTE</h2>
										<p  class="text-left">
					Ubicado en el sur de la ciudad, zona de gran desarrollo, sobre la avenida al  Caguán<br><br>
										<a href="https://www.google.it/maps/@2.8881221,-75.269591,14z" target="_blank">Ver en Google Maps</a>
					</p>
									</div>-->
									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35858.61345027936!2d-75.50363976608452!3d10.4401745109381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef625e7ae9d1351%3A0xb161392e033f26ca!2sCartagena%2C+Bol%C3%ADvar!5e1!3m2!1ses!2sco!4v1463745167895" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									
									</div>
								</div>
					        </div>
					        <!--<div class="tab-pane" id="blue">
					            <h2 class="tituloSeccion text-left">Blue</h2>
					            <p>blue blue blue blue blue</p>
					        </div>-->
					    </div>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 visible-lg visible-md"></div>
			</div>

		</div>
	</div>

	<?php include("pie.php") ?>



	<script type="text/javascript" src="<?php echo _DOMINIO?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/R-preloadcssimages.jquery.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/jquery.blueimp-gallery.min.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/bootstrap-image-gallery.min.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/ma.js"></script>
	</body>
</html>