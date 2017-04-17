<div class="max-widht1  wow fadeInUp" layout="row" flex-xs="100">
    <div class="listas-table" layout="column" flex="100">
        <div class="header-list" layout="row">
            <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
                <p>Nombre del proyecto</p>
            </div>
            <div class="cont" layout="row" layout-align="center center" flex="10" hide-xs>
                <p>Alcance</p>
            </div>
            <div class="cont" layout="row" layout-align="center center" flex="10" hide-xs>
                <p>Pais</p>
            </div>
            <div class="cont" layout="row" layout-align="center center" flex="15" flex-xs="33">
                <p>Localización</p>
            </div>
            <div class="cont" layout="row" layout-align="center center" flex="20"  flex-xs="33">
                <p>Organo Contratante</p>
            </div>
            <div class="cont" layout="row" layout-align="center center" flex="10" hide-xs>
                <p>Duración</p>
            </div>
            <div class="cont" layout="row" layout-align="center center" flex="15" hide-xs>
                <p>Fecha de Cierre</p>
            </div>
        </div>
        <div class="list-results" layout="column">
            <?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 10,
              'category_name'    => proyectos,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
                <a href="<?php the_permalink(); ?>" layout="row" class="list">
                    <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33" ><p><?php the_title(); ?></p></div>
                    <div class="cont" layout="row" layout-align="center center" flex="10" hide-xs><p><?php the_field('alcance'); ?></p></div>
                    <div class="cont" layout="row" layout-align="center center" flex="10" hide-xs><p><?php the_field('pais'); ?></p></div>
                    <div class="cont" layout="row" layout-align="center center" flex="15" flex-xs="33" ><p><?php the_field('localizacion'); ?></p></div>
                    <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33" ><p><?php the_field('órgano_contratante'); ?></p></div>
                    <div class="cont" layout="row" layout-align="center center" flex="10" hide-xs><p><?php the_field('duracion'); ?></p></div>
                    <div class="cont" layout="row" layout-align="center center" flex="15" hide-xs><p><?php the_field('fecha_de_cierre'); ?></p></div>
                </a>
            <?php    
                endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {}
                wp_reset_postdata(); 
            ?>

            <div class="paginacion" layout="row" layout-align="center center" flex="90">
                <?php 
                    global $wp_query;
                    $big = 999999999;
                    $pagination = paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'prev_text'    => __('<span class="arrows next blog-arrows"><< Anterior <i class="icon-flecha-1"></i> </span>'),
                        'next_text'    => __('<span class="arrows previous blog-arrows"> Siguiente >> <i class="icon-flecha2"></i> </span>'),
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                    ) );
                    if( $pagination != '' ){
                        echo "<div class='row-fluid row-center pages' layout='row' layout-align='center center' flex='100'>{$pagination}</div>";
                    }else{
                        echo "";
                    }
                ?>
            </div>
        </div>
    </div>
</div>