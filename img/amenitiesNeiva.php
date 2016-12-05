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
		<title>Mar Adentro - Amenities</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo _DOMINIO?>css/maInt.css" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo _DOMINIO?>img/favicon.ico" />
	</head>
	<body>

	<?php include("menu.php") ?>

	<div class="container-fluid bgAme">
		<div class="container text-center colorMsgCenter">
			<h1>Excelente calidad y estilo de vida</h1>
		</div>
	</div>

	<div class="container-fluid" style="padding: 3%">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<h2 class="tituloSeccion">AMENITIES</h2>
					<p class="pInternas2">
						Con el lanzamiento del proyecto las viviendas estarán alrededor de la gran laguna
						y así comienza una nueva era en la vivienda en Colombia. Se hace posible en
						alianza con la líder mundial en la tecnologìa, <strong>Crystal Lagoons</strong>, creadora de
						lagunas cristalinas y mares interiores revolucionando el mercado mundial de
						vivienda, el amenity top del momento que transforma un lugar tradicional en un
						paraíso idílico. 
						<strong>Mar Adentro</strong> eleva la calidad y estilo de vida del colombiano durante los 12 meses
						del año.
					</p>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
			
		</div>
	</div>

	<div class="container-fluid bgAmenities1 amenities">
		<div class="container text-center colorMsgCenter">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<h1>PARQUES</h1>
					<p>Los parques son un distintivo para sentir el ambiente del Huila en medio de un lugar paradisiaco.</p><br>
					<a href="<?php echo _DOMINIO?>#" class="btn btn-ameni">Ver Imágenes</a>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
		</div>
	</div>


	<div class="container-fluid bgAmenities2 amenities">
		<div class="container text-center colorMsgCenter">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<h1>CLUB PLAYA</h1>
					<p>Encontrarás piscina, vela, kayak, club de bote, gym exterior, canchas múltiples de

tenis, fútbol, basket ball, skateboard, ciclovía, áreas de plazas y espacios de

contemplación.</p><br>
					<a href="<?php echo _DOMINIO?>#" class="btn btn-ameni">Ver Imágenes</a>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
		</div>
	</div>

<!--
	<div class="container-fluid bgAmenities3 amenities">
		<div class="container text-center colorMsgCenter">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<h1>VIVIENDA</h1>
					<p>Es un espacio de vivienda y recreación en un lote de gran extensión con lagunas

que ocuparán grandes terrenos, playas de arenas blancas, urbanismo con vías de

altos estándares, club social, senderos ecológicos, parques y áreas de

esparcimiento, así como una zona comercial.

Hermosos apartamentos llenos de luz, con diseños modernos y acabados, con

vista a la laguna.</p><br>
					<a href="<?php echo _DOMINIO?>#" class="btn btn-ameni">Ver Imágenes</a>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
		</div>
	</div>-->


	

	<?php include("pie.php") ?>



	<script type="text/javascript" src="<?php echo _DOMINIO?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/R-preloadcssimages.jquery.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo _DOMINIO?>js/ma.js"></script>
	</body>
</html>