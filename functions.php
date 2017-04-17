<?php
add_theme_support('post-thumbnails');
add_image_size('med_thumb',300,200,true);

function custom_excerpt_length( $length ) {
  return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/*Contact functions */
function cleanPosUrl($str) {
  return stripslashes($str);
}
function check_email_address($email) {
  return preg_match('/^[^@]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/', $email);
}
/* 
  return an integer as status result fi mail send 
  0   : Null email
  1   : Success
  2   : Fail on send php function
  3   : invalid email
*/
  function do_contact(){
    $name_field="clientname";
    $email_field="email";
    $asunto_field="asunto";
    $phone_field="phone";
    $email_subject = 'Contacto desde http://brightside.com';
    $referring_page = "http://brightside.com.mx";
    $contact_email = 'ingbarahonacarlos@hotmail.com';
  //$contact_email = 'contacto@lamaceta.mx';
    $recipient_name = '';
    $result = 4;
    $text = '';
    foreach ($_POST as $key => $value){
      $value = cleanPosUrl($value);
      if($key != 'submit'){
        if($key != 'sendContactEmail')
          $text = $text."\n".$key.": ".$value;
      }
    }
    if(isset($_POST[$email_field])){
      if(check_email_address($_POST[$email_field])){
        $to = $contact_email;
        $subject = $email_subject.': '.$_POST[$name_field];
        $subject = utf8_decode($subject);       
        $headers = 'From:'.$_POST[$email_field];
        $mailit = wp_mail($to,$subject,$text,$phone_field,$headers);
        if(@$mailit){
          $result = 1;
        }else{
          $result = 2;
        }
      }else
      $result = 3;
    }
    return $result;
  }
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

/**
 * Extend WordPress search to include custom fields
 *
 * http://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
   
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );


// [equipo nombre='nombre' puesto='puesto' thumb='135']Pequeña descripción[/equipo]
function team_func( $atts , $content ) {
    $a = shortcode_atts( array(
        'nombre' => 'something',
        'puesto' => 'something else',
        'id' => 'some',
        'thumb' => null
    ), $atts );
    $img = wp_get_attachment_image($a['thumb'],'med_thumb');
    $str =  <<<EOF
      <div class="cont wow bounceInUp" layout="column" flex-gt-sm="30" flex="100">
        <div class="img" layout="row" layout-align="center center">{$img}</div>
        <div class="info" layout="column">
          <div class="abrir-info" person="{$a['id']}" layout="row" layout-align="center center">
            <i class="icon-plus"></i>
          </div>
          <p class="nombre">{$a['nombre']}</p>
          <p class="puesto">{$a['puesto']}</p>
          <div class="line"></div>
          <div class="triangulo-azul"></div>
        </div>
        <div class="more-info {$a['id']}" layout="row">
          <div class="cont" layout="column" flex="100">
            <p class="nombre">{$a['nombre']}</p>
            <p><strong><i class="puesto">{$a['puesto']}</i></strong></p>
            <p class="text">{$content}</p>
            <div class="triangulo-verde-ab"></div>
            <div class="cerrar-info">
              <i class="icon-ICONO_TACHE"></i>
            </div>
          </div>
        </div>
      </div>
EOF;
  return $str;
}
add_shortcode( 'equipo', 'team_func' );

function alian_func( $atts , $content ) {
    $a = shortcode_atts( array(
        'nombre' => 'something',
        'puesto' => 'something else',
        'thumb' => null
    ), $atts );
    $img = wp_get_attachment_image($a['thumb'],'med_thumb');
    $str =  <<<EOF
      <div class="cont wow bounceInUp" layout="column" flex-gt-sm="30" flex="100">
        <div class="img" layout="row" layout-align="center center">{$img}</div>
        <div class="info" layout="column">
          <div class="abrir-info" person="person-1" layout="row" layout-align="center center">
            <i class="icon-plus"></i>
          </div>
          <p class="nombre">{$a['nombre']}</p>
          <p class="puesto">{$a['puesto']}</p>
          <div class="line"></div>
          <div class="triangulo-azul"></div>
        </div>
        <div class="more-info person-1" layout="row">
          <div class="cont" layout="column" flex="100">
            <p class="nombre">{$a['nombre']}</p>
            <p><strong><i class="puesto">{$a['puesto']}</i></strong></p>
            <p class="text">{$content}</p>
            <div class="triangulo-verde-ab"></div>
            <div class="cerrar-info">
              <i class="icon-ICONO_TACHE"></i>
            </div>
          </div>
        </div>
      </div>
EOF;
  return $str;
}
add_shortcode( 'alianza', 'alian_func' );

?>