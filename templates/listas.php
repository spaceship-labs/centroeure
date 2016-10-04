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

    		<a dir-paginate="publicacion in publicaciones | itemsPerPage: 5" 
            current-page="pagination.currentPage"
            total-items="pagination.totalItems" 
            ng-href="/libro/?id={{publicacion._id['$oid']}}" 
            layout="row" 
            class="list">             
    			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p>{{publicacion.Autor}}</p></div>
    			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p>{{publicacion['Título']}}</p></div>
                <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p>{{publicacion.Editorial}}</p></div>
    			<div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p>{{publicacion.ISBN}}</p></div>
    			<div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p>{{publicacion['Tipo de documento']}}</p></div>
                <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p>{{publicacion['Fecha de publicación']}}</p></div>
    		</a>

            <dir-pagination-controls 
                class='paginacion' 
                layout-align="center center" 
                flex="90" 
                on-page-change="pageChanged(newPageNumber)"  ></dir-pagination-controls>
            <!-- <div class="paginacion" layout="row" layout-align="center center" flex="90">
                <div class='row-fluid row-center pages' layout='row' layout-align='center center' flex='100'>                    
                    <span class="arrows next blog-arrows"> &lt;&lt; Anterior <i class="icon-flecha-1"></i> </span>
                    <a class="page-numbers" href="">1</a>
                    <a class="page-numbers" href="">2</a>
                    <a class="page-numbers" href="">3</a>
                    <a class="page-numbers" href="">4</a>
                    <span class="arrows previous blog-arrows"> Siguiente &gt;&gt; <i class="icon-flecha2"></i> </span>                
                </div>
            </div> -->
    	</div>
           
    </div>
</div>