<?php 
//$parque[0]['img'] = "img/parque/1.jpg";
$parque[0]['img'] = "img/parque/2.jpg";
$parque[1]['img'] = "img/parque/3.jpg";
$parque[2]['img'] = "img/parque/4.png";
$parque[3]['img'] = "img/parque/5.jpg";

$ch[0]['img'] = "img/club/1.jpg";
$ch[1]['img'] = "img/club/2.jpg";
$ch[2]['img'] = "img/club/3.jpg";
$ch[3]['img'] = "img/club/4.jpg";
$ch[4]['img'] = "img/club/5.jpg";
$ch[5]['img'] = "img/club/6.jpg";

$cp[0]['img'] = "img/ameSer/1.jpg";
//$cp[1]['img'] = "img/ameSer/2.jpg";
$cp[1]['img'] = "img/ameSer/3.jpg";
$cp[2]['img'] = "img/ameSer/4.jpg";
$cp[3]['img'] = "img/ameSer/5.jpg";
$cp[4]['img'] = "img/ameSer/6.jpg";
$cp[5]['img'] = "img/ameSer/7.jpg";
$cp[6]['img'] = "img/ameSer/8.jpg";
$cp[7]['img'] = "img/ameSer/9.jpg";
$cp[8]['img'] = "img/ameSer/10.jpg";
$cp[9]['img'] = "img/ameSer/11.jpg";
$cp[10]['img'] = "img/ameSer/12.jpg";
$cp[11]['img'] = "img/ameSer/13.jpg";
$cp[12]['img'] = "img/ameSer/14.jpg";
$cp[13]['img'] = "img/ameSer/15.jpg";
?>

<div id="my-tab-content" class="tab-content">
	<!-- Tab 1-->
    <div class="tab-pane" id="parque">
        <h2 class="tituloSeccion text-left">PARQUE</h2>
        <div id="carrouselParque" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		  	  <?php $cont2=1;foreach($parque as $cu2){ ?>
			    <li data-target="#carrouselParque" data-slide-to="0" class="<?php if($cont2==1){ echo 'active';}?>"></li>
			  <?php $cont2++;}?>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			  <?php $cont=1;foreach($parque as $cu1){ ?>
			    <div class="item <?php if($cont==1){ echo 'active';}?>">
			      <a href="<?php echo _DOMINIO?><?php echo $cu1['img']?>"  data-gallery="Gal0"><img src="<?php echo _DOMINIO?><?php echo $cu1['img']?>" width="100%"/></a>
			    </div>
			  <?php $cont++;}?>  
		  </div>
		  <a class="left carousel-control" href="#carrouselParque" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Anterior</span>
		  </a>
		  <a class="right carousel-control" href="#carrouselParque" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Siguiente</span>
		  </a>
		</div>
		
		
		  <div class="small text-left">
		  	Las imágenes utilizadas en este material son ilustrativas y de referencia, los detalles de diseño, materiales y colores están sujetos a cambios. Sin modificar la calidad del proyecto final.
		  </div>
		<div class="row" style="margin:2% 0 0 0">
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
				<ul>
					<li style="text-align:left">400 metros de senderos de trote</li>
					<li style="text-align:left">Islas de ejercicio </li>
					<li style="text-align:left">Plazas de eventos</li>
					<li style="text-align:left">Parque infantil</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
				<ul>
					
					<li style="text-align:left">1 Cancha de fútbol </li>
					<li style="text-align:left">2 Canchas múltiples </li>
					<li style="text-align:left">Biblioteca</li>
					<li style="text-align:left">Skateboard </li>
				</ul>
			</div>
		</div>
        
    </div>
    <!-- Tab 2-->
    <div class="tab-pane" id="clubH">
        <h2 class="tituloSeccion text-left">CLUB</h2>
        <div id="CarouselCH" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		  	  <?php $cont2=1;foreach($ch as $cu2){ ?>
			    <li data-target="#CarouselCH" data-slide-to="0" class="<?php if($cont2==1){ echo 'active';}?>"></li>
			  <?php $cont2++;}?>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			  <?php $cont=1;foreach($ch as $cu1){ ?>
			    <div class="item <?php if($cont==1){ echo 'active';}?>">
			      <a href="<?php echo _DOMINIO?><?php echo $cu1['img']?>" data-gallery="Gal1"><img src="<?php echo _DOMINIO?><?php echo $cu1['img']?>" width="100%"/></a>
			    </div>
			  <?php $cont++;}?>  
		  </div>
		  <a class="left carousel-control" href="#CarouselCH" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Anterior</span>
		  </a>
		  <a class="right carousel-control" href="#CarouselCH" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Siguiente</span>
		  </a>
		</div>

		  <div class="small text-left">
		  	Las imágenes utilizadas en este material son ilustrativas y de referencia, los detalles de diseño, materiales y colores están sujetos a cambios. Sin modificar la calidad del proyecto final.
		  </div>
		<p class="pInternas2"><br>



		<div class="row" style="margin:2% 0 0 0">
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
				<ul>
					<li style="text-align:left">800 metros de senderos de trote</li>
					<li style="text-align:left">Plaza de descanso</li>
					<li style="text-align:left">Islas de ejercicio</li>
					<li style="text-align:left">Juegos Infantiles</li>
					<li style="text-align:left">3 Canchas de fútbol cinco</li>
					<li style="text-align:left">4 Canchas de tennis</li>
					<li style="text-align:left">Pista de skateboard</li>
					<li style="text-align:left">2.2 Km de ciclovía  </li>
					<li style="text-align:left">Juegos de agua</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
				<ul>	
					<li style="text-align:left">Salones de reuniones flexibles</li>
					<li style="text-align:left">Cafetería </li>
					<li style="text-align:left">Spa</li>
					<li style="text-align:left">Salones de Juego</li>
					<li style="text-align:left">Squash</li>
					<li style="text-align:left">Salones de estudio y guardería </li>
				</ul>
			</div>
		</div>
		</p>
        
    </div>
    <!-- Tab 3-->
    <div class="tab-pane" id="clubP">
        <h2 class="tituloSeccion text-left">AMENITIES Y SERVICIOS</h2>
        <div id="CarouselCP" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		  	  <?php $cont2=1;foreach($cp as $cu2){ ?>
			    <li data-target="#CarouselCP" data-slide-to="0" class="<?php if($cont2==1){ echo 'active';}?>"></li>
			  <?php $cont2++;}?>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			  <?php $cont=1;foreach($cp as $cu1){ ?>
			    <div class="item <?php if($cont==1){ echo 'active';}?>">
			      <a href="<?php echo _DOMINIO?><?php echo $cu1['img']?>" data-gallery="Gal3"><img src="<?php echo _DOMINIO?><?php echo $cu1['img']?>" width="100%"/></a>
			    </div>
			  <?php $cont++;}?>  
		  </div>
		  <a class="left carousel-control" href="#CarouselCP" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Anterior</span>
		  </a>
		  <a class="right carousel-control" href="#CarouselCP" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Siguiente</span>
		  </a>
		</div>
		
		
		  <div class="small text-left">
		  	Las imágenes utilizadas en este material son ilustrativas y de referencia, los detalles de diseño, materiales y colores están sujetos a cambios. Sin modificar la calidad del proyecto final.
		  </div>
		<p class="pInternas2"><br>
			<div class="row" style="margin:2% 0 0 0">
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
				<ul>
					<li style="text-align:left">5 hectáreas de laguna y playa</li>
					<li style="text-align:left">14 piscinas</li>
					<li style="text-align:left">Vóley playa</li>
					<li style="text-align:left">Vela</li>
					<li style="text-align:left">Kayak </li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
				<ul>
					<li style="text-align:left">Club bote</li>
					<li style="text-align:left">Espejos de agua</li>
					<li style="text-align:left">Espacios para gimnasio </li>
					<li style="text-align:left">Zona comercial: 5000 metros cuadrados</li>
					<li style="text-align:left">Portería:Accesos de seguridad</li>
				</ul>
			</div>
		</div>
		</p>
        
    </div>
</div>    