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
		<title>Mar Adentro - Neiva</title>
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

	<div class="container-fluid bgNeiva">
		<div class="container text-center colorMsgCenter">
			<h1>&nbsp;<!--La Nueva Era de la vivienda en Colombia--></h1>
		</div>
	</div>

	<div class="container-fluid" style="padding: 3%">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<h1>NEIVA</h1>
					<img src="<?php echo _DOMINIO ?>img/big_img13.jpg" class="img-thumbnail"><br><br>
					<p class="pInternas">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br>
					<center><a href="<?php echo _DOMINIO?>files/Brochure.pdf" target="_blank" type="button" class="btn btn-danger fa fa-file-pdf-o" style="padding:2%;border:none">
					    <i class="fa fa-file-pdf-o">
					    	<img src="<?php echo _DOMINIO?>img/bajar.png" />
					    </i> Descargar Brochure
					  </a></center>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
			
		</div>
	</div>


	<div class="container-fluid" style="padding: 3%;background:#f1f1f1">
		<div class="container text-center">

			<div class="row saltoGaleria">
				<div class="col-lg-1 col-md-1 visible-lg visible-md"></div>
				<div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
					<div id="content">
					    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
					        <li class="active"><a href="#red" data-toggle="tab">CURACAO</a></li>
					        <li><a href="#orange" data-toggle="tab">ARUBA</a></li>
					        <li><a href="#yellow" data-toggle="tab">AMENITIES</a></li>
					        <li><a href="#green" data-toggle="tab">UBICACIÓN</a></li>
					        <li><a href="#blue" data-toggle="tab"></a></li>
					    </ul>
					    <div id="my-tab-content" class="tab-content">

					    	<!-- Tab 1-->
					        <div class="tab-pane active" id="red">
					            <h2 class="tituloSeccion text-left">CURACAO</h2>
					            <div class="row saltoGaleria">
										<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
											<div id="myCarousel1" class="carousel slide" data-ride="carousel">
											  <ol class="carousel-indicators">
											  	  <?php $cont2=1;foreach($curacao as $cu2){ ?>
												    <li data-target="#myCarousel1" data-slide-to="0" class="<?php if($cont2==1){ echo 'active';}?>"></li>
												  <?php $cont2++;}?>
											   
											  </ol>
											  <!-- Wrapper for slides -->
											  <div class="carousel-inner" role="listbox">
												  <?php $cont=1;foreach($curacao as $cu1){ ?>
												    <div class="item <?php if($cont==1){ echo 'active';}?>">
												      <a href="<?php echo _DOMINIO?>img/curacao/<?php echo $cu1['img']?>" data-gallery><img  src="<?php echo _DOMINIO?>img/curacao/<?php echo $cu1['img']?>" /></a>
												    </div>
												  <?php $cont++;}?>  
											  </div>
											  <!-- Left and right controls -->
											  <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
											    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											    <span class="sr-only">Anterior</span>
											  </a>
											  <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
											    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											    <span class="sr-only">Siguiente</span>
											  </a>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-left pInternas">


											<h4 class="tituloSeccion"> CURACAO</h4>
											<p class="">
												 Curacao 352 Viviendas: 29 meses. Aptos de 62 m2<br><br>
												Todos los apartamentos tendrán un Valor de 135 SMLV + un paquete de acabados + Fee de Laguna + Parqueaderos.
											</p>
											<!--<a href="img/big_img1.jpg" data-gallery alt="Cocina" title="Cocina">Ver imágenes</a>-->
										</div>
									</div>
					        </div>
					        <!-- Fin Tab 1-->
					        <!-- Tab 2-->
					        <div class="tab-pane" id="orange">
					            <h2 class="tituloSeccion text-left">ARUBA</h2>
					            <div class="row saltoGaleria">
									<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
										<div id="myCarousel3" class="carousel slide" data-ride="carousel">
										  <ol class="carousel-indicators">
										    <?php $cont4=1;foreach($curacao as $cu2){ ?>
											    <li data-target="#myCarousel3" data-slide-to="0" class="<?php if($cont4==1){ echo 'active';}?>"></li>
											  <?php $cont4++;}?>
										  </ol>
										  <!-- Wrapper for slides -->
										  <div class="carousel-inner" role="listbox">
										     <?php $cont3=1;foreach($aruba as $cu3){ ?>
											    <div class="item <?php if($cont3==1){ echo 'active';}?>">
											      <a href="<?php echo _DOMINIO?>img/aruba/<?php echo $cu3['img']?>" data-gallery><img src="<?php echo _DOMINIO?>img/aruba/<?php echo $cu3['img']?>" /></a>
											    </div>
											  <?php $cont3++;}?> 
										  </div>
										  <!-- Left and right controls -->
										  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
										    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										    <span class="sr-only">Previous</span>
										  </a>
										  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
										    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										    <span class="sr-only">Next</span>
										  </a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-left pInternas">
										<h4 class="tituloSeccion"> ARUBA</h4>
										<p class=""> Aruba 528 Viviendas: 17.6 Meses. Aptos de 51, 56 y 65 m2<br><br>
											Todos los apartamentos tendrán un Valor de 135 SMLV + un paquete de acabados + Fee de Laguna + Parqueaderos.</p>
										<!--<a href="img/big_img2.jpg" data-gallery alt="Alcoba" title="Alcoba">Ver imágenes</a>-->
									</div>
								</div>
					        </div>
					        <!-- Fin Tab 2-->
					        <div class="tab-pane" id="yellow">
					            <h2 class="tituloSeccion text-left">AMENITIES</h2>
					           <!-- Inicio galería aennities-->
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
							    <!--<li data-target="#myCarousel" data-slide-to="9"></li>
							    <li data-target="#myCarousel" data-slide-to="10"></li>
							    <li data-target="#myCarousel" data-slide-to="11"></li>
							    <li data-target="#myCarousel" data-slide-to="12"></li>
							    <li data-target="#myCarousel" data-slide-to="13"></li>-->
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">

							  	<!--<div class="item active">
							      <a href="img/big_img0.jpg" data-gallery><img src="img/big_img0.jpg" alt=""></a>
							    </div>-->

							    <!--<div class="item active">
							      <a href="img/big_img13.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img13.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img10.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img10.jpg" alt=""></a>
							    </div>-->

							    <div class="item active">
							      <a href="img/big_img8.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img8.jpg" alt=""></a>
							    </div>

							    <div class="item ">
							      <a href="img/big_img11.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img11.jpg" alt=""></a>
							    </div>

							    <!--<div class="item">
							      <a href="img/big_img12.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img12.jpg" alt=""></a>
							    </div>-->

							    <div class="item">
							      <a href="img/big_img9.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img9.jpg" alt=""></a>
							    </div>

							    <!--<div class="item">
							      <a href="img/big_img5.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img5.jpg" alt=""></a>
							    </div>-->

							    <div class="item">
							      <a href="img/big_img6.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img6.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img7.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img7.jpg" alt=""></a>
							    </div>

							    <div class="item ">
							      <a href="img/big_img1.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img1.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img2.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img2.jpg" alt=""></a>
							    </div>

							    <div class="item">
							      <a href="img/big_img3.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img3.jpg" alt=""></a>
							    </div>

							    <!--<div class="item">
							      <a href="img/big_img4.jpg" data-gallery><img src="<? echo _DOMINIO?>img/big_img4.jpg" alt=""></a>
							    </div>-->
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
					           <!--Fin galerí menities-->
					        </div>
					        <div class="tab-pane" id="green">
					            <h2 class="tituloSeccion text-left">UBICACIÓN</h2>
					            <div class="row">
									<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
										<!--<h2 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.8em;font-weight: 300">Ciudadela NIO, Av. 26 No 41 - 66</h2>
										<h3 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.3em;font-weight: 300">info@vivemaradentro.com.co</h3>
										<h4 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.3em;font-weight: 300">(571) 315 707 6127 </h4>-->
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
									</div>
									<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1407.2215014177818!2d-75.28948233962612!3d2.950528464997472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b7456dbf7af5d%3A0x73d583be25e0dd5b!2sCra.+26+%2341-66%2C+Neiva%2C+Huila!5e0!3m2!1ses!2sco!4v1463068359578" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									
									</div>
								</div>
					        </div>
					        <div class="tab-pane" id="blue">
					            <h2 class="tituloSeccion text-left">Blue</h2>
					            <p>blue blue blue blue blue</p>
					        </div>
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