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
					<h2 class="tituloSeccion text-center" style="text-transform:uppercase">LA NUEVA ERA DE LA VIVIENDA EN COLOMBIA</h2>
					<p class="pInternas2">
 <br><br>
					El azul turquesa del mar cristalino, la arena blanca, el movimiento de las palmeras, la brisa suave
					que golpea nuestro rostro, son vivencias que disfrutamos cuando estamos frente al mar.<br><br>

					<strong>Mar Adentro</strong> es una forma de vida, donde la arquitectura se compagina con su contexto natural y
					se genera un hábitat único y especial.<br><br>

					<strong>Mar Adentro</strong> es una iniciativa privada que trae la única tecnología capaz de crear una experiencia
					Caribe. Así Constructora NIO, en alianza con Crystal Lagoons, creadora de lagunas cristalinas y
					mares interiores que han revolucionado el mercado mundial de vivienda, el amenity top del
					momento, convierten un lugar tradicional en un paraíso idílico.<br><br>

					Sus espacios son diseñados para ser altamente eficientes, con precios acordes a las necesidades de
					sus habitantes, haciéndolo un proyecto integral en tres categorías: Oro, Platino y Diamante.
					</p>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
		</div>
	</div>


	<div class="container-fluid" style="padding: 3%;">
		<div class="container">
			<div class="row" >
				<div class="col-lg-1 col-md-1 col-xs-12 col-sm-12 visible-md visible-lg"></div>
				<div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
					    <ul id="tabs" class="nav nav-pills nav-justified">
					        <li class=""><a class="pestMarA" href="#gold" data-toggle="tab"><strong>MAR ADENTRO ORO</strong></a></li>
					        <li><a class="pestMarA" href="#platino" data-toggle="tab"><strong>MAR ADENTRO PLATINO</strong></a></li>
					        <li><a class="pestMarA" href="#diamante" data-toggle="tab"><strong>MAR ADENTRO DIAMANTE</strong></a></li>
					    </ul>
			    </div>
			    <div class="col-lg-1 col-md-1 col-xs-12 col-sm-12 visible-md visible-lg"></div>
		    </div>
		</div>
	</div>
	<div class="container-fluid" style="padding: 3%;background: #f7f7f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-10 col-md-10 col-xs-12 col-sm-12">
					<div id="content" >
						
					
					    <div id="my-tab-content" class="tab-content">

					    	<!-- Tab 1-->
					        <div class="tab-pane" id="gold">
					            <h2 class="tituloSeccion text-left">MAR ADENTRO ORO</h2>
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
								<p class="pInternas2"><br>
										El oro se asocia con felicidad, lujo y exclusividad. Entre sus mayores
										propiedades está su calidad pues después de muchos años mantiene intacto el
										brillo del primer día. Y es con esas cualidades que <strong>Constructora NIO</strong> creó esta
										categoría Oro.<br><br>

										Como el metal dorado este proyecto quiere llevar a sus residentes y visitantes a
										hacer posible su sueño de vivir cómodamente, con hermosos espacios dotados
										con el equipamiento necesario para gozar en familia, en pareja o entre amigos
										disfrutando de momentos únicos por siempre.<br><br>

										Para la <strong>Constructora NIO</strong> la categoría Oro significa dar la mejor calidad a
										quienes aprecian esta alternativa de vivienda.
								</p>
					            
					        </div>
					        <!-- Fin Tab 1-->

					        <!-- Tab 2-->
					        <div class="tab-pane" id="platino">
					           <h2 class="tituloSeccion text-left">MAR ADENTRO PLATINO</h2>
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
								<p class="pInternas2"><br>
										La experiencia Platino evoca ese metal noble que se destaca como el símbolo
										de un estilo vanguardista, con bellas y muy completas posibilidades que
										satisfacen los deseos de sus habitantes, quienes gozarán de mayores espacios
										para compartir con amigos y seres queridos.<br><br>
										El Platino evoca la modernidad, originalidad, lo liviano, la luz y la exclusividad
										que caracterizan los proyectos Platino.<br><br>
										En estos espacios podrán disfrutar de ambientes cómodos, contemporáneos,
										armónicos con la naturaleza y muy exclusivos.
								</p>

					        </div>
					        <!-- Fin Tab 2-->

					        <!-- Tab 3-->
					        <div class="tab-pane" id="diamante">
					            <h2 class="tituloSeccion text-left">MAR ADENTRO DIAMANTE</h2>
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
								<p class="pInternas2"><br>
									Mar Adentro Diamante es perfección, pureza, triunfo, firmeza, dureza, brillo y
									luminosidad, las características de esta categoría de NIO en su proyecto <strong>Mar Adentro</strong>. <br><br>

									Aquí la sofisticación, la comodidad y la exquisitez de esta piedra preciosa
									garantizan el bienestar, claves de una experiencia Diamante. <br><br>

									El Diamante es único por excelencia, y así es su categoría en <strong>Mar Adentro</strong>. <br><br>

									Nuestra meta es brindar la mejor sensación a quien disfrute de estos lugares,
									dotados con soluciones de última tecnología, en proyectos exclusivos que
									plantean viviendas inteligentes, acabados de lujo, conexión con la naturaleza,
									arquitectura personalizada dirigida a necesidades específicas y espacios que
									ayudarán a soñar, convirtiéndolo en el sitio ideal para ser feliz.
								</p>

					        </div>
					        <!-- Fin tab 3-->
					    </div>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-12 col-sm-12 visible-lg visible-md"></div>
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
	</body>
</html>