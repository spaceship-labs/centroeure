<div id="biblioteca" class="" layout="row" layout-wrap flex="100" ng-controller='libroCTL'>

	<div class="slider-home" layout="row" layout-wrap layout-align="center center" flex="100">
		<!--<div class="boton-izq"><i class="icon-arrow-left2"></i></div>-->
		<div class="cont" layout="row" layout-align="center center" flex="100">
			<div class="max-widht3  wow fadeInUp" layout="column">
				<p class="title-1"><span>Biblioteca</span><br> Responde a necesidades prácticas de los proyectos.</p>
			</div>
		</div>
		<!--<div class="boton-der"><i class="icon-arrow-right2"></i></div>-->
	</div>

	<div class="green-line biblioteca" layout="row" layout-align="center center" flex="100">
		<form action="/biblioteca/" method="get" class="max-widht2" layout="row" layout-wrap layout-align="space-between center">
			<div class="cont-select  wow fadeInLeft" layout="row" flex-gt-sm="45" flex="100">
				<md-select ng-model="ctrl.userState" flex>
			          <md-option ng-disabled="$index === 1">
			            AUTOR
			          </md-option>
			          <md-option ng-disabled="$index === 1">
			            TITULO
			          </md-option>
			          <md-option ng-disabled="$index === 1">
			            NÚMERO DE REGISTRO
			          </md-option>
			          <md-option ng-disabled="$index === 1">
			            FECHA DE PUBLICACIÓN
			          </md-option>
		        </md-select>
		        <input type="hidden" value="{{ctrl.userState}}" name="tipo">
		        <button layout="row" layout-align="center center">
		        	<i class="icon-LUPA_SEARCH_BAR"></i>
		        </button>
	        </div>
	        <input type="text" class="text  wow fadeInRight" flex-gt-sm="45" flex="100">
        </form>
	</div>

	<div class="ficha" layout="row" layout-align="center center" flex="100">
		<div class="max-widht" layout="row" layout-align="space-between start" layout-wrap>
			<div ng-if='book.volumeInfo.imageLinks.thumbnail' class="imagen  wow fadeInLeft" flex-gt-xs="30" flex="100" layout-align='center center' layout='row'>
				<img ng-src='{{book.volumeInfo.imageLinks.thumbnail}}'/>
			</div>
			<div class="info wow fadeInRight" layout="column"  flex-gt-xs="65" flex="100">
				<p class="titulo">{{libro['Título']}}</p>
				<p class="subtitulo">{{libro['Editorial']}}</p>
				<p class="autor">Por {{libro['Autor']}}</p>
				<div><div class="line"></div></div><!-- 
				<p class="text1">{{libro['Notas/Observaciones']}}</p>
				<p class="text2">{{libro['']}}</p> -->
			</div>
		</div>
	</div>

	<div class="detalles-libro" layout="row" layout-align="center center" flex="100">
		<div class="max-widht" layout="column">
			<div layout="row" layout-align="center center">
				<p class="title  wow fadeInUp">Detalles del libro</p>
			</div>
			<div class="cont  wow fadeInLeft" layout="row" layout-wrap layout-align="center center">
				<div class="box border" layout="column" flex flex-xs="100">
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Editorial:</p>
						<p class="text2">{{libro['Editorial']}}</p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Fecha de publicación:</p>
						<p class="text2">{{libro['Fecha de publicación']}}	</p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Número de páginas</p>
						<p class="text2">{{libro['Número de páginas']}}</p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Código</p>
						<p class="text2">{{libro['ISBN']}}</p>
					</div>
				</div>
				<div class="box" layout="column" flex flex-xs="100">
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Tipo de documento:</p>
						<p class="text2">{{libro['Tipo de documento']}}</p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Notas/Observaciones:</p>
						<p class="text2">{{libro['Notas/Observaciones']}}	</p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Página Web</p>
						<p class="text2">{{libro['Página Web']}}</p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Fecha de Captura</p>
						<p class="text2">{{libro['Fecha de Captura']}}</p>
					</div>
					<div layout="row" layout-align="space-between center" >
						<p class="text1">Ubicación propuesta</p>
						<p class="text2">{{libro['Ubicación propuesta']}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- 	
	<div class="libros-relacionados" layout="row" layout-align="center center" flex="100">
		<div class="max-widht" layout="column">
			<div layout="row" layout-align="center center">
				<p class="title  wow fadeInUp">Titulos Relacionados</p>
			</div>
			<div class="cont  wow fadeInRight" layout="row" layout-wrap layout-align="space-around center">
				
			</div>
		</div>
	</div> -->
</div>