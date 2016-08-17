<div id="biblioteca" class="" layout="row" layout-wrap flex="100">

  <div class="slider-home" layout="row" layout-align="center center" style="background: url(<?=get_bloginfo('template_directory')?>/img/2.3-CONTACTO.jpg);" layout="row" layout-wrap layout-align="center center" flex="100">
    <div class="boton-izq"><i class="icon-arrow-left2"></i></div>
    <div class="cont" layout="row" layout-align="center center" flex="100">
      <div class="max-widht3" layout="column">
        <p class="title-1"><span>Biblioteca</span><br> Responde a necesidades prácticas de los proyectos.</p>
      </div>
    </div>
    <div class="boton-der"><i class="icon-arrow-right2"></i></div>
  </div>

  <div class="green-line biblioteca" layout="row" layout-align="center center" flex="100">
    <form method="get" id="searchform"  action="<?php echo esc_url( home_url( '/' ) ); ?>"  role="search" class="max-widht2" layout="row" layout-wrap layout-align="space-between center">
      <div class="cont-select" layout="row" flex-gt-sm="45" flex="100">
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
          <input class="text" flex-gt-sm="45" flex="100" type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search …', 'shape' ); ?>" />   
      <input type="hidden" name="cat" value="libros">
        </form>
  </div>
    <div layout="row" layout-align="center center" flex="100">
      <div class="max-widht1" layout="row" flex-xs="100">
          <div class="listas-table" layout="column" flex="100">
              <div class="header-list" layout="row">
                  <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
                      <p>Tema</p>
                  </div>
                  <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs>
                      <p>No. de Registro</p>
                  </div>
                  <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
                      <p>Titulo</p>
                  </div>
                  <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33">
                      <p>Autor</p>
                  </div>
                  <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs>
                      <p>Fecha de Publicación</p>
                  </div>
                </div>
                <div class="list-results" layout="column">
                   <?php
                      global $query_string;
                      $query_args = explode("&", $query_string);
                      $search_query = array();

                      foreach($query_args as $key => $string) {
                          $query_split = explode("=", $string);
                          $search_query[$query_split[0]] = urldecode($query_split[1]);
                      } //  foreach
                      $the_query = new WP_Query($search_query);
                      if ( $the_query->have_posts() ) : 
                      ?>
                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                          foreach((get_the_category()) as $category) {
                              $mycat = $category->cat_name . ' ';
                          }
                          if ($mycat == "libros " ) {
                      ?>
                          <a href="<?php the_permalink(); ?>" layout="row" class="list">
                                <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p><?php the_field('tema'); ?></p></div>
                                <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p><?php the_field('numero_de_registro'); ?></p></div>
                                <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p>"<?php the_title(); ?>"</p></div>
                                <div class="cont" layout="row" layout-align="center center" flex="20" flex-xs="33"><p><?php the_field('autor'); ?></p></div>
                                <div class="cont" layout="row" layout-align="center center" flex="20" hide-xs><p><?php the_field('fecha_de_publicacion'); ?></p></div>
                          </a>
                      <?php } endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                      <div class="paginacion" layout="row" layout-align="center center" flex="90">
                          <?php 
                          global $wp_query;
                          $big = 999999999;
                          $pagination = paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'prev_text'    => __('<span class="arrows next blog-arrows"><< Anterior <i class="icon-flecha-1"></i> </span>'),
                            'next_text'    => __('<span class="arrows previous blog-arrows"> Siguiente >> <i class="icon-flecha2"></i> </span>'),
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                          ) );
                          if( $pagination != '' ){
                            echo "<div class='row-fluid row-center pages' layout='row' layout-align='center center' flex='100'>{$pagination}</div>";
                          }else{
                            echo "";
                          }
                        ?>
                      </div>
                      <?php else : ?>
                      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                      <?php endif; ?>
                    </div>
                </div>
          </div>
    </div>
</div>
