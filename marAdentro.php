<!--                                                    
     ("`-''-/").___....''"`-._
      `6_ 6  )   `-.  (     ).`-.__.`) 
      (_Y_.)'  ._   )  `._ `. ``-..-'
    _..`..'_..-_/  /..'_.' ,'
   (il),-''  (li),'  ((!.-'

   Desarrollado por  @orugal
-->
<?php 

$gold[0]['img'] = "gold/1.jpg";
$gold[1]['img'] = "gold/2.jpg";
$gold[2]['img'] = "gold/3.jpg";
//$gold[3]['img'] = "gold/4.jpg";
$gold[3]['img'] = "gold/5.jpg";


$plat[0]['img'] = "plat/1.jpg";
$plat[1]['img'] = "plat/2.jpg";
$plat[2]['img'] = "plat/3.jpg";
//$plat[3]['img'] = "plat/4.jpg";
$plat[3]['img'] = "plat/5.jpg";

$dia[0]['img'] = "dia/1.jpg";
$dia[1]['img'] = "dia/2.jpg";
$dia[2]['img'] = "dia/3.jpg";
$dia[3]['img'] = "dia/4.jpg";

?>
<?php require("config/configuracion.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mar Adentro - Proyectos</title>
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
			<h1>&nbsp;<!--Una iniciativa privada lleva el mar al interior de Colombia--></h1>
		</div>
	</div>

	<div class="container-fluid" style="padding: 3%">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
					<h2 class="tituloSeccion text-center">MAR ADENTRO</h2>
					<p class="pInternas2">
					<strong>Mar Adentro</strong> es la nueva era de la vivienda en Colombia al introducir en las
					soluciones de vivienda el mar y la arena blanca, elementos que llevará a las
					principales ciudades como Neiva, Ibagué, Montería, Valledupar, Cartagena y
					Flandes, entre otras.<br><br>
					<strong>Mar Adentro</strong> es una iniciativa privada que trae la única tecnología capaz de
					crear una experiencia Caribe. Así <strong>Constructora NIO</strong> mediante alianzas
					internacionales, cambia por completo el estilo de vida de los colombianos.
					Se trata de una laguna cristalina de gran formato y una playa con las múltiples
					sensaciones que esta despierta al fundirse el azul de la laguna con el del cielo
					en un efecto espejo único, relajante, divertido y refrescante.
					En <strong>Mar Adentro</strong> las viviendas están alrededor de la gran laguna, lo que se
					hace posible en equipo con su aliada líder mundial Crystal Lagoons, creadora
					de lagunas cristalinas y mares interiores que han revolucionado el mercado
					mundial de vivienda, el amenity top del momento, al convertir un lugar
					tradicional en un paraíso idílico.<br><br>

					<strong>Mar Adentro</strong> eleva así la calidad y estilo de vida de los colombianos.
					Los proyectos van a estar en categorías Gold, Platino y Diamante de acuerdo
					con las características de diversos tipos de apartamentos.<br><br>
<!--
					<strong>Mar Adentro Gold:</strong> conjuntos residenciales con viviendas de $40 a $ 200
					Millones, acabados básicos e índices de ocupación de lote de más del 40%.
					Tiene mesón de la cocina, mueble inferior de la cocina, piso en porcelanato,
					paredes pintadas y terminadas; carpintería en madera básica, clósets y mueble
					inferior del baño. Todo el apartamento se entrega terminado con carpintería en las
					alcobas, todas las puertas y los clósets.<br><br>
					<strong>Mar Adentro Platino:</strong> viviendas entre $ 200 y $ 500 Millones, acabados
					intermedios e índices de ocupación de lote entre 30% y 40%.
					Los acabados intermedios tienen mesón de la cocina, mueble inferior de la cocina,
					piso en porcelanato, paredes pintadas y terminadas; carpintería en madera básica,
					clósets y mueble inferior del baño. Todo el apartamento se entrega terminado con
					carpintería en las alcobas, todas las puertas y los clósets.
					Los clósets vienen con varios cajones, las puertas de los clósets son de una
					madera de alta calidad con un diseño de vanguardia; el apartamento tiene
					acabados finos, como el mesón del baño en mármol y trae accesorios como tomas
					y enchufes básicos.<br><br>
					<strong>Mar Adentro Diamante:</strong> viviendas de más de $ 500 Millones, acabados de lujo e
					índices de ocupación de lote menores al 30%.
					Con acabados de lujo en materiales y mármoles importados, iluminaciones de
					vanguardia, con domótica, controlado desde el ipad la persiana de la cocina, el
					aire acondicionado, con elevados estándares de calidad.
					El porcentaje de ocupación es inferior, lo cual le da mayor espacio para zonas
					verdes, parqueaderos, parques para los niños, mayor espacio entre torres, y otros
					beneficios exclusivos de este formato.
					</p>-->

					<!--<br>
					<center><a href="files/Brochure.pdf" target="_blank" type="button" class="btn btn-danger fa fa-file-pdf-o" style="padding:2%;border:none">
					    <i class="fa fa-file-pdf-o">
					    	<img src="img/bajar.png" />
					    </i> Descargar Brochure
					  </a></center>-->
				</div>
				<div class="col-lg-1 col-md-1 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="padding: 3%;background: #f7f7f7">
		<div class="container">

			<div class="row" >
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
					<h2 class="text-left visible-xs visible-sm">Mar Adentro Gold</h2>
					<hr class="visible-sm visible-xs">
					<div id="myCarousel1" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					  	  <?php $cont2=1;foreach($gold as $cu2){ ?>
						    <li data-target="#myCarousel1" data-slide-to="0" class="<?php if($cont2==1){ echo 'active';}?>"></li>
						  <?php $cont2++;}?>
					    
					  </ol>

					  
					  <div class="carousel-inner" role="listbox">
						  <?php $cont=1;foreach($gold as $cu1){ ?>
						    <div class="item <?php if($cont==1){ echo 'active';}?>">
						      <a href="img/<?php echo $cu1['img']?>" data-gallery><img  src="img/<?php echo $cu1['img']?>" width="100%"/></a>
						    </div>
						  <?php $cont++;}?>  
					  </div>

					  
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
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
					<h2 class="text-left visible-md visible-lg">Mar Adentro Gold</h2>
					<hr>
					<p class="pInternas2">
						Como el metal dorado Gold quiere llevar a sus residentes y visitantes a hacer posible su sueño de vivir bien, con hermosos espacios alrededor de los apartamentos, dotados con el equipamiento necesario para compartir  momentos únicos en familia, en pareja o entre amigos.
						Para la <strong>Constructora NIO</strong> la categoría Gold significa darle la mejor calidad a quienes apreciarán esta solución de vivienda.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="padding: 3%;">
		<div class="container">		

			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 visible-sm visible-xs">
					<h2 class="text-left  visible-sm visible-xs">Mar Adentro Platino</h2>
					<hr>
					<div id="myCarousel4" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					  	  <?php $cont2=1;foreach($plat as $cu2){ ?>
						    <li data-target="#myCarousel4" data-slide-to="0" class="<?php if($cont2==1){ echo 'active';}?>"></li>
						  <?php $cont2++;}?>
					    
					  </ol>

					  
					  <div class="carousel-inner" role="listbox">
						  <?php $cont=1;foreach($plat as $cu1){ ?>
						    <div class="item <?php if($cont==1){ echo 'active';}?>">
						      <a href="img/<?php echo $cu1['img']?>" data-gallery ><img  src="img/<?php echo $cu1['img']?>" width="100%"/></a>
						    </div>
						  <?php $cont++;}?>  
					  </div>

					  
					  <a class="left carousel-control" href="#myCarousel4" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Anterior</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel4" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Siguiente</span>
					  </a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
					<h2 class="text-left  visible-md visible-lg">Mar Adentro Platino</h2>
					<hr>
					<p class="pInternas2">
						La experiencia Platino se destaca por un estilo vanguardista, con bellas y muy completas soluciones de vivienda, que satisfacen los deseos de sus habitantes, quienes gozarán de mayores espacios para compartir con amigos y seres queridos.<br><br>
						La categoría Platino evoca lo moderno que permitirá diversos usos a estas viviendas cuya característica es la originalidad, lo liviano y la luz.<br><br>
						Al interior de estos apartamentos se disfrutará mayor amplitud, con materiales de calidad que facilitan la creación de ambientes cómodos, independientes y armónicos.
					</p>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 visible-md visible-lg">
					<div id="myCarousel2" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					  	  <?php $cont2=1;foreach($plat as $cu2){ ?>
						    <li data-target="#myCarousel2" data-slide-to="0" class="<?php if($cont2==1){ echo 'active';}?>"></li>
						  <?php $cont2++;}?>
					    
					  </ol>

					  
					  <div class="carousel-inner" role="listbox">
						  <?php $cont=1;foreach($plat as $cu1){ ?>
						    <div class="item <?php if($cont==1){ echo 'active';}?>">
						      <a href="img/<?php echo $cu1['img']?>" data-gallery ><img  src="img/<?php echo $cu1['img']?>" width="100%"/></a>
						    </div>
						  <?php $cont++;}?>  
					  </div>

					  
					  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Anterior</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Siguiente</span>
					  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="padding: 3%;background: #f7f7f7">
		<div class="container">

			<div class="row" >
				
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
					<h2 class="text-left visible-sm visible-xs">Mar Adentro Diamante</h2>
					<hr class="visible-sm visible-xs">
					<div id="myCarousel3" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					  	  <?php $cont2=1;foreach($dia as $cu2){ ?>
						    <li data-target="#myCarousel3" data-slide-to="0" class="<?php if($cont2==1){ echo 'active';}?>"></li>
						  <?php $cont2++;}?>
					    
					  </ol>

					  
					  <div class="carousel-inner" role="listbox">
						  <?php $cont=1;foreach($dia as $cu1){ ?>
						    <div class="item <?php if($cont==1){ echo 'active';}?>">
						      <a href="img/<?php echo $cu1['img']?>" data-gallery ><img  src="img/<?php echo $cu1['img']?>" width="100%"/></a>
						    </div>
						  <?php $cont++;}?>  
					  </div>

					  
					  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Anterior</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Siguiente</span>
					  </a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
					<h2 class="text-left visible-lg visible-md">Mar Adentro Diamante</h2>
					<hr>
					<p class="pInternas2">
						Esta es la joya de <strong>Mar Adentro</strong>. Aquí la sofisticación, la comodidad y la exquisitez de esta piedra preciosa garantizan el bienestar, claves de una experiencia Diamante.<br><br>
						El Diamante es pureza, único por excelencia, y así es su categoría en MarAdentro.
						Nuestra meta con Diamante es brindar la mejor sensación a quien disfrute de estos lugares, dotados con soluciones de última tecnología, en apartamentos inteligentes, acabados de lujo, vistas hacia bellos paisajes y extensos espacios que ayudarán a soñar, convirtiéndolo en el sitio ideal para ser feliz.
					</p>
				</div>
			</div>

		</div>
	</div>


<!--
	<div class="container-fluid" style="padding: 3%;background: #f7f7f7">
		<div class="container text-center">
			<div class="row saltoGaleria">
				
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
					<div id="myCarousel1" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					  	  <?php $cont2=1;foreach($gold as $cu2){ ?>
						    <li data-target="#myCarousel1" data-slide-to="0" class="<?php if($cont2==1){ echo 'active';}?>"></li>
						  <?php $cont2++;}?>
					    
					  </ol>

					  
					  <div class="carousel-inner" role="listbox">
						  <?php $cont=1;foreach($gold as $cu1){ ?>
						    <div class="item <?php if($cont==1){ echo 'active';}?>">
						      <a href="img/curacao/<?php echo $cu1['img']?>" data-gallery><img  src="img/curacao/<?php echo $cu1['img']?>" /></a>
						    </div>
						  <?php $cont++;}?>  
					  </div>

					  
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
					
				</div>
				
			</div>


			<div class="row saltoGaleria">
				
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 visible-sm visible-xs">
					<div id="myCarousel3" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <?php $cont4=1;foreach($gold as $cu2){ ?>
						    <li data-target="#myCarousel3" data-slide-to="0" class="<?php if($cont4==1){ echo 'active';}?>"></li>
						  <?php $cont4++;}?>
					  </ol>

					  
					  <div class="carousel-inner" role="listbox">
					     <?php $cont3=1;foreach($aruba as $cu3){ ?>
						    <div class="item <?php if($cont3==1){ echo 'active';}?>">
						      <a href="img/aruba/<?php echo $cu3['img']?>" data-gallery><img src="img/aruba/<?php echo $cu3['img']?>" /></a>
						    </div>
						  <?php $cont3++;}?> 
					  </div>

					  
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
					
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 visible-lg visible-md">
					<div id="myCarousel2" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					     <?php $cont6=1;foreach($gold as $cu5){ ?>
						    <li data-target="#myCarousel2" data-slide-to="0" class="<?php if($cont6==1){ echo 'active';}?>"></li>
						  <?php $cont6++;}?>
					  </ol>

					  
					  <div class="carousel-inner" role="listbox">
					    <?php $cont5=1;foreach($aruba as $cu4){ ?>
						    <div class="item <?php if($cont5==1){ echo 'active';}?>">
						      <a href="img/aruba/<?php echo $cu4['img']?>" data-gallery><img src="img/aruba/<?php echo $cu4['img']?>" /></a>
						    </div>
						  <?php $cont5++;}?> 
					  </div>

					  
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
				
			</div>


		</div>
	</div>-->

	<?php include("pie.php") ?>



	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/R-preloadcssimages.jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.blueimp-gallery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-image-gallery.min.js"></script>
	<script type="text/javascript" src="js/ma.js"></script>
	</body>
</html>