<form  class="serachcont" method="get" id="searchform"  action="<?php echo esc_url( home_url( '/' ) ); ?>"  role="search" class="max-widht2" layout="row" layout-wrap layout-align="center center">
	<input class="text" flex="90" type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search …', 'shape' ); ?>" />   
	<button type="submit" class="submit botonlupa" name="submit" id="searchsubmit" >
</form>