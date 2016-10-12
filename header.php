<!DOCTYPE html>
<html ng-app="project" scroll>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title("Centroeure"); ?></title>
	
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/bower_components/angular-material/angular-material.min.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/style.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/animate.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/owl.theme.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/owl.transitions.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/main.css">
	<link rel="icon" type="image/ico" href="<?=get_bloginfo('template_directory')?>/img/favicon.ico">
	<script>
		var location_map = 0 ;
	</script>
</head>
<body ng-cloak onload="inicializar_mapa()">

<div class="header wow bounceInDown" layout="row" layout-align="center center" flex="100" hide show-gt-sm>
	<div class="max-widht1" layout="row" layout-align="space-between center">
		<a href="/home/"><img src="<?=get_bloginfo('template_directory')?>/img/logo.png" alt=""></a>
		<div layout="row" layout-align="space-between center">
			<a href="/home/" class="link"><p>home</p></a>
			<div class="dropdown">
				<a class="link" ><p>quiénes somos</p></a>
				<div class="cont" layout="column">
					<a href="/curriculum/" class="enlace"><p><strong>cv centro eure</strong></p></a>
					<a href="/equipo/" class="enlace"><p><strong>equipo de trabajo</strong></p></a>
					<a href="/alianzas/" class="enlace"><p><strong>alianzas</strong></p></a>
					<a href="/contacto/" class="enlace"><p><strong>contacto</strong></p></a>
				</div>
			</div>
			<a href="/servicios/" class="link"><p>servicios</p></a>
			<a href="/proyectos/" class="link"><p>proyectos</p></a>
			<!--<a href="/publicaciones/" class="link"><p>publicaciones</p></a>-->
			<a href="/biblioteca/" class="link"><p>biblioteca</p></a>
		</div>
		<a href="/contacto/" class="link contacto"><p>contacto</p></a>
	</div>
</div>

<!--
<div class="movil-header" layout="row" layout-align="center center" ng-cloak ng-controller="movil" hide-gt-sm>
	
	<div class="max-widht1" layout="row" layout-align="space-between center">
		<i class="icon-menu" ng-click="openMenu()"></i>
		<a href="/home"><img src="<?=get_bloginfo('template_directory')?>/img/logo.png" alt=""></a>
		<a href="" class="link contacto"><p>contacto</p></a>
	</div>
    
</div>
-->

<div id="movil-header wow bounceInDown" class="movil-header" layout="row" layout-wrap layout-align="start start" flex  ng-cloak  hide-gt-sm ng-controller="MovilCtrl">
	<div id="activar-header" layout="row" layout-align="space-between center"  flex="100">
		<div ng-click='mostrarMenu("")' class="needsclick boton-menu" ><i class="icon-menu abrir-menu" ></i></div>
		<a href="/home/"><img src="<?=get_bloginfo('template_directory')?>/img/logo.png" alt=""></a>
		<a href="/contacto/" class="link contacto"><p>contacto</p></a>
	</div>
	<div class="movil-header-cont" layout="row" layout-wrap flex="100" ng-show='menuState.show'>
		<div class="menu-movil " layout="row" layout-align="start center" flex="100"><a href="/home/"><h4>Home</h4></a></div>
		<div layout="row" layout-wrap flex="100">
			<div class="menu-movil needsclick" ng-click='subMenu1("")' layout="row" layout-align="start center" flex="100"><a><h4>quiénes somos</h4></a></div>	
			<div class="submenu-movil" ng-show='subMenu1.show' layout="row" layout-wrap flex="100">
				<ul class="ul-submenu">	
					<li><a href="/curriculum/">cv centro eure</a></li>
					<li><a href="/equipo/">equipo de trabajo</a></li>
					<li><a href="/alianzas/">alianzas</a></li>
					<li><a href="/contacto/">contacto</a></li>
				</ul>	
			</div>
		</div>
		<div class="menu-movil" layout="row" layout-align="start center" flex="100"><a href="/servicios/"><h4>servicios</h4></a></div>
		<div class="menu-movil" layout="row" layout-align="start center" flex="100"><a href="/proyectos/"><h4>proyectos</h4></a></div>
		<div class="menu-movil" layout="row" layout-align="start center" flex="100"><a href="/publicaciones/"><h4>publicaciones</h4></a></div>
		<div class="menu-movil" layout="row" layout-align="start center" flex="100"><a href="/biblioteca/"><h4>biblioteca</h4></a></div>	
	</div>
</div>


<div class="global" layout="row" layout-wrap flex="100">