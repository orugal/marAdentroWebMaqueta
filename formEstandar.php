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
		<title>Mar Adentro</title>
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

	<?php include("menu.php") ?>

	<div class="container-fluid bgMexico">
		<div class="container text-center colorMsgCenter">
			
		</div>
	</div>



	<div class="container-fluid" style="padding: 3%">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 visible-lg visible-md"></div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<h2 class="tituloSeccion text-center">CONCURSO</h2>
					<p class="pInternas2">
					
					</p>

					<p class="text-left">Complete el siguiente formulario para participar en el concurso.</p>
					<form id="contacto" method="post" action="" class="text-left" enctype="multipart/form-data">

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Nombres</label>
					    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Apellidos</label>
					    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba sus apellidos.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Documento de identidad</label>
					    <input type="text" class="form-control" id="documento" name="documento" placeholder="Número de documento de identidad.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Ciudad</label>
					    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Escriba la ciudad.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Proyecto</label>
					    <select type="text" class="form-control" id="proyecto" name="proyecto" ">
					    	<option value="">Seleccione...</option>
					    	<option value="Curacao">Curacao</option>
					    	<option value="Aruba">Aruba</option>
					    	<option value="Ciudadela nio">Ciudadela NIO</option>
					    </select>
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Torre</label>
					    <input type="text" class="form-control" id="torre" name="torre" placeholder="Escriba el número de la torre.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Apto</label>
					    <input type="text" class="form-control" id="apto" name="apto" placeholder="Escriba el número del apartamento.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Celular</label>
					    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Escriba un número de celular de contacto.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Correo electrónico</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Ejemplo: correo@dominio.com">
					  </fieldset>

					  <!--<fieldset class="form-group">
					    <label for="exampleInputEmail1">Usos</label>
					    <input type="text" class="form-control" id="usos" name="usos" placeholder="Escriba lo usos que puede tener el lote.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Archivo adjunto <span class="small">(Máximo 1 MB. Archivos jpg, png, pdf, doc, docx, xls, xlsx.)</span></label>
					    <input type="file" class="form-control" id="archivo" name="archivo" placeholder="Archivos jpg, png, pdf, doc, docx, xls, xlsx.">
					  </fieldset>

					  <fieldset class="form-group">
					    <label for="exampleInputEmail1">Comentario</label>
					    <textarea class="form-control" id="comentario" name="comentario" placeholder="Escriba una breve reseña."></textarea>
					  </fieldset>-->

					   <fieldset class="form-group">
						  <label>
						      <input type="checkbox" name="terminos" id="terminos" value="option3">
						      Conozco y acepto las políticas de datos personales y autorizo el manejo de éstos.
						    </label>
					   </fieldset>
					  <button type="button" class="btn btn-danger"  style="padding:2%;border:none" onclick="ma.sendConcurso()">Enviar información</button>
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