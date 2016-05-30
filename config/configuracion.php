<?php
/*
* Archivo de Configuracion del sistema
* @author Farez Prieto
* @date 11 de noviembre de 2015
*/

define("_NOMBRE_EMPRESA"                                ,"Mar Adentro");//configurar
define("_DOMINIO"                 		               ,"http://192.168.0.14/maradentro/");//configurar

//DATOS DE ENVIO DE CORREOS
define('_DIR_PLUGIN'									,'core/phpmailer/');
define('_MAILER'										,'mail');
define('_HOST_MAIL'										,'mail.maradentro.com.co');//Configurar
define('_SMTP_AUTH'										,true);
define('_SMTP_USER'										,'noreply@maradentro.com.co');//configurar
define('_SMTP_PASS'										,'Jg$E3D+u');//configurar
define('_ES_HTML'										,true);
//Correo del administrador
define('_MAIL_ADMIN'									,'ncastronio@gmail.com,jforero@constructoranio.com,jbeltran@constructoranio.com');//configurar

//BASE DE DATOS
//Nombre del hosting
define('_HOST'											,'localhost');
//Usuario base de datos
define('_USER'											,'root');
//Contraseña del usuario
define('_PASS'											,'');
//base de datos
define('_DB'											,'vivemara_contacto');
?>
