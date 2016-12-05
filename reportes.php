<?php
/*
* archivo para exportar Excel
* Genera los reportes en Excel
* @author Farez Prieto
*/
session_start();
require('config/configuracion.php');
require('config/conexion.php');
require('core/phpmailer/class.phpmailer.php');
require('core/funciones.class.php');
$funciones = new Funciones();
global $db;

if(isset($_POST['entrar']))
{
	if($_POST['usuario'] == "")
	{
		$error = "Debe escribir el usuario";
	}
	elseif($_POST['clave'] == "")
	{
		$error = "Debe escribir la clave de acceso";
	}
	else
	{
		if($_POST['usuario'] ==="admin" && $_POST['clave']==="maradentro2016")
		{
			$_SESSION['marAdentro'] = 1;
			echo "<script>document.location='reportes'</script>";
		}	
		else
		{
			$error = "usuario o clave incorrectos, por favor verifique";
		}
	}
}

if(isset($_GET['r']))
{
	if(isset($_SESSION['marAdentro']))
	{
		if($_GET['r'] == 1)//contacto
		{
			$query 		= sprintf("SELECT * FROM contacto");
			$result	    = $db->getAll($query);
			$n 			= "Reporte Contactos";
		}
		elseif($_GET['r'] == 2)//lotes
		{
			$query 		= sprintf("SELECT * FROM lotes");
			$result	    = $db->getAll($query);
			$n 			= "Reporte Lotes";
		}
		elseif($_GET['r'] == 3)//concurso
		{
			$query 		= sprintf("SELECT * FROM concursoMexico");
			$result	    = $db->getAll($query);
			$n 			= "Reporte Concurso México";
		}
		//var_dump($result);
		//pinto la tabla
		$tabla = "<table border='none' cellspacing='0' cellpadding='0'>";
			$tabla .= "<tr>";
				foreach ($result[0] as $key => $value) 
				{
					$tabla .= "<td style='border:1px solid #000'><strong>".strtoupper($key)."</strong></td>";
				}
			$tabla .= "</tr>";

			foreach($result as $value2) 
			{
				$tabla .= "<tr>";
				foreach($value2 as $key2 =>$val)
				{
					$tabla .= "<td style='border:1px solid #000'>".$val."</td>";
				}
				$tabla .= "</tr>";
			}
		$tabla .= "<table>";

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$n.'.xls"');
		header('Cache-Control: max-age=0');
		echo $tabla;
		die();
	}
	else
	{
		echo "<script>document.location='reportes'</script>";
	}
}

?>



<!DOCTYPE html>
<html>
	<head>
		<title>Reportes</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="css/ma.css" />
		<link rel="stylesheet" type="text/css" href="css/full-slider.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
		<style>
		/*
		 * Specific styles of signin component
		 */
		/*
		 * General styles
		 */
		body, html {
		    height: 100%;
		    background:#f6f6f6;
		}

		.card-container.card {
		    max-width: 350px;
		    padding: 40px 40px;
		}

		.btn {
		    font-weight: 700;
		    height: 36px;
		    -moz-user-select: none;
		    -webkit-user-select: none;
		    user-select: none;
		    cursor: default;
		}

		/*
		 * Card component
		 */
		.card {
		    background-color: #F7F7F7;
		    /* just in case there no content*/
		    padding: 20px 25px 30px;
		    margin: 0 auto 25px;
		    margin-top: 50px;
		    /* shadows and rounded borders */
		    -moz-border-radius: 2px;
		    -webkit-border-radius: 2px;
		    border-radius: 2px;
		    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}

		.profile-img-card {
		    width: 60%;
		    margin: 0 auto 10px;
		    display: block;
		    -moz-border-radius: 50%;
		    -webkit-border-radius: 50%;
		    border-radius: 50%;
		}

		/*
		 * Form styles
		 */
		.profile-name-card {
		    font-size: 16px;
		    font-weight: bold;
		    text-align: center;
		    margin: 10px 0 0;
		    min-height: 1em;
		}

		.reauth-email {
		    display: block;
		    color: #404040;
		    line-height: 2;
		    margin-bottom: 10px;
		    font-size: 14px;
		    text-align: center;
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		    -moz-box-sizing: border-box;
		    -webkit-box-sizing: border-box;
		    box-sizing: border-box;
		}

		.form-signin #inputEmail,
		.form-signin #inputPassword {
		    direction: ltr;
		    height: 44px;
		    font-size: 16px;
		}

		.form-signin input[type=email],
		.form-signin input[type=password],
		.form-signin input[type=text],
		.form-signin button {
		    width: 100%;
		    display: block;
		    margin-bottom: 10px;
		    z-index: 1;
		    position: relative;
		    -moz-box-sizing: border-box;
		    -webkit-box-sizing: border-box;
		    box-sizing: border-box;
		}

		.form-signin .form-control:focus {
		    border-color: rgb(104, 145, 162);
		    outline: 0;
		    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
		    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
		}

		.btn.btn-signin {
		    /*background-color: #4d90fe; */
		    background-color: rgb(104, 145, 162);
		    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
		    padding: 0px;
		    font-weight: 700;
		    font-size: 14px;
		    height: 36px;
		    -moz-border-radius: 3px;
		    -webkit-border-radius: 3px;
		    border-radius: 3px;
		    border: none;
		    -o-transition: all 0.218s;
		    -moz-transition: all 0.218s;
		    -webkit-transition: all 0.218s;
		    transition: all 0.218s;
		}

		.btn.btn-signin:hover,
		.btn.btn-signin:active,
		.btn.btn-signin:focus {
		    
		}

		.forgot-password {
		    color: rgb(104, 145, 162);
		}

		.forgot-password:hover,
		.forgot-password:active,
		.forgot-password:focus{
		 
		}
		</style>
	</head>
	<body>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/R-preloadcssimages.jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>


<?php if(!isset($_SESSION['marAdentro'])){ ?>
<div class="container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="img/logo2.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" method="post">
            <span id="reauth-email" class="reauth-email"></span>
            <?php if(isset($error) && $error!=""){?>
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> <?php echo  $error ?>.
				</div>
			<?php }?>
            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <input type="password" id="clave" name="clave" class="form-control" placeholder="Clave" required>
            <!--<div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>-->
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="entrar">Ingresar</button>
        </form><!-- /form -->
    </div><!-- /card-container -->
</div><!-- /container -->
<?php }else{ ?>
	<div class="container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="img/logo2.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <a href="reporteContacto" class="btn btn-primary btn-block">REPORTE CONTACTO</a>
        <a href="reporteLotes" class="btn btn-primary btn-block">REPORTE LOTES</a>
        <a href="reporteConcurso" class="btn btn-primary btn-block">REPORTE CONCURSO</a>
    </div><!-- /card-container -->
</div><!-- /container -->
<?php } ?>












