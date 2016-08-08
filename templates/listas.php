<div class="max-widht1 wow bounceInUp" layout="row" flex-xs="100">
    <div class="listas-table" layout="column" flex="100">
    	<div class="header-list" layout="row">
    		<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
    			<p>Tema</p>
    		</div>
    		<div class="cont" layout="row" layout-align="center center" flex="20" hide-xs>
    			<p>No. de Registro</p>
    		</div>
    		<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
    			<p>Titulo</p>
    		</div>
    		<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
    			<p>Autor</p>
    		</div>
    		<div class="cont" layout="row" layout-align="center center" flex="20" hide-xs>
    			<p>Fecha de Publicación</p>
    		</div>
    	</div>
            <?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => -1,
              'category_name'    => libros,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
            	<div class="list-results" layout="column">
            		<a href="<?php the_permalink(); ?>" layout="row" class="list">
            			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p><?php the_field('tema'); ?></p></div>
            			<div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p><?php the_field('numero_de_registro'); ?></p></div>
            			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p>"<?php the_title(); ?>"</p></div>
            			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p><?php the_field('autor'); ?></p></div>
            			<div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p><?php the_field('fecha_de_publicacion'); ?></p></div>
            		</a>
            	</div>
            <?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
    </div>
</div>