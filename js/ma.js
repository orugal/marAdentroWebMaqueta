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
			var formulario = $("#contacto").serialize();
			 $.ajax({
		          type: "POST",
		          url: "envio.php",
		          data: formulario,
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

	}
}