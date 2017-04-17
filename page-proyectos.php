<?php get_header(); ?>

<div id="proyectos" class="overflow" layout="row" layout-wrap flex="100">
	
	<div class="head-proyectos  wow fadeInDown" layout="column" layout-align="center center" flex="100">
		<p class="titulo"><strong>Proyectos en México</strong></p>
		<div class="line"></div>
		<p class="text">Para visualizar los proyectos da click sobre las áreas marcadas con el icono de locación.</p>
	</div>

	<div class="map  wow fadeInLeft" layout="row" flex="100" onload='Map()'>
		<div id="container" flex="100"></div>
		<?php include('templates/proyectos.php') ?>
		<div class="cont-tipo" layout="column" layout-align="start start">
			<div layout="row" layout-align="start center"><i class="icon-nacional"></i><p>Nacional</p></div>
			<div layout="row" layout-align="start center"><i class="icon-internacional"></i><p>Internacional</p></div>
		</div>
	</div>

	<div class="green-line biblioteca" layout="row" layout-align="center center" flex="100">
	     <form method="get" id="searchform"  action="<?php echo esc_url( home_url( '/' ) ); ?>"  role="search" class="max-widht2  wow fadeInUp" layout="row" layout-wrap layout-align="center center">
			<input class="text" flex="90" type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search …', 'shape' ); ?>" />   
			<input type="hidden" name="cat" value="proyectos">
		 </form>
	</div>

	<div layout="row " layout-align="center center" flex="100" class=" wow fadeInUp">
		<?php include('templates/listas-proyectos.php') ?>
	</div>
	
	<div layout="row" flex="100" class=" wow fadeInUp">
		<?php include('templates/redes.php') ?>
	</div>


</div>

<?php get_footer(); ?>