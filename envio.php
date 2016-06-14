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
if($envio == 1)
{
	$asunto			 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA;
	$mensaje_armado	 =	'Se ha enviado un mensaje atravez de la pagina web '._NOMBRE_EMPRESA.':<br><br><br>';
	$mensaje_armado	.= '<b>Nombres y apellidos:</b> '.$nombre.'<br>';
	$mensaje_armado	.= '<b>Correo Electronico:</b> '.$email.'<br>';
	$mensaje_armado	.= '<b>Telefono: </b>'.$telefono.'<br>';
	$mensaje_armado	.= '<b>Comentario:</b> '.$comentario.'<br>';

	$envio			 =	$funciones->SendMAIL(_MAIL_ADMIN,$asunto,$mensaje_armado,'',$email,_NOMBRE_EMPRESA);

	$queryInserta	 =	sprintf("INSERT INTO contacto(nombre,email,telefono,comentario,fecha) values('%s','%s','%s','%s','%s')",
								$nombre,$email,$telefono,$comentario,date("Y-m-d H:i:s"));
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
?>