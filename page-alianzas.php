<?php get_header(); ?>
 
<div id="alianzas" class="overflow" layout="row" layout-wrap flex="100">

	<div class="slider-home" layout="row" layout-align="center center" style="background: url(<?=get_bloginfo('template_directory')?>/img/2.2-ALIANZAS.jpg);" flex="100">
		<div class="boton-izq"><i class="icon-arrow-left2"></i></div>
		<div class="cont" layout="row" layout-align="center center" flex="100">
			<div class="max-widht3  wow bounceInUp" layout="column">
				<p class="title-1">Centro Eure <br> <span>Conoce nuestras alianzas</span></p>
			</div>
		</div>
		<div class="boton-der"><i class="icon-arrow-right2"></i></div>
	</div>

	<div class="green-line" layout="row" layout-align="center end" flex="100">
		<div class="triangulo-blanco"></div>
	</div>

	<div class="con-info-blanco" layout="row" layout-align="center center" flex="100">
		<div class="max-widht2  wow bounceInUp" layout="column">
			<div layout="column" layout-align="center center">
				<i class="icon-alianza1"></i>
				<p class="titulo">
					Equipo
				</p>
			</div>
		</div>
	</div>

	<div class="equipo" layout="row" layout-align="center center" flex="100" ng-controller="equipoCTL">
		<div class="max-widht2" layout="row" layout-wrap layout-align="space-between center">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
		</div>
	</div>

	<div class="colaboraciones  wow bounceInUp" layout="row" layout-wrap layout-align="center center" flex="100">
		<div class="max-widht2" layout="column" layout-align="center center">
			<i class="icon-alianza2"></i>
			<p class="titulo">Colaboraciones</p>
			<div class="cont-slider" layout="row" layout-align="center center">
				<div class="flechas flecha-left">
					<i class="icon-arrow-left2"></i>
				</div>
				<div class="slider" layout="row" layout-align="center center" flex>
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_1.png" alt="" >
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_2.png" alt="" >
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_3.png" alt="" >
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_4.png" alt="" >
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_5.png" alt="" >
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_1.png" alt="" >
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_2.png" alt="" >
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_3.png" alt="" >
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_4.png" alt="" >
					<img class="item" src="<?=get_bloginfo('template_directory')?>/img/logo_5.png" alt="" >
				</div>
				<div class="flechas flecha-right">
					<i class="icon-arrow-right2"></i>
				</div>
			</div>
		</div>
	</div>

	<div layout="row" flex="100">
		<?php include('templates/redes.php') ?>
	</div>

</div>

<?php get_footer(); ?>