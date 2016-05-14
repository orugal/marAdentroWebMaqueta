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

	<div class="container-fluid bgGaleria">
		<div class="container text-center colorMsgCenter">
			<h1>La Nueva Era de la vivienda en Colombia</h1>
		</div>
	</div>

	<div class="container-fluid" style="padding: 3%">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<h2 class="tituloSeccion">NEIVA</h2>
					<!--<p class="pInternas2">
					Una iniciativa privada lleva por primera vez el mar a ciudades intermedias
					Un Mar artificial y arena blanca en el centro del país, en Neiva, Huila, el Caribe en
					el corazón de Colombia, es lo que hace posible la Constructora NIO al traer la
					única tecnología en el mundo mediante alianzas internacionales en el gran
					proyecto privado inmobiliario, <strong>Mar Adentro</strong>, que cambiará por completo el estilo
					de vida en la región y será pionero en el país pues su concepto se extenderá a
					Ibagué, Montería, Valledupar, Cartagena y Flandes.<br><br>
					Es el primer proyecto en Colombia con una laguna cristalina de gran formato, que
					transporta a los visitantes y residentes al Caribe al fundirse el azul de la laguna
					con el del cielo en un efecto espejo único, relajante, divertido y refrescante a 38
					grados centígrados en el sur de Neiva, en una zona exclusiva para <strong>Mar Adentro</strong>.
					En <strong>Mar Adentro</strong> las viviendas están alrededor de la gran laguna, lo que se hace
					posible en alianza con la líder mundial en la tecnología, Crystal Lagoons,
					creadora de lagunas cristalinas y mares interiores revolucionando el mercado
					mundial de vivienda, el amenity top del momento que transforma un lugar
					tradicional en un paraíso idílico.
					<strong>Mar Adentro</strong> eleva así la calidad y estilo de vida del colombiano durante los 12

					meses del año.
					</p>-->
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
			
		</div>
	</div>


	<div class="container-fluid" style="padding: 3%;">
		<div class="container text-center">
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


			<div class="row saltoGaleria">
				
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 visible-sm visible-xs">
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
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 visible-lg visible-md">
					<div id="myCarousel2" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					     <?php $cont6=1;foreach($curacao as $cu5){ ?>
						    <li data-target="#myCarousel2" data-slide-to="0" class="<?php if($cont6==1){ echo 'active';}?>"></li>
						  <?php $cont6++;}?>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <?php $cont5=1;foreach($aruba as $cu4){ ?>
						    <div class="item <?php if($cont5==1){ echo 'active';}?>">
						      <a href="<?php echo _DOMINIO?>img/aruba/<?php echo $cu4['img']?>" data-gallery><img src="<?php echo _DOMINIO?>img/aruba/<?php echo $cu4['img']?>" /></a>
						    </div>
						  <?php $cont5++;}?> 
					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
				
				
				
				<div  class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-left pInternas">
					<br>
					<center><a href="<?php echo _DOMINIO?>files/Brochure.pdf" target="_blank" type="button" class="btn btn-danger fa fa-file-pdf-o" style="padding:2%;border:none">
					    <i class="fa fa-file-pdf-o">
					    	<img src="<?php echo _DOMINIO?>img/bajar.png" />
					    </i> Descargar Brochure
					  </a></center>
				</div>
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