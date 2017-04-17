<?php
/* 
Template Name: Home
*/ 
?>
<?php get_header(); ?>
 
<div id="home" class="overflow" layout="row" layout-wrap flex="100">

	<div class="slider-home" layout="row" layout-align="center center" flex="100">
		<div class="boton-izq"><i class="icon-arrow-left2"></i></div>
		<div class="slide-home" layout="row" layout-align="center center" flex="100">
			 <?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => 5,
              'category_name'    => proyectos,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>
          	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  ?>
			<div class="cont item item-heigth" layout="row" layout-align="center center" flex="100" style="background: url(<?=$url?>)">
				<div class="max-widht3 wow fadeInUp" layout="column">
					<p class="title-1"><?php the_title(); ?></p>
					<p class="text">
						<?php the_excerpt();?>
					</p>
					<div layout="row" layout-align="center center">
						<a href="<?php the_permalink(); ?>" class="boton"><p>leer más</p></a>
					</div>
				</div>
			</div>
			<?php    
                endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {}
                wp_reset_postdata(); 
            ?>
			
		</div>
		<div class="boton-der"><i class="icon-arrow-right2"></i></div>
	</div>
	<div class="green-line" layout="row" layout-align="center end" flex="100">
		<div class="triangulo-blanco"></div>
	</div>

	<div class="text-home" layout="row" layout-align="center center" flex="100">
		<div class="max-widht2 wow fadeInUp" layout="column">
		 	<div layout="row" layout-align="center center">
				<div class="title" layout="row" layout-align="center center">
					<p>Centro Eure</p>
				</div>
			</div>
			<p class="text">
				Es una sociedad civil con 30 años de experiencia, dedicada a la investigación aplicada, así como a la asesoría y consultoría especializadas y a la formación y divulgación del conociminto en Estudios <br><br>
				Territoriales, planeación y evaluación de políticas públicas.Es un espacio de análisis, reflexión y diálogo y de formulación de propuestas sobre los fenómenos y problemas del desarrollo urbano-metropolitano
				y regional, del ambiente y en general de la sociedad.
			</p>
			<div layout="row" layout-align="center center">
				<a href="/curriculum" class="boton-blanco">
					<p>leer más</p>
				</a>
			</div>
		</div>
	</div>

	<div class="con-info-blanco" layout="row" layout-align="center center" flex="100">
		<div class="max-widht2 wow fadeInUp" layout="column">
			<div layout="column" layout-align="center center">
				<p class="titulo">
					Áreas de Especialización
				</p>
			</div>
		</div>
	</div>

	<div class="areas-home" layout="row" layout-align="center center" flex="100">
		<div class="max-widht2" layout="row" layout-align="center center" layout-wrap ng-controller="iconCTL">

			<?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type'         => 'post',
              'posts_per_page' => -1,
              'category_name'    => areas,
              'paged'  => $paged,
              );
            $loop_alternativo = new WP_Query($args);$info = 1;
            if( $loop_alternativo->have_posts() ):
              while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); $info++?>
				<div class="cont  wow fadeInLeft" layout="column" layout-align="center center" flex-gt-xs="30" flex="100" info="<?php echo $info ?>">
					<i class="<?php the_field('icono'); ?>"></i>
					<p><?php the_title(); ?></p>
					<div class="info <?php echo $info ?>" layout="column" layout-align="center center">
						<div class="text"><?php the_excerpt(); ?></div>
						<div layout="row" layout-align="center center">
							<a href="<?php the_permalink(); ?>" class="boton-blanco">
								<p>ver más</p>
							</a>
						</div>
					</div>
				</div>
			<?php    
                endwhile; endif;
                global $wp_query;
                $wp_query = $loop_alternativo ;
                if (function_exists( 'wp_pagenavi' )) {}
                wp_reset_postdata(); 
            ?>

		</div>
	</div>

	<div class="actualidad-home" layout="row" layout-align="center center" flex="100">
		<div class="max-widht1" layout="column">
			<div layout="row" layout-align="center center">
				<div class="title  wow fadeInUp" layout="row" layout-align="center center">
					<p>Actualidad</p>
				</div>
			</div>
			<div layout="row" layout-wrap layout-align="center start">
				<div class="cont-li border-list  wow fadeInLeft" layout="column" flex flex-xs="100">
					<ul>
						<li type="disc"><p><strong>En la oficina del historiador de La Habana, el Director de Centro EURE ofreció un curso sobre instrumentos de suelo urbano ante la posibilidad de apertura del mercado inmobiliario en Cuba.</strong></p></li>
						<li type="disc"><p><strong>Centro EURE, con la Fundación Plan Estratégico de Yucatán, publicará el libro Mérida metropolitana: una propuesta integral para su desarrollo.</strong></p></li>
						<li type="disc"><p><strong>Alfonso Iracheta, Director General de Centro EURE, fue nombrado por Joan Clos, Subsecretario General de la ONU y Director Ejecutivo de ONU Hábitat, como miembro del Consejo Global Asesor del Reporte sobre el estado de las ciudades en el mundo, 2012-2013.</strong></p></li>
					</ul>
				</div>
				<div class="cont-li wow fadeInRight" layout="column" flex flex-xs="100">
					<ul>
						<li type="disc"><p><strong>Centro EURE, con el Instituto de Políticas para el Transporte y el Desarrollo, ITDP México, está elaborando una metodología para la planeación de la movilidad y el desarrollo urbano.</strong></p></li>
						<li type="disc"><p><strong>Alfonso Iracheta, Director General de Centro EURE, dará un curso en Cochabamba, Bolivia, sobre las metodologías de planeación diseñadas en Centro EURE.</strong></p></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>

<div layout="row" class="" flex="100">
	<?php include('templates/contacto.php') ?>
</div>

<?php get_footer(); ?>