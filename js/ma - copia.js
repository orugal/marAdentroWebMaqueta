$(document).ready(function()
{
	if(!ma.esMovil())
	{
		jQuery.preloadCssImages();
		//ma.calculaAlto();
		ma.parallax();
	}
});
var ma =
{
	calculaAlto:function()
	{
		var altoVentana = $(window).height();
		var altoFinal	=  parseInt(altoVentana) - parseInt(100);
		var altoMenu	=	$(".navbar-default").height();
		var centroMensajito = ((altoFinal / 2) - parseInt(altoMenu) - 50);
		$(".wallCabezaHome").css("height",altoFinal+"px");
		$(".mensajito").css("margin-top",centroMensajito+"px");
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
	}
}