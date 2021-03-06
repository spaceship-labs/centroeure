<?php get_header(); ?>

<div id="biblioteca" class="overflow" layout="row" layout-wrap flex="100" ng-controller="biblioCTL">
	<div class="slider-home" layout="row" layout-align="center center"  layout="row" layout-wrap layout-align="center center" flex="100">
		<!--<div class="boton-izq"><i class="icon-arrow-left2"></i></div>-->
		<div class="cont" layout="row" layout-align="center center" flex="100">
			<div class="max-widht3  wow fadeInUp" layout="column">
				<p class="title-1"><span>Biblioteca</span><br> Responde a necesidades prácticas de los proyectos.</p>
			</div>
		</div>
		<!--<div class="boton-der"><i class="icon-arrow-right2"></i></div>-->
	</div>

	<div class="green-line biblioteca" layout="row" layout-align="center center" flex="100">
		<form method="get" id="searchform"  ng-submit="search(form)"  role="search" class="max-widht2" layout="row" layout-wrap layout-align="space-between center">
			<div class="cont-select  wow fadeInLeft" layout="row" flex-gt-sm="45" flex="100">
				<md-select ng-model="form.type" flex>
			          <md-option ng-disabled="$index === 1" value="Autor">
			            AUTOR
			          </md-option>
			          <md-option ng-disabled="$index === 1" value="Título">
			            TITULO
			          </md-option>
			          <md-option ng-disabled="$index === 1" value="ISBN">
			            NÚMERO DE REGISTRO
			          </md-option>
			          <md-option ng-disabled="$index === 1" value="Fecha de publicación">
			            FECHA DE PUBLICACIÓN
			          </md-option>
		        </md-select>
		        <input type="hidden" value="{{ctrl.userState}}" name="tipo">
		        <button layout="row" layout-align="center center">
		        	<i class="icon-LUPA_SEARCH_BAR"></i>
		        </button>
	        </div>
	        <input ng-model="form.text" class="text  wow fadeInRight" flex-gt-sm="45" flex="100" type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search …', 'shape' ); ?>" />
			<input type="hidden" name="cat" value="libros">
        </form>
	</div>
		<div layout="row" layout-align="center center" flex="100">
			<?php include('templates/listas.php') ?>
		</div>

	<div layout="row" flex="100">
		<?php include('templates/redes.php') ?>
	</div>

</div>

<?php get_footer(); ?>
