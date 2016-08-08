<?php get_header(); ?>

<div id="biblioteca" class="overflow" layout="row" layout-wrap flex="100">

	<div class="slider-home" layout="row" layout-align="center center" style="background: url(<?=get_bloginfo('template_directory')?>/img/2.3-CONTACTO.jpg);" layout="row" layout-wrap layout-align="center center" flex="100">
		<div class="boton-izq"><i class="icon-arrow-left2"></i></div>
		<div class="cont" layout="row" layout-align="center center" flex="100">
			<div class="max-widht3  wow bounceInUp" layout="column">
				<p class="title-1"><span>Biblioteca</span><br> Responde a necesidades prácticas de los proyectos.</p>
			</div>
		</div>
		<div class="boton-der"><i class="icon-arrow-right2"></i></div>
	</div>

	<div class="green-line biblioteca" layout="row" layout-align="center center" flex="100">
		<form method="get" id="searchform"  action="<?php echo esc_url( home_url( '/' ) ); ?>"  role="search" class="max-widht2" layout="row" layout-wrap layout-align="space-between center">
			<div class="cont-select  wow bounceInLeft" layout="row" flex-gt-sm="45" flex="100">
				<md-select ng-model="ctrl.userState" flex>
			          <md-option ng-disabled="$index === 1">
			            AUTOR
			          </md-option>
			          <md-option ng-disabled="$index === 1">
			            TITULO
			          </md-option>
			          <md-option ng-disabled="$index === 1">
			            NÚMERO DE REGISTRO
			          </md-option>
			          <md-option ng-disabled="$index === 1">
			            FECHA DE PUBLICACIÓN
			          </md-option>
		        </md-select>
		        <input type="hidden" value="{{ctrl.userState}}" name="tipo">
		        <button layout="row" layout-align="center center">
		        	<i class="icon-LUPA_SEARCH_BAR"></i>
		        </button>
	        </div>
	        <input class="text  wow bounceInRight" flex-gt-sm="45" flex="100" type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search …', 'shape' ); ?>" />   
			<input type="hidden" name="cat" value="libros">
        </form>
	</div>
	<?php if (!isset($_GET["tipo"])) { ?>
	 	
			<?php include('templates/tematica.php') ?>		
	 	
	<?php } ?>
	<?php if (isset($_GET["tipo"])) { ?>
		<div layout="row" layout-align="center center" flex="100">
			<?php include('templates/listas.php') ?>
		</div>
	<?php } ?>

	<div layout="row" flex="100">
		<?php include('templates/redes.php') ?>
	</div>

</div>

<?php get_footer(); ?>