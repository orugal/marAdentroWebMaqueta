$(document).ready(function()
{
	if(!ma.esMovil())
	{
		jQuery.preloadCssImages();
		ma.calculaAlto();
		ma.parallax();

	}
});
var ma =
{
	calculaAlto:function()
	{
		var altoVentana = $("#myCarousel").height();
		var medio 		= ((parseInt(altoVentana) / 2) - 50);
		//alert(medio)
		//$(".carousel-caption").css("top",(medio)+"px")
		/*var altoFinal	=  parseInt(altoVentana) - parseInt(100);
		var altoMenu	=	$(".navbar-default").height();
		var centroMensajito = ((altoFinal / 2) - parseInt(altoMenu) - 50);
		$(".wallCabezaHome").css("height",altoFinal+"px");
		$(".mensajito").css("margin-top",centroMensajito+"px");*/
	},
	parallax:function(){
		//alert("dlfhsdkfjh")
		$('.amenities').parallax("100%", 0.10);
	},
	esMovil:function()
	{
		var salida = false;
	  	var dispositivo = navigator.userAgent.toLowerCase();
      	if( dispositivo.search(/iphone|ipod|ipad|android/) > -1 )
      	{
	      	salida = true;
  		}
  		return salida;
	},
	sendContacto:function()
	{
		var nombre		=	$("#nombre").val();
		var email		=	$("#email").val();
		var telefono	=	$("#telefono").val();
		var comentario	=	$("#comentario").val();

		//valido campos
		if(nombre == "")
		{
			swal({   title: "Error!",   text: "El campo nombre es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(email == "")
		{
			swal({   title: "Error!",   text: "El campo del correo electrónico es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(email != "" && !ma.validarEmail(email))
		{
			swal({   title: "Error!",   text: "El campo del correo electrónico no es valido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(telefono == "")
		{
			swal({   title: "Error!",   text: "El campo teléfono es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(telefono!="" && isNaN(telefono))
		{
			swal({   title: "Error!",   text: "El campo teléfono sólo puede contener números!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(comentario == "")
		{
			swal({   title: "Error!",   text: "El campo comentario es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(!$('#terminos').is(':checked'))
		{
			swal({   title: "Error!",   text: "Debe aceptar las políticas de manejo de sus datos personales!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else
		{
			swal({   
				title: "Confirmación",   
				text: "Está a punto de enviar este formulario, desea continuar?",   
				type: "warning",   
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",   
				confirmButtonText: "Continuar",   
				closeOnConfirm: false,
				showLoaderOnConfirm: true
			}, 
				function(){
					 var formulario = $("#contacto").serialize();
					 $.ajax({
				          type: "POST",
				          url: "envio.php",
				          data: formulario+"&envio=1",
				          dataType:"json",
				          beforeSend: function(objeto){
				          },
				          success: function(respuesta)
				          {
				            if(respuesta.continuar)
				            {
				            	document.location="gracias";
				            }
				            else
				            {
				              swal({   title: "Mensaje no enviado!",   text: "El mensaje no pudo ser enviado, intente de nuevo más tarde!.",   type: "error",   confirmButtonText: "Aceptar",   showLoaderOnConfirm: true, });
				            }
			            },
			            error: function (var1,var2,var3){
			                
			            }
				     });
			});
		}

	},
	sendLotes:function()
	{
		var nombre		=	$("#nombre").val();
		var email		=	$("#email").val();
		var telefono	=	$("#telefono").val();
		var comentario	=	$("#comentario").val();
		var area		=	$("#area").val();
		var ubicacion	=	$("#ubicacion").val();
		var usos		=	$("#usos").val();

		//valido campos
		if(nombre == "")
		{
			swal({   title: "Error!",   text: "El campo nombre es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(email == "")
		{
			swal({   title: "Error!",   text: "El campo del correo electrónico es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(email != "" && !ma.validarEmail(email))
		{
			swal({   title: "Error!",   text: "El campo del correo electrónico no es valido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(telefono == "")
		{
			swal({   title: "Error!",   text: "El campo celular es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(telefono!="" && isNaN(telefono))
		{
			swal({   title: "Error!",   text: "El campo celular sólo puede contener números!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(area == "")
		{
			swal({   title: "Error!",   text: "El campo área es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(ubicacion == "")
		{
			swal({   title: "Error!",   text: "El campo ubicación es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(usos == "")
		{
			swal({   title: "Error!",   text: "El campo usos es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(comentario == "")
		{
			swal({   title: "Error!",   text: "El campo comentario es un campo requerido!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else if(!$('#terminos').is(':checked'))
		{
			swal({   title: "Error!",   text: "Debe aceptar las políticas de manejo de sus datos personales!",   type: "warning",   confirmButtonText: "Aceptar" });
		}
		else
		{

			swal({   
				title: "Confirmación",   
				text: "Está a punto de enviar este formulario, desea continuar?",   
				type: "warning",   
				showCancelButton: true,   
				confirmButtonColor: "#DD6B55",   
				confirmButtonText: "Continuar",   
				closeOnConfirm: false,
				showLoaderOnConfirm: true
			}, 
				function(){   
					 var formulario = $("#contacto").serialize();
					 $.ajax({
				          type: "POST",
				          url: "envio.php",
				          data: formulario+"&envio=2",
				          dataType:"json",
				          beforeSend: function(objeto){
				          },
				          success: function(respuesta)
				          {
				            if(respuesta.continuar)
				            {
				            	document.location="gracias";
				            }
				            else
				            {
				              swal({   title: "Mensaje no enviado!",   text: "El mensaje no pudo ser enviado, intente de nuevo más tarde!.",   type: "error",   confirmButtonText: "Aceptar",   showLoaderOnConfirm: true, });
				            }
			            },
			            error: function (var1,var2,var3){
			                
			            }
				     });
			});
			
		}

	},
	validarEmail:function(email) 
	{
	    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	    if (!expr.test(email))
	    {
	       return false;
	    }
	    else
	    {
	    	return true;
	    }

	},
	verVideo:function(v,titulo)
	{
		var video = "";

		if(v == 0)
		{
			video = '<iframe width="100%" height="315" src="https://www.youtube.com/embed/Q-eTV0dXTAU" frameborder="0" allowfullscreen></iframe>';
		}
		else if(v == 1)
		{
			video = '<iframe width="100%" height="315" src="https://www.youtube.com/embed/4zimNc2lYOs" frameborder="0" allowfullscreen></iframe>';
		}
		else if(v == 2)
		{
			video = '<iframe width="100%" height="315" src="https://www.youtube.com/embed/p9lqydm-jaw" frameborder="0" allowfullscreen></iframe>';
		}
		else if(v == 3)
		{
			video = '<iframe width="100%" height="315" src="https://www.youtube.com/embed/D9bEWD39NiY" frameborder="0" allowfullscreen></iframe>';
		}
		else if(v == 4)
		{
			video = '<iframe width="100%" height="315" src="https://www.youtube.com/embed/tiOuidgzGS8" frameborder="0" allowfullscreen></iframe>';
		}

		swal({title:titulo,
			 	html:true,
			 	text: video,
			 	confirmButtonText: "Cerrar" });
	},
	cambioImagen:function(btn,dominio)
	{
		$("#masterImg").attr("src",dominio+"img/master/img"+btn+".png");
	}
}