<div id="servicios" class="overflow" layout="row"  layout-wrap flex="100">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
			<div class="con-info-blanco" layout="row" layout-align="center center" flex="100">
				<div class="max-widht3" layout="column">
					<div layout="column" layout-align="center center" class=" wow bounceInUp">
						<i class="<?php the_field('icono'); ?>"></i>
						<p class="titulo">
							<?php the_title(); ?>
						</p>
					</div>
					<p class="text">
						<?php the_content(); ?>
					</p>
				</div>
			</div>
			
	<?php endwhile; endif; ?>

</div>