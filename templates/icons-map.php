<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_aguascalientes,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
	
	<style>
		i.icon-LOCATION.icon-mx-ag{visibility: visible!important}
	</style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_baja_california,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-bc{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_baja_california_sur,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-bs{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_campeche,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-cm{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_chiapas,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-cs{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_chihuahua,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-chi{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_coahuila,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-co{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_colima,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-col{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_distrito_federal,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-df{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_durango,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-dg{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_edo_mex,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-edo{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_guanajuato,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-guan{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_guerrero,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-gerr{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_hidalgo,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-hid{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_jalisco,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-ja{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_michoacan,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mich{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_morelos,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-mo{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_nayarit,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-na{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_nuevo_leon,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-nuevoleon{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_oaxaca,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-oa{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_puebla,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-pu{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_queretaro,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-qt{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_quintana_roo,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-qr{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_san_luis,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-sl{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_sinaloa,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-si{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_sonora,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-son{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_tabasco,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-tb{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_tamaulipas,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-tamaulipas{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_tlaxcala,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-tl{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_veracruz,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-ve{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_yucatan,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-yucatan{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>

<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
  'post_type'         => 'post',
  'category_name'    =>   proyecto_zacatecas,
  );
$loop_alternativo = new WP_Query($args);
if( $loop_alternativo->have_posts() ):
  while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
  
  <style>
    i.icon-LOCATION.icon-mx-za{visibility: visible!important}
  </style>
 
<?php  endwhile; endif;
  global $wp_query;
  $wp_query = $loop_alternativo ;
wp_reset_postdata(); ?>