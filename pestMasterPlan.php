<?php 
$parque[0]['img'] = "img/parque/1.jpg";
$parque[1]['img'] = "img/parque/2.jpg";
$parque[2]['img'] = "img/parque/3.jpg";
$parque[3]['img'] = "img/parque/4.png";
$parque[4]['img'] = "img/parque/5.jpg";

$ch[0]['img'] = "img/club/1.jpg";
$ch[1]['img'] = "img/club/2.jpg";
$ch[2]['img'] = "img/club/3.jpg";
$ch[3]['img'] = "img/club/4.jpg";
$ch[4]['img'] = "img/club/5.png";
$ch[5]['img'] = "img/club/6.jpg";

$cp[0]['img'] = "img/ameSer/1.jpg";
$cp[1]['img'] = "img/ameSer/2.jpg";
$cp[2]['img'] = "img/ameSer/3.jpg";
$cp[3]['img'] = "img/ameSer/4.jpg";
$cp[4]['img'] = "img/ameSer/5.jpg";
$cp[5]['img'] = "img/ameSer/6.jpg";
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
		<p class="pInternas2"><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
        
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
		<p class="pInternas2"><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
        
    </div>
    <!-- Tab 3-->
    <div class="tab-pane" id="clubP">
        <h2 class="tituloSeccion text-left">AMENITIES y SERVICIOS</h2>
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
		<p class="pInternas2"><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
        
    </div>
</div>    