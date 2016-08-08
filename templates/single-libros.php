<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

	$book_id = get_the_ID();
    $book_tema = get_field('tema');
    $book_autor = get_field('autor');
    $book_editorial = get_field('editorial');

?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  ?>

<div id="biblioteca" class="" layout="row" layout-wrap flex="100">

	<div class="slider-home" style="background: url(<?=get_bloginfo('template_directory')?>/img/2.3-CONTACTO.jpg);" layout="row" layout-wrap layout-align="center center" flex="100">
		<div class="boton-izq"><i class="icon-arrow-left2"></i></div>
		<div class="cont" layout="row" layout-align="center center" flex="100">
			<div class="max-widht3  wow bounceInUp" layout="column">
				<p class="title-1"><span>Biblioteca</span><br> Responde a necesidades prácticas de los proyectos.</p>
			</div>
		</div>
		<div class="boton-der"><i class="icon-arrow-right2"></i></div>
	</div>

	<div class="green-line biblioteca" layout="row" layout-align="center center" flex="100">
		<form action="/biblioteca/" method="get" class="max-widht2" layout="row" layout-wrap layout-align="space-between center">
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
	        <input type="text" class="text  wow bounceInRight" flex-gt-sm="45" flex="100">
        </form>
	</div>

	<div class="ficha" layout="row" layout-align="center center" flex="100">
		<div class="max-widht" layout="row" layout-align="space-between start" layout-wrap>
			<div class="imagen  wow bounceInLeft" flex-gt-xs="30" flex="100" style="background: url(<?=$url?>);"></div>
			<div class="info wow bounceInRight" layout="column"  flex-gt-xs="65" flex="100">
				<p class="titulo"><?php the_title(); ?></p>
				<p class="subtitulo"><?php the_field('subtitulo'); ?></p>
				<p class="autor">Por <?php the_field('autor'); ?></p>
				<div><div class="line"></div></div>
				<p class="text1"><?php the_field('tema'); ?></p>
				<p class="text2"><?php  the_content();  ?></p>
			</div>
		</div>
	</div>

	<div class="detalles-libro" layout="row" layout-align="center center" flex="100">
		<div class="max-widht" layout="column">
			<div layout="row" layout-align="center center">
				<p class="title  wow bounceInUp">Detalles del libro</p>
			</div>
			<div class="cont  wow bounceInLeft" layout="row" layout-wrap layout-align="center center">
				<div class="box border" layout="column" flex flex-xs="100">
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Editorial:</p>
						<p class="text2"><?php the_field('editorial'); ?></p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Fecha de publicación</p>
						<p class="text2"><?php the_field('fecha_de_publicacion'); ?></p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Páginas</p>
						<p class="text2"><?php the_field('numero_de_paginas'); ?></p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Código</p>
						<p class="text2"><?php the_field('codigo'); ?></p>
					</div>
				</div>
				<div class="box" layout="column" flex flex-xs="100">
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Editorial:</p>
						<p class="text2"><?php the_field('editorial'); ?></p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Fecha de publicación</p>
						<p class="text2"><?php the_field('fecha_de_publicacion'); ?></p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Páginas</p>
						<p class="text2"><?php the_field('numero_de_paginas'); ?></p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Código</p>
						<p class="text2"><?php the_field('codigo'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>

	<?php 
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array(
          'post_type'         => 'post',
          'posts_per_page' => 5,
          'category_name'    => libros,
          'paged'  => $paged,
          );
        $loop_alternativo = new WP_Query($args);
        if( $loop_alternativo->have_posts() ): ?>
			<div class="libros-relacionados" layout="row" layout-align="center center" flex="100">
				<div class="max-widht" layout="column">
					<div layout="row" layout-align="center center">
						<p class="title  wow bounceInUp">Titulos Relacionados</p>
					</div>
					<div class="cont  wow bounceInRight" layout="row" layout-wrap layout-align="space-around center">
						<?php while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); 
							$similar_id = get_the_ID();
    						$similar_tema = get_field('tema');
    						$similar_autor = get_field('autor');
    						$similar_editorial = get_field('editorial');
    						$cont_coincidencias = 0; 
	    					$total_coincidencias;
	    					$cont_coincidencias+=($book_id == $similar_id ?1:0) + ($book_tema == $similar_tema ?1:0) + ($book_editorial == $similar_editorial ?1:0) + ($book_autor == $similar_autor ?1:0);
    						if ($cont_coincidencias >= 2 && $cont_coincidencias < 4 ) {  ?>
	      						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  ?>
								<a href="<?php the_permalink(); ?>" class="book" flex-gt-sm="20" flex-sm="35" flex-xs="80" style="background: url(<?=$url?>);" ></a>
							<?php } ?>
						<?php endwhile ?>
					</div>
				</div>
			</div>
	<?php 
		endif;
       global $wp_query;
       $wp_query = $loop_alternativo ;
       wp_reset_postdata(); ?>

</div>