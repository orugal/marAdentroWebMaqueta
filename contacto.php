<!--                                                    
     ("`-''-/").___....''"`-._
      `6_ 6  )   `-.  (     ).`-.__.`) 
      (_Y_.)'  ._   )  `._ `. ``-..-'
    _..`..'_..-_/  /..'_.' ,'
   (il),-''  (li),'  ((!.-'

   Desarrollado por  @orugal
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Mar Adentro - Contacto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="css/maInt.css" />
		<link rel="stylesheet" type="text/css" href="css/sweetalert.css" />
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	</head>
	<body>

	<?php include("menu.php") ?>

	<div class="container-fluid bgUbi">
		<div class="container text-center colorMsgCenter">
			<h1>&nbsp;</h1>
		</div>
	</div>

	<div class="container-fluid" style="padding: 3%">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
					<h2 class="tituloSeccion text-left">CONTÁCTANOS</h2><br>
					<!--<h2 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.8em;font-weight: 300">Ciudadela NIO, Av. 26 No 41 - 66</h2>
					<h3 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.3em;font-weight: 300">info@vivemaradentro.com.co</h3>
					<h4 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.3em;font-weight: 300">(571) 315 707 6127 </h4>-->

					<h2 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.8em;font-weight: 400">Neiva</h2>
					<p class="text-left">Sala de ventas: Ciudadela NIO, AV. 26 No. 41-66<br>
					Cel.: (+57) 315 707 6127<br>
					Tel.: (8) 8677190<br>
					info@constructoranio.com</p><br>
					<h2 style="text-align: left;margin:1% 0 0 0 !important;padding:0;font-size: 1.8em;font-weight: 400">Bogotá</h2>
					<p class="text-left">Constructora NIO S.A.<br>
					Calle 79 No. 8 - 38<br>
					Cel.: (+57) 350 860 1628<br>
					Lunes a Viernes - 8:00 a.m. - 5:30 p.m.</p>


				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-left">
				<?php if(isset($_GET['gracias'])){ ?>
					<h2>Gracias por Contactarnos!!.</h2>
					<p>Pronto estaremos en contacto con usted.</p>
				<?php }else{ ?>
					<p>Complete el siguiente formulario y nos pondremos en contacto con usted.</p>
					<form id="contacto" method="post" action="">

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Nombre</label>
					    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Correo Electrónico</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Ejemplo: correo@dominio.com">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Teléfono</label>
					    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Escriba un número de teléfono de contacto">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Comentario</label>
					    <textarea class="form-control" id="comentario" name="comentario" placeholder="Escriba un texto breve de lo que desea saber acerca del proyecto"></textarea>
					  </fieldset>

					   <fieldset class="form-group">
						  <label>
						      <input type="checkbox" name="terminos" id="terminos" value="option3">
						      Conozco y acepto las políticas de datos personales y autorizo el manejo de éstos.
						    </label>
					   </fieldset>
					  <button type="button" class="btn btn-danger"  style="padding:2%;border:none" onclick="ma.sendContacto()">Enviar comentario</button>
					</form>	
				<?php } ?>
					

				</div>
			</div>
			
		</div>
	</div>

	<?php include("pie.php") ?>



	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type='text/javascript' src='js/sweetalert.min.js'></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/R-preloadcssimages.jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ma.js"></script>
	</body>
</html>