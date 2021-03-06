<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
global $estado;
$estado = get_field('estado');
//var_dump ($estado);

 ?>

<div class="single-proyectos" layout="row" layout-wrap flex="100">
	
	<!--
	<div class="buscar" layout="row" layout-align="center center" flex="100">
		<i class="icon-LUPA  wow fadeInUp"></i>
	</div>
	-->

	<div class="header-proyecto" style="background: url('<?=$url?>');" layout="column" layout-align="end center" flex="100"  ng-controller="scrollCTL">
		<p class="title  wow fadeInUp"><?php the_title(); ?></p>
		<div class="line"></div>
		<div layout="row" layout-align="center center" ng-click="scrollTo('point',$event)">
			<i class="icon-ARROW_SLIDER  wow fadeInDown" ></i>
		</div>
	</div>

	<div  class="detalles-proyecto" layout="row" layout-align="center center" flex="100">
		<div class="max-widht" layout="column">
			<div layout="row" layout-align="center center">
				<div class="max-widht3" layout="row" layout-wrap layout-align="space-around start">
					<div class="cont-icon  wow fadeInLeft" layout="column" layout-align="start center" >
						<i class="icon-ALCANCE"></i>
						<p class="text"><strong>ALCANCE</strong></p>
						<p class="text"><?php the_field('alcance'); ?></p>
					</div>
					<div class="cont-icon  wow fadeInUp" layout="column" layout-align="start center" >
						<i class="icon-PAIS"></i>
						<p class="text"><strong>PAIS</strong></p>
						<p class="text"><?php the_field('pais'); ?></p>
					</div>
					<div class="cont-icon wow fadeInRight" layout="column" layout-align="start center" >
						<i class="icon-TERRITORIO"></i>
						<p class="text"><strong>AMBITO TERRITORIAL</strong></p>
						<p class="text"><?php the_field('localizacion'); ?></p>
					</div>
				</div>
			</div>
			<div id="point" class="mapa-single" layout="row" layout-align="space-between center" layout-wrap>
				<div class="map  wow fadeInRight" layout="row" layout-align="center center" flex flex-xs="100" flex-sm="100">
					<div id="map" flex="100"></div>
				</div>
				<div class="info  wow fadeInLeft" layout="column" flex flex-xs="100" flex-sm="100"> 
					<p class="title"><strong>LOCALIZACIÓN</strong></p>
					<?php if (get_field('zonas_metropolitanas')) { ?>
					<p class="text">
						<strong>Zonas Metropolitanas</strong><br><br>
						<?php the_field('zonas_metropolitanas'); ?>
					</p>
					<?php } ?>
					<?php if (get_field('entidades_federativas')) { ?>
					<p class="text">
						<strong>Entidades federativas</strong><br><br>
						<?php the_field('entidades_federativas'); ?>
					</p>
					<?php } ?>
				</div>
			</div>
			<div layout="row" layout-wrap layout-align="space-around start" >
				<div class="cont-icon  wow fadeInLeft" layout="column" layout-align="start center" >
					<i class="icon-CONTRATANTE"></i>
					<p class="text"><strong>ORGANO CONTRATANTE</strong></p>
					<p class="text"><?php the_field('órgano_contratante'); ?></p>
				</div>
				<div class="cont-icon wow fadeInUp" layout="column" layout-align="start center" >
					<i class="icon-FECHA_CIERRE"></i>
					<p class="text"><strong>FECHA DE CIERRE</strong></p>
					<p class="text"><?php the_field('fecha_de_cierre'); ?></p>
				</div>
				<div class="cont-icon wow fadeInRight" layout="column" layout-align="start center" >
					<i class="icon-DURACION"></i>
					<p class="text"><strong>DURACIÓN</strong></p>
					<p class="text"><?php the_field('duracion'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="descripcion-blanco" layout="row" layout-align="center center" flex="100">
		<div class="max-widht" layout="column">
			<div layout="row" layout-align="center center">
				<p class="title  wow fadeInUp">DESCRIPCIÓN DEL PROYECTO</p>
			</div>
			<div layout="row" layout-wrap layout-align="space-between start">
				<div layout="column" flex="100" >
					<div class="text  wow fadeInLeft">
						<?php the_content() ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="objetivos-cont" layout="row" layout-wrap flex="100">

		<div class="objetivos  wow fadeInLeft" layout="row" layout-align="center center" flex="100">
			<div class="max-widht" layout="row" layout-wrap layout-align="space-around center">
				<div class="cont" layout="column" flex="70">
					<p class="title">objetivos</p>
					<?php the_field('objetivos'); ?>
				</div>
				<div class="cont"><i class="icon-OBJETIVOS"></i></div>
			</div>
		</div>
	<!--
		<div class="objetivos  wow fadeInRight" layout="row" layout-align="center center" flex="100">
			<div class="max-widht" layout="row" layout-wrap layout-align="space-around center">
				<div layout="row" layout-align="center center" flex="100" >
					<p class="title">productos entregables</p>
				</div>
				<div class="cont"><i class="icon-PRODUCTOS"></i></div>
				<div class="cont" layout="column" flex="70">
					<?php the_field('productos_entregables'); ?>
				</div>
			</div>
		</div>

		<div class="objetivos  wow fadeInLeft" layout="row" layout-align="center center" flex="100">
			<div class="max-widht" layout="row" layout-wrap layout-align="space-around center">
				<div class="cont" layout="column" flex="70">
					<p class="title">componentes metodológicos</p>
					<?php the_field('componentes_metodologicos'); ?>
				</div>
				<div class="cont"><i class="icon-METODO"></i></div>
			</div>
		</div>
		-->

	</div>

	<div class="descripcion-blanco" layout="row" layout-align="center center" flex="100">
		<div class="max-widht" layout="column">
			<div layout="row" layout-align="center center">
				<p class="title  wow fadeInUp">PRINCIPALES RESULTADOS</p>
			</div>
			<div layout="row" layout-wrap layout-align="space-between start">
				<div layout="column" flex="100" >
					<p class="text wow fadeInLeft">
						<?php the_field('principales_resultados'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="pdf" layout="column" flex="100">
		<p>Descarga la información aquí</p>
		<a href="<?php the_field('pdf'); ?>" target="_blank" layout="row" layout-align="center center"><i class="icon-PDF"></i></a>
	</div>

</div>

<?php endwhile; endif; 

switch ($estado) {
	case 'Aguascalientes':
		  echo '<script>location_map = 19;</script>';
		break;
	case 'Baja California':
		  echo '<script>location_map = 1;</script>';
		break;
    case 'Baja California Sur':
		  echo '<script>location_map = 2;</script>';
		break;
	case 'Campeche':
		  echo '<script>location_map = 6;</script>';
		break;
	case 'Coahuila':
		  echo '<script>location_map = 27;</script>';
		break;
    case 'Colima':
		  echo '<script>location_map = 4;</script>';
		break;
	case 'Chiapas':
		  echo '<script>location_map = 13;</script>';
		break;
	case 'Chihuahua':
		  echo '<script>location_map = 16;</script>';
		break;
    case 'Distrito Federal':
		  echo '<script>location_map = 10;</script>';
		break;
	case 'Durango':
		  echo '<script>location_map = 29;</script>';
		break;
	case 'Guanajuato':
		  echo '<script>location_map = 30;</script>';
		break;
    case 'Guerrero':
		  echo '<script>location_map = 24;</script>';
		break;
	case 'Hidalgo':
		  echo '<script>location_map = 32;</script>';
		break;
	case 'Jalisco':
		  echo '<script>location_map = 20;</script>';
		break;
	case 'México':
		  echo '<script>location_map = 8;</script>';
		break;
    case 'Michoacán':
		  echo '<script>location_map = 21;</script>';
		break;
	case 'Morelos':
		  echo '<script>location_map = 9;</script>';
		break;
	case 'Nayarit':
		  echo '<script>location_map = 5;</script>';
		break;
    case 'Nuevo León':
		  echo '<script>location_map = 14;</script>';
		break;
	case 'Oaxaca':
		  echo '<script>location_map = 22;</script>';
		break;
	case 'Puebla':
		  echo '<script>location_map = 23;</script>';
		break;
    case 'Quintana Roo':
		  echo '<script>location_map = 7;</script>';
		break;
	case 'San Luis Potosí':
		  echo '<script>location_map = 31;</script>';
		break;
	case 'Sinaloa':
		  echo '<script>location_map = 15;</script>';
		break;
	case 'Sonora':
		  echo '<script>location_map = 3;</script>';
		break;
    case 'Tabasco':
		  echo '<script>location_map = 12;</script>';
		break;
	case 'Tamaulipas':
		  echo '<script>location_map = 26;</script>';
		break;
	case 'Tlaxcala':
		  echo '<script>location_map = 25;</script>';
		break;
	case 'Veracruz':
		  echo '<script>location_map = 17;</script>';
		break;
    case 'Yucatán':
		  echo '<script>location_map = 28;</script>';
		break;
	case 'Zacatecas':
		  echo '<script>location_map = 18;</script>';
		break;
};


?>