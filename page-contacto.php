<?php get_header(); ?>


<div id="contacto" class="overflow" layout="row" layout-wrap flex="100">

	<div class="slider-home" layout="row" layout-align="center center" layout="row" layout-wrap layout-align="center center" flex="100"  >
		<!--<div class="boton-izq"><i class="icon-arrow-left2"></i></div>-->
		<div class="cont  wow fadeInUp" layout="row" layout-align="center center" flex="100" ng-controller="scrollCTL">
			<div class="max-widht3" layout="column">
				<p class="title-1"><span>Acércate a Nostros</span><br> Información de contacto</p>
			    <i class="icon-ARROW_SLIDER  wow fadeInDown" ng-click="scrollTo('point',$event)"></i>
			</div>
		</div>
		<!--<div class="boton-der"><i class="icon-arrow-right2"></i></div>-->
	</div>

	<div class="green-line" layout="row" layout-align="center end" flex="100">
		<div class="triangulo-blanco"></div>
	</div>

	<div id="point" class="footer" layout="column" flex="100" > 
		<div class="cont-blanco" layout="row" layout-align="center center">
			<div class="max-widht1" layout="column" >
				<div layout="row" layout-align="center center" class=" wow fadeInUp">
					<div class="title" layout="row" layout-align="center center">
						<p>Contacto</p>
					</div>
				</div>
				<div layout="row" layout-align="space-around start" layout-wrap>
					<form action="" class="formulario  wow fadeInLeft" layout="column" flex="90" flex-gt-xs="45">
						<div class="cont" layout="row" layout-align="space-between center" >
							<div layout="column" flex="100">
								<input name="clientname" type="text" class="input" id="last_name" ng-model="formData.name" required ng-class='{ error: WebToLeadForm.last_name.$invalid && !WebToLeadForm.$pristine }' capitalize-first placeholder="Nombre*:">
							</div>
						</div>
						<div class="cont" layout="row" layout-align="space-between center" >
							<div layout="column" flex="100">
								<input name="email" type="email" class="input" id="email1" name="email1" ng-model="formData.email" required ng-class='{ error: WebToLeadForm.email1.$invalid && !WebToLeadForm.$pristine }' ng-change="validateInput(WebToLeadForm,formData,'email')" placeholder="E-mail*:">
							</div>
						</div>
						<div class="cont" layout="row" layout-align="space-between center" >
							<div layout="column" flex="100">
								<input name="clientname" type="text" class="input" id="last_name" ng-model="formData.name" required ng-class='{ error: WebToLeadForm.last_name.$invalid && !WebToLeadForm.$pristine }' capitalize-first placeholder="Titulo*:">
							</div>
						</div>
						<div class="cont" layout="row" layout-align="space-between center" >
							<div layout="column" flex="100">
								<textarea name="asunto" class="input" id="description" name="description" ng-model="formData.message" required ng-class='{ error: WebToLeadForm.description.$invalid && !WebToLeadForm.$pristine }' replace-non-alphanumerics placeholder="Mensaje*:"></textarea>
							</div>
						</div>
						<div class="cont" layout="row" layout-align="start start" >
							<input type="submit" value="enviar" class="enviar" ng-disabled="!WebToLeadForm.$valid">
						</div>
					</form>
					<div layout="row" layout-wrap layout-align="start start" flex="90" flex-gt-xs="45" class=" wow fadeInRight">
						<p class="titulo">DETALLES DE CONTACTO</p>
						<div layout="row" layout-align="start center" flex="100">
							<div layout="column" >
								<i class="icon-tel datos"></i>
							</div>
							<div layout="column" >
								<p class="tel">Teléfono</p>
								<p class="tel">+52 (728) 282 20 72</p>
								<p class="tel margin">+52 (728) 282 20 98</p>
							</div>
						</div>
						<div layout="row" layout-align="start center" flex="100">
							<div layout="column" >
								<i class="icon-MAIL datos"></i>
							</div>
							<div layout="column" >
								<p class="tel">E-MAIL</p>
								<p class="tel">contacto@cetroeure.org.mx</p>
							</div>
						</div>
						<div class="cont-redes" layout="row" layout-align="center center">
							<!--<a href="" class="cont" layout="row" layout-align="center center">
								<i class="icon-social1"></i>
							</a>-->
							<a href="" class="cont" layout="row" layout-align="center center">
								<i class="icon-social2"></i>
							</a>
							<a href="" class="cont" layout="row" layout-align="center center">
								<i class="icon-social3"></i>
							</a>
							<a href="" class="cont" layout="row" layout-align="center center">
								<i class="icon-social4"></i>
							</a>
							<a href="" class="cont" layout="row" layout-align="center center">
								<i class="icon-social5"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mapa  wow fadeInUp" flex="100">
			<div id="mapa_div"></div>
	</div>

</div>

<?php get_footer(); ?>