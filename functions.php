<?php

/* ASSETS */
add_action('wp_enqueue_scripts',function(){
  // Enqueue Styles
  wp_enqueue_style('gls-css', get_stylesheet_directory_uri().'/assets/css/main.css', array('sp-core-style'), time() );

}, 99);

//Include Files
$inc_files = array(
  'lib/custom-header/header-functions.php'
);

foreach( $inc_files as $inc_file ){
  require_once( $inc_file );
}


/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
add_filter('wp_nav_menu_items', function( $items, $args ){

  if( $args->theme_location == 'primary' ){
    $items .= '<li class="menu-item btn-wrapper"><div class="btn-edition"><a target="_blank" href="#">Team Edition</a></div></li>';
  }
  return $items;
}, 10, 2);
