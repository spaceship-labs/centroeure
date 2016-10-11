<?php get_header(); ?>
 
<div id="servicios" class="overflow" layout="row" layout-wrap flex="100">

	<div class="slider-home" layout="row" layout-align="center center" flex="100">
		<div class="boton-izq"><i class="icon-arrow-left2"></i></div>
		<div class="cont" layout="row" layout-align="center center" flex="100">
			<div class="max-widht3  wow bounceInUp" layout="column">
				<p class="title-1">Centro Eure <br> <span>Investigación, Asesoría y Evaluación</span></p>
			</div>
		</div>
		<div class="boton-der"><i class="icon-arrow-right2"></i></div>
	</div>

	<div class="green-line" layout="row" layout-align="center end" flex="100">
		<div class="triangulo-blanco"></div>
	</div>

	<div class="con-info-blanco" layout="row" layout-align="center center" flex="100">
		<div class="max-widht2" layout="column">
			<div layout="column" layout-align="center center" class=" wow bounceInUp">
				<i class="icon-servicio"></i>
				<p class="titulo">
					Servicios
				</p>
			</div>
			<p class="text">
				Nos dedicamos a <strong> asesorar, apoyar y orientar a los tomadores de decisiones </strong> (públicos y privados) sobre temas estratégicos, además de proveer información, insumos y argumentos para el diseño e implementación de políticas públicas. <br><br>

				Nuestra incidencia mayor está en el ámbito local, con los municipios y los estados. Trabajamos sobre todo con los <strong> gobiernos en proyectos de impacto local y regional </strong>, aunque nuestra labor involucra también al gobierno federal y sus organismos.<br><br>

				Aunque con menor frecuencia, también trabajamos con <strong> organizaciones privadas y sociales y formamos parte de diversas redes académicas y ciudadanas.</strong>
			</p>
		</div>
	</div>
<!--
	<div class="cont-iconos" layout="row" layout-align="center center" layout-wrap flex="100">
		<div class="max-widht2" layout="row" layout-align="space-between center" layout-wrap>
			<div class="cont" layout="column" flex-gt-xs="30" flex="100" info="info1">
				<i class="icon-servicio1"></i>
				<p><strong>investigación <br> aplicada</strong></p>
				<div class="info info1" layout="column" layout-align="center center">
					<p class="text">Discutir, debatir y construir conocimiento es parte de nuestro trabajo cotidiano. Nos preguntamos las causas, consecuencias e impactos de los fenómenos relacionados con el desarrollo, con el fin de avanzar en su entendimiento y tener más y mejores elementos para generar soluciones. Buscamos alternativas innovadoras a viejos problemas, tomando en cuenta el estado del arte del conocimiento.</p>
				</div>
			</div>
			<div class="cont" layout="column" layout-align="start center" flex-gt-sm="40" flex-sm="45" flex-xs="100">
				<i class="icon-servicio2"></i>
				<p><strong>asesoria y consultoría <br> especializada</strong></p>
			</div>
			<div class="cont" layout="column" layout-align="start center" flex-gt-sm="40" flex-sm="45" flex-xs="100">
				<i class="icon-servicio3"></i>
				<p><strong>evaluación</strong></p>
			</div>
			<div class="cont" layout="column" layout-align="start center" flex-gt-sm="40" flex-sm="45" flex-xs="100">
				<i class="icon-servicio4"></i>
				<p><strong>formación y <br> divulgación</strong></p>
			</div>
		</div>
	</div>
-->

	<div class="areas-home" layout="row" layout-align="center center" flex="100">
		<div class="max-widht2" layout="row" layout-align="center center" layout-wrap ng-controller="iconCTL">
			<div class="cont  wow bounceInLeft" layout="column" flex-gt-xs="35" flex="100" info="info1">
				<i class="icon-1"></i>
				<p><strong>investigación <br> aplicada</strong></p>
				<div class="info info1" layout="column" layout-align="center center">
					<p class="text">
						Discutir, debatir y construir conocimiento es parte de nuestro trabajo cotidiano. Nos preguntamos las causas, consecuencias e impactos de los fenómenos relacionados con el desarrollo, con el fin de avanzar en su entendimiento y tener más y mejores elementos para generar soluciones. Buscamos alternativas innovadoras a viejos problemas, tomando en cuenta el estado del arte del conocimiento.
					</p>
				</div>
			</div>
			<div class="cont wow bounceInRight" layout="column" flex-gt-xs="35" flex="100" info="info2">
				<i class="icon-2"></i>
				<p><strong>asesoria y consultoría <br> especializada</strong></p>
				<div class="info info2" layout="column" layout-align="center center">
					<p class="text">
						Abordar la compleja problemática urbana- metropolitana y de las regiones requiere conocimiento especializado y respaldado por un equipo de trabajo con experiencia. Nos dedicamos a apoyar a los tomadores de decisiones del sector público y privado para que puedan aprovechar nuestra capacidad y lograr las mejores soluciones posibles. De acuerdo con sus necesidades, elaboramos documentos estratégicos para atender problemáticas específicas, además de desarrollar planes, programas y proyectos de desarrollo con enfoque territorial y de sustentabilidad para diversos ámbitos y sectores.
					</p>
				</div>
			</div>
			<div class="cont wow bounceInLeft" layout="column" flex-gt-xs="35" flex="100" info="info3">
				<i class="icon-3"></i>
				<p><strong>evaluación</strong></p>
				<div class="info info3" layout="column" layout-align="center center">
					<p class="text">
						Llevamos a cabo evaluaciones de programas públicos con el fin de conocer sus resultados e impactos, de modo que puedan ser retroalimentados y mejoren su desempeño, logren sus objetivos y resuelvan los problemas para los cuales se plantean.
					</p>
				</div>
			</div>
			<div class="cont wow bounceInRight" layout="column" flex-gt-xs="35" flex="100" info="info4">
				<i class="icon-4"></i>
				<p><strong>formación y <br> divulgación</strong></p>
				<div class="info info4" layout="column" layout-align="center center">
					<p class="text">
						Un pilar de nuestro trabajo es compartir nuestro conocimiento y experiencia de modo que sea de utilidad para la comunidad y para los tomadores de decisiones. Por eso diseñamos e impartimos cursos, conferencias, talleres y seminarios sobre diversos temas relacionados con nuestro quehacer, y difundimos nuestros hallazgos en publicaciones nacionales e internacionales.
					</p>
				</div>
			</div>
		</div>
	</div>

<div layout="row" flex="100" class=" wow bounceInUp">
	<?php include('templates/redes.php') ?>
</div>

</div>

<?php get_footer(); ?>