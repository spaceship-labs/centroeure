<div class="max-widht1 wow bounceInUp" layout="row" flex-xs="100">
    <div class="listas-table" layout="column" flex="100">
    	<div class="header-list" layout="row">
    		<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
    			<p>Autor</p>
    		</div>            
            <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
                <p>Título</p>
            </div>
    		<div class="cont" layout="row" layout-align="center center" flex="20" hide-xs>
    			<p>Editorial</p>
    		</div>
    		<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
    			<p>ISBN</p>
    		</div>
            <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs>
                <p>Tipo</p>
            </div>
            <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs>
                <p>Fecha de Publicación</p>
            </div>
    	</div>
           
    	<div class="list-results" layout="column">
    		<a ng-href="/libro/?id={{publicacion._id['$oid']}}" layout="row" class="list" ng-repeat='publicacion in publicaciones'>
    			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p>{{publicacion.Autor}}</p></div>
    			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p>{{publicacion['Título']}}</p></div>
                <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p>{{publicacion.Editorial}}</p></div>
    			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p>{{publicacion.ISBN}}</p></div>
    			<div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p>{{publicacion['Tipo de documento']}}</p></div>
                <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p>{{publicacion['Fecha de publicación']}}</p></div>
    		</a>
    	</div>
           
    </div>
</div>