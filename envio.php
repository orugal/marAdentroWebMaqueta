<?php
/*
* Archivo de envio de mail con ajax y PHP usando phpmailer
* Hay que cambiar las variables de acuerdo al proyecto que se este usando.
* @author Farez Prieto
*/

ini_set("display_errors",0);
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
	    //die($tipo);
	    $archivo		= $_FILES["archivo"]['name'];//nombre
	    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$nuevo_nombre = "";
		for($e=0;$e<12;$e++)
		{
			$nuevo_nombre .= substr($str,rand(0,62),1);
		}
		$dir	 =	'archivos/';
		$destino =  '';
		$extencion	= "";
		if($archivo != "")
		{
			//$ext = array('application/vnd.openxmlformats-officedocument.wordprocessingml.document');
			if($tipo == 'image/jpeg' or $tipo == 'image/png' or $tipo == 'image/gif' or $tipo == 'image/pjpg' or $tipo == 'image/x-png' or $tipo=='application/pdf' or $tipo == 'application/msword' or $tipo =='application/vnd.ms-excel' or $tipo == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' or $tipo == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
			{
			 	
			    	if($tipo == 'image/jpeg')
			    	{
			    		$extencion	='jpg';
			    	}		
			    	else if($tipo == 'image/png')
			    	{
			    		$extencion	='png';
			    	}		
			    	else if($tipo == 'image/gif')
			    	{
			    		$extencion	='gif';
			    	}		
			    	else if($tipo == 'image/pjpg')
			    	{
			    		$extencion	='jpg';
			    	}		
			    	else if($tipo == 'image/x-png')
			    	{
			    		$extencion	='png';
			    	}		
			    	else if($tipo == 'application/pdf')
			    	{
			    		$extencion	='pdf';
			    	}		
			    	else if($tipo == 'application/msword')
			    	{
			    		$extencion	='doc';
			    	}		
			    	else if($tipo == 'application/vnd.ms-excel')
			    	{
			    		$extencion	='xls';
			    	}		
			    	else if($tipo == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
			    	{
			    		$extencion	='docx';
			    	}		
			    	else if($tipo == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
			    	{
			    		$extencion	='xlsx';
			    	}	
			    //nombre final
		    	$prefijo	=  $nuevo_nombre.".".$extencion;
		    	//ruta final
		    	$destino	=  $dir.$prefijo;
		    	//die($destino);
		    	if ($archivo != "")
				{
					
					if(copy($_FILES['archivo']['tmp_name'],$destino))
					{ 
						//die("Bien 1!!");
						$continua = true;

			        }
			        else
			        {
			        	//die("Bien 2!!");
			        	$continua = false;
						$salida = array("mensaje"=>"El archivo no pudo ser cargado.",
					            		"continuar"=>0);
			        }
				}
				else
				{
					//die("Bien 3!!");
					$continua = true;
					$prefijo = "";
					$salida = array("mensaje"=>"No hay archivo que cargar.",
					      "continuar"=>1);
				}
			 }
			 else
			 {
			 	//die("Bien 4!!");
			 	$continua = false;
			 	$prefijo = "";
				$salida = array("mensaje"=>"El archivo que ha seleccionado no tiene el formato permitido, recuerde que sólo se permiten archivos de imagen JPG, PNG y archivos de texto de WORD, hojas de EXCEL y PDF ó supera el peso permitido de 1MB",
					      "continuar"=>0);
			 }
		}
		else
		{
			$continua = true;
			$prefijo = "";
			$salida = array("mensaje"=>"No hay archivo que cargar.",
					      "continuar"=>1);
		}

	}
	else
	{
		//die("Bien 5!!");
		$continua = true;
		$prefijo = "";
		$salida = array("mensaje"=>"No viene archivo.",
			     	    "continuar"=>1);
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
		if($prefijo != "")
		{
			$mensaje_armado	.= '<b>Archivo Adjunto:</b> <a href="'._DOMINIO.$destino.'">'.$prefijo.'</a><br>';
		}
		$mensaje_armado	.= '<b>Comentario:</b> '.$comentario.'<br>';

		$envio			 =	$funciones->SendMAIL(_MAIL_ADMIN,$asunto,$mensaje_armado,'',$email,_NOMBRE_EMPRESA);

		$queryInserta	 =	sprintf("INSERT INTO lotes(nombre,email,telefono,area,ubicacion,usos,comentario,fecha,ciudad,archivo) values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
									$nombre,$email,$telefono,$area,$ubicacion,$usos,$comentario,date("Y-m-d H:i:s"),$ciudad,_DOMINIO.$destino);
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
	else
	{
		echo json_encode($salida);	
	}
	
}
?>