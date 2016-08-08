<div class="footer" layout="column" flex="100" > 
		<div class="cont-verde" layout="row" layout-align="center center">
			<a href="" class="cont  wow bounceInLeft" layout="row" layout-align="center center">
				<i class="icon-social1"></i>
			</a>
			<a href="" class="cont  wow bounceInUp" layout="row" layout-align="center center">
				<i class="icon-social2"></i>
			</a>
			<a href="" class="cont  wow bounceInRight" layout="row" layout-align="center center">
				<i class="icon-social3"></i>
			</a>
			<a href="" class="cont  wow bounceInLeft" layout="row" layout-align="center center">
				<i class="icon-social4"></i>
			</a>
			<a href="" class="cont  wow bounceInRight" layout="row" layout-align="center center">
				<i class="icon-SOCIAL_5"></i>
			</a>
		</div>
		<div class="cont-blanco" layout="row" layout-align="center center">
			<div class="max-widht1" layout="column" >
				<div layout="row" layout-align="center center">
					<div class="title  wow bounceInUp" layout="row" layout-align="center center">
						<p>Contacto</p>
					</div>
				</div>
				<div layout="row" layout-align="space-around start" layout-wrap>
					<form action="" class="formulario  wow bounceInLeft" layout="column" flex="90" flex-gt-xs="45">
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
					<div layout="row" layout-wrap layout-align="start start" flex="90" flex-gt-xs="45" class=" wow bounceInRight">
						<p class="titulo">DETALLES DE CONTACTO</p>
						<div layout="row" layout-align="start center" flex="100">
							<div layout="column" >
								<i class="icon-tel datos"></i>
							</div>
							<div layout="column" >
								<p class="tel">TELÉFONO</p>
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
					</div>
				</div>
			</div>
		</div>
	</div>