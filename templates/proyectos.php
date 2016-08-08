<div class="map-box so " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">sonora</p></div>
		<ul>
		<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_sonora,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box col " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">colima</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_colima,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box edo " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">Edo. de México</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_edo_mex,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box nuevoleon " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">Nuevo Leon</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_nuevo_leon,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box chi " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">Chihuahua</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_chihuahua,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box ja " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">Jalisco</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_jalisco,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mich " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">Michoacan</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_michoacan,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box gerr " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">Guerrero</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_guerrero,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box tamaulipas " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">tamaulipas</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_tamaulipas,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box yucatan " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">yucatan</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_yucatan,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box guan " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">guanajuato</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_guanajuato,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box hid " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">hidalgo</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_hidalgo,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-bc " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">baja california</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_baja_california,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-bs " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">baja california sur</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_baja_california_sur,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-na " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">nayarit</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_nayarit,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-cm " layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">campeche</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_campeche,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-qr" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">quintana roo</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_quintana_roo,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-mo" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">morelos</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_morelos,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-df" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">distrito federal</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_distrito_federal,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-qt" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">queretaro</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_queretaro,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-tb" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">tabasco</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_tabasco,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-cs" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">chiapas</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_chiapas,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-si" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">sinaloa</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_sinaloa,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-ve" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">veracruz</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_veracruz,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-za" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">zacatecas</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_zacatecas,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-ag" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">aguascalientes</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_aguascalientes,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-oa" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">oaxaca</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_oaxaca,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-pu" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">puebla</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_puebla,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-tl" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">tlaxcala</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_tlaxcala,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-co" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">coahuila</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_coahuila,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-dg" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">durango</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_durango,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>

<div class="map-box mx-sl" layout="row" layout-align="space-between start" layout-wrap>
	<div class="imagen" flex-gt-sm="45" flex="100"></div>
	<div class="info" layout="column" flex-gt-sm="55" flex="100">
		<div layout="row" layout-align="end end">
			<i class="icon-ICONO_TACHE" onclick='Map()'></i>
		</div>
		<div layout="row" layout-align="center center"><p class="title">san luis potosi</p></div>
		<ul>
			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 3,
              'category_name'    => proyecto_san_luis,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
				<li type="disc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php    endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {
            }
            wp_reset_postdata(); ?>
		</ul>
	</div>
	<div class="triangulo-blanco-map"></div>
</div>