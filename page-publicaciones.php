<?php get_header(); ?>


<div id="publicaciones" class="overflow" layout="row" layout-wrap flex="100">

	<div class="slider-home" layout="row" layout-align="center center" style="background: url(<?=get_bloginfo('template_directory')?>/img/2.3-CONTACTO.jpg);" layout="row" layout-wrap layout-align="center center" flex="100">
		<div class="boton-izq"><i class="icon-arrow-left2"></i></div>
		<div class="cont" layout="row" layout-align="center center" flex="100">
			<div class="max-widht3" layout="column">
				<p class="title-1"><span>Centro Eure</span><br> Investigación, Asesoría y Evaluación</p>
			</div>
		</div>
		<div class="boton-der"><i class="icon-arrow-right2"></i></div>
		<i class="icon-ARROW_SLIDER"></i>
	</div>

	<div class="green-line" layout="row" layout-align="center end" flex="100">
		<div class="triangulo-blanco"></div>
	</div>
	
	<div class="construccion" layout="column" layout-align="center center" flex="100">
		<p class="title"><strong>en construcción</strong></p>
		<i class="icon-pubilcacion"></i>
	</div>

</div>

<?php get_footer(); ?>