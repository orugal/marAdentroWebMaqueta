<?php
/*
* Archivo de envio de mail con ajax y PHP usando phpmailer
* Hay que cambiar las variables de acuerdo al proyecto que se este usando.
* @author Farez Prieto
*/
require('config/configuracion.php');
require('config/conexion.php');
require('core/phpmailer/class.phpmailer.php');
require('core/funciones.class.php');
$funciones = new Funciones();
global $db;
extract($_POST);
//var_dump($_FILES);die();
if($envio == 1)
{
	$asunto			 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA;
	$mensaje_armado	 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA.':<br><br><br>';
	$mensaje_armado	.= '<b>Nombres y apellidos:</b> '.$nombre.'<br>';
	$mensaje_armado	.= '<b>Correo Electronico:</b> '.$email.'<br>';
	$mensaje_armado	.= '<b>Telefono: </b>'.$telefono.'<br>';
	$mensaje_armado	.= '<b>Ciudad: </b>'.$ciudad.'<br>';
	$mensaje_armado	.= '<b>Comentario:</b> '.$comentario.'<br>';

	$envio			 =	$funciones->SendMAIL(_MAIL_ADMIN,$asunto,$mensaje_armado,'',$email,_NOMBRE_EMPRESA);

	$queryInserta	 =	sprintf("INSERT INTO contacto(nombre,email,telefono,ciudad,comentario,fecha) values('%s','%s','%s','%s','%s','%s')",
								$nombre,$email,$telefono,$ciudad,$comentario,date("Y-m-d H:i:s"));
	//die($queryInserta);
	$result			 =	$db->Execute($queryInserta);

	if($envio == 1)
	{
		$salida = array("mensaje"=>"Enviado con correctamente",
			            "continuar"=>1);
	}
	else
	{
		$salida = array("mensaje"=>"Mensaje no pudo ser enviado",
			            "continuar"=>0);
	}
	echo json_encode($salida);
}
elseif($envio == 2)
{
	$continua = false;
	//si trae archivo debo subirlo 
	if(isset($_FILES["archivo"])) 
	{
		$tamano 		= $_FILES["archivo"]['size'];//tamaño
	    $tipo 			= $_FILES["archivo"]['type'];//tipo
	    $archivo		= $_FILES["archivo"]['name'];//nombre
	    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$nuevo_nombre = "";
		for($e=0;$e<12;$e++)
		{
			$nuevo_nombre .= substr($str,rand(0,62),1);
		}
		$dir	=	'./archivos';
		//$ext = array('application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		if($tipo == 'image/jpeg' or $tipo == 'image/png' or $tipo == 'image/gif' or $tipo == 'image/pjpg' or $tipo == 'image/x-png')
		{
		 	switch ($tipo)
		    {
		    	case 'image/jpeg':
		    		$extencion	='jpg';
		    		break;
		    	case 'image/png':
		    		$extencion	='png';
		    		break;
		    	case 'image/gif':
		    		$extencion	='gif';
		    		break;
		    }
		    //nombre finbal
	    	$prefijo	=  $nuevo_nombre.".".$extencion;
	    	//ruta final
	    	$destino	=  $dir.$prefijo;
	    	if ($archivo != "")
			{
				if(copy($_FILES['archivo']['tmp_name'][$i],$destino))
				{ 
					array_push($cargados,$destino);
		        }
			}
			else
			{
				echo "Seleccione un archivo";
			}
		 }
		 else
		 {
		 	array_push($archivos_no_cargados,$archivo);
		}
	}
	else
	{
		$continua = true;
	}

	if($continua)
	{
		$asunto			 =	'Lotes Mar Adentro - Contacto -  '._NOMBRE_EMPRESA;
		$mensaje_armado	 =	'Se ha enviado un mensaje atravez de la pagina web en la sección lotes '._NOMBRE_EMPRESA.':<br><br><br>';
		$mensaje_armado	.= '<b>Nombres y apellidos:</b> '.$nombre.'<br>';
		$mensaje_armado	.= '<b>Correo Electronico:</b> '.$email.'<br>';
		$mensaje_armado	.= '<b>Telefono: </b>'.$telefono.'<br>';
		$mensaje_armado	.= '<b>Área del lote:</b> '.$area.'<br>';
		$mensaje_armado	.= '<b>Ubicación:</b> '.$ubicacion.'<br>';
		$mensaje_armado	.= '<b>Usos:</b> '.$usos.'<br>';
		$mensaje_armado	.= '<b>Comentario:</b> '.$comentario.'<br>';

		$envio			 =	$funciones->SendMAIL(_MAIL_ADMIN,$asunto,$mensaje_armado,'',$email,_NOMBRE_EMPRESA);

		$queryInserta	 =	sprintf("INSERT INTO lotes(nombre,email,telefono,area,ubicacion,usos,comentario,fecha,ciudad) values('%s','%s','%s','%s','%s','%s','%s','%s','%s')",
									$nombre,$email,$telefono,$area,$ubicacion,$usos,$comentario,date("Y-m-d H:i:s"),$ciudad);
		//die($queryInserta);
		$result			 =	$db->Execute($queryInserta);

		if($envio == 1)
		{
			$salida = array("mensaje"=>"Enviado con correctamente",
				            "continuar"=>1);
		}
		else
		{
			$salida = array("mensaje"=>"Mensaje no pudo ser enviado",
				            "continuar"=>0);
		}
		echo json_encode($salida);
	}
	
}
?>