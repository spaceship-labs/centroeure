<div id="proyectos" class="" layout="row" layout-wrap flex="100">
	
	<div class="head-proyectos" layout="column" layout-align="center center" flex="100">
		<p class="titulo"><strong>Proyectos en México</strong></p>
		<div class="line"></div>
		<p class="text">Para visualizar los proyectos da click sobre las áreas marcadas con el icono de locación.</p>
	</div>

	<div class="map" layout="row" flex="100">
		<div id="container" flex="100"></div>
		<?php include('templates/proyectos.php') ?>
	</div>

	<div class="green-line biblioteca" layout="row" layout-align="center center" flex="100">
		<form role="search" action="/proyectos" method="get" class="max-widht2" layout="row" layout-wrap layout-align="center center">
			<input type="search" name="s" class="text" name="s" flex="90">
        </form>
	</div>

	<div layout="row" layout-align="center center" flex="100">
		
		<div class="max-widht1" layout="row" flex-xs="100">
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
		    		<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
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
					    global $query_string;
					    $query_args = explode("&", $query_string);
					    $search_query = array();

					    foreach($query_args as $key => $string) {
					      $query_split = explode("=", $string);
					      $search_query[$query_split[0]] = urldecode($query_split[1]);
					    } // foreach

					    $the_query = new WP_Query($search_query);
					    if ( $the_query->have_posts() ) : 
					    ?>
					    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
					    	foreach((get_the_category()) as $category) {
    							$mycat = $category->cat_name . ' ';
							}
							if ($mycat == "proyectos " ) {
						?>
			        		<a href="<?php the_permalink(); ?>" layout="row" class="list">
			        			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p><?php the_title(); ?></p></div>
			        			<div class="cont" layout="row" layout-align="center center" flex="10" hide-xs><p><?php the_field('alcance'); ?></p></div>
			        			<div class="cont" layout="row" layout-align="center center" flex="10" hide-xs><p><?php the_field('pais'); ?></p></div>
			        			<div class="cont" layout="row" layout-align="center center" flex="15" flex-xs="33"><p><?php the_field('localizacion'); ?></p></div>
			        			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p><?php the_field('órgano_contratante'); ?></p></div>
			                    <div class="cont" layout="row" layout-align="center center" flex="10" hide-xs><p><?php the_field('duracion'); ?></p></div>
			                    <div class="cont" layout="row" layout-align="center center" flex="15" hide-xs><p><?php the_field('fecha_de_cierre'); ?></p></div>
			        		</a>
		             <?php } endwhile; ?>
					 <?php wp_reset_postdata(); ?>
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
					 <?php else : ?>
    					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					 <?php endif; ?>
		    	</div>
		    </div>
		</div>

	</div>

</div>