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
		<title>Mar Adentro - Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset=utf-8>
		<meta http-equiv="expires" content="Sat, 30 Jul 2016 11:12:01 GMT" />
		<meta http-equiv="Cache-control" content="public">
		
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
		<nav class="navbar navbar-fixed-top navbar-center">
			<div class="container">
					<div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand visible-lg visible-md margin" href="<?php echo _DOMINIO?>home">
				      	<img src="img/logoBlanco.png" width="250px" />
				      </a>
				      <a class="navbar-brand visible-xs" href="<?php echo _DOMINIO?>home" style="margin-top:-61px">
				      	<img src="img/logoBlanco.png" width="100%" />
				      </a>
				      <a class="navbar-brand visible-sm" href="<?php echo _DOMINIO?>home" style="margin-top:-30px">
				      	<img src="img/logoBlanco.png" width="100%" />
				      </a>
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="border:none;box-shadow: none;">
				      <?php include("opcMenu.php") ?>
				    </div>
				  </div>
			</div>
				  
			</nav>
		<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
         	<div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/1.jpg');"></div>
                <div class="carousel-caption" style="text-align: left;">
                    <!--<h2>Caption 1</h2>-->
                    <h2 class="text-center">
                    <!--<i class="fa fa-leaf" aria-hidden="true"></i> -->
                    La sensación del caribe al interior de Colombia.</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/2.jpg');"></div>
                <div class="carousel-caption" style="text-align: left;">
                    <!--<h2 class="text-center">Caption 1</h2>-->
                    <h2 class="text-center">
                    <!--<i class="fa fa-heart" aria-hidden="true"></i>-->
Nuestra meta es brindarte la mejor calidad de vida .</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/3.jpg');"></div>
                <div class="carousel-caption" style="text-align: left;">
                    <h2 class="text-center">Deportes náuticos, vela, kayak, club de bote, y piscina al alcance de todos.</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/4.jpg');"></div>
                <div class="carousel-caption" style="text-align: left;">
                    <h2 class="text-center">Transformamos tu estilo de vida.</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </header>

	<div class="container-fluid" style="margin:1% 0 0 0 ">

			<div class="row visible-xs visible-sm" style="margin:3% 0 0 0 ">
				<div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 text-right visible-lg"></div>
				<div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 text-center">
					<a href="https://www.facebook.com/ConstructoraNIO/" target="_blank"><img src="img/face.png" width="15%" /></a>
					<!--<a href="#"><img src="img/youtube.png" width="15%" /></a>-->
					<a href="https://www.instagram.com/constructora_nio/" target="_blank"><img src="img/insta.png" width="15%" /></a>
					<a href="https://twitter.com/ConstructoraNIO" target="_blank"><img src="img/twitter.png" width="15%" />	</a>
				</div>
				<div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 text-center" style="padding: 1% 0 0 0">
					<i class="glyphicon glyphicon-phone"></i>
					+ 57 315 707 6127
				</div>
				<div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 text-right visible-lg"></div>
			</div>

			<div class="row" style="padding: -3% 0 0 0">
					<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 text-center">
						<h2 class="text-center redes2 clasH2"><span class="maName">MAR ADENTRO</span> TE DA LA BIENVENIDA <a href="" class="" style="margin:0 0 0 1%">
							<a href="contacto"><img src="img/btnContacto.png" /></a>
							<a href="https://www.facebook.com/ConstructoraNIO/" target="_blank"><img src="img/face.png" width="3%" /></a>
					<!--<a href="#"><img src="img/youtube.png" width="3%" /></a>-->
						<a href="https://www.instagram.com/constructora_nio/" target="_blank"><img src="img/insta.png" width="3%" /></a>
						<a href="https://twitter.com/ConstructoraNIO" target="_blank"><img src="img/twitter.png" width="3%" />	</a>
						</a></h2>
					</div>
			</div>	
	</div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="css/ma.css" />
	<link rel="stylesheet" type="text/css" href="css/full-slider.css" />
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900italic,900&subset=latin,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/R-preloadcssimages.jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ma.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$('.carousel').carousel({
			  interval: 4000
			})
		});

	</script>

	<style type="text/css">
	@media (max-width: 1000px) {
  .navbar-header {
      float: none;
  }
  .navbar-left,.navbar-right {
      float: none !important;
  }
  .navbar-toggle {
      display: block;
  }
  .navbar-collapse {
      border-top: 1px solid transparent;
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
  }
  .navbar-fixed-top {
      top: 0;
      border-width: 0 0 1px;
  }
  .navbar-collapse.collapse {
      display: none!important;
  }
  .navbar-nav {
      float: none!important;
      margin-top: 7.5px;
  }
  .navbar-nav>li {
      float: none;
  }
  .navbar-nav>li>a {
      padding-top: 10px;
      padding-bottom: 10px;
  }
  .collapse.in{
      display:block !important;
  }
}
</style>
	</body>
</html>