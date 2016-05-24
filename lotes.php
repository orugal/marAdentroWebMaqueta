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
		<title>Mar Adentro - Lotes Mar Adentro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="css/maInt.css" />
		<link rel="stylesheet" type="text/css" href="css/sweetalert.css" />
		<link rel="stylesheet" type="text/css" href="css/blueimp-gallery.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-image-gallery.min.css" />
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	</head>
	<body>

	<?php include("menu.php") ?>

	<div class="container-fluid bgCrystal">
		<div class="container text-center colorMsgCenter">
			
		</div>
	</div>



	<div class="container-fluid" style="padding: 3%">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<h2 class="tituloSeccion text-center">LOTES MAR ADENTRO</h2>
					<p class="pInternas2">
					Mar Adentro es un producto que permite su desarrollo en nuevos sitios por lo cual el
					proyecto contempla la posibilidad de desarrollar el concepto en lotes mínimo de 20
					hectáreas en adelante, de tal manera que quien desee que se lleve a su región y tenga el
					espacio disponible se contacte con Constructora NIO.
<br><br>
					</p>

					<p class="text-left">Complete el siguiente formulario y nos pondremos en contacto con usted.</p>
					<form id="contacto" method="post" action="" class="text-left">

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Nombre</label>
					    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Correo electrónico</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Ejemplo: correo@dominio.com">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Celular</label>
					    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Escriba un número de celular de contacto.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Área del lote</label>
					    <input type="text" class="form-control" id="area" name="area" placeholder="Escriba el área del lote en metros cuadrados.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Ubicación</label>
					    <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Escriba la ubicación del lote.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Usos</label>
					    <input type="text" class="form-control" id="usos" name="usos" placeholder="Escriba lo usos que puede tener el lote.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Comentario</label>
					    <textarea class="form-control" id="comentario" name="comentario" placeholder="Escriba un texto breve que nos ayude con la descripción del lote."></textarea>
					  </fieldset>

					   <fieldset class="form-group">
						  <label>
						      <input type="checkbox" name="terminos" id="terminos" value="option3">
						      Conozco y acepto las políticas de datos personales y autorizo el manejo de éstos.
						    </label>
					   </fieldset>
					  <button type="button" class="btn btn-danger"  style="padding:2%;border:none" onclick="ma.sendLotes()">Enviar comentario</button>
					</form>
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
			</div>
			
		</div>
	</div>

	<?php include("pie.php") ?>



	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/R-preloadcssimages.jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type='text/javascript' src='js/sweetalert.min.js'></script>
	<script type="text/javascript" src="js/jquery.blueimp-gallery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-image-gallery.min.js"></script>
	<script type="text/javascript" src="js/ma.js"></script>

	</body>
</html>