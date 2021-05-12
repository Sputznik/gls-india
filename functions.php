<?php

/* ASSETS */
add_action('wp_enqueue_scripts',function(){
  // Enqueue Styles
  wp_enqueue_style('mulish-google-fonts', 'https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800&display=swap', array('sp-core-style'), time() );
  wp_enqueue_style('archivo-google-fonts', 'https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700;800&display=swap', array('sp-core-style'), time() );
  wp_enqueue_style('gls-css', get_stylesheet_directory_uri().'/assets/css/main.css', array('sp-core-style'), time() );

}, 99);

//Include Files
$inc_files = array(
  'lib/custom-header/header-functions.php'
);

foreach( $inc_files as $inc_file ){
  require_once( $inc_file );
}


//Add google fonts
add_filter( 'sp_list_google_fonts', function( $fonts ){

  $fonts[] = array(
    'slug'	=> 'mulish',
    'name'	=> 'Mulish',
    'url'	  => 'Mulish'
  );
  $fonts[] = array(
    'slug'	=> 'archivo',
    'name'	=> 'Archivo',
    'url'	  => 'Archivo'
  );
  return $fonts;
});


/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
add_filter('wp_nav_menu_items', function( $items, $args ){

  $gls_images = get_stylesheet_directory_uri();

  $navbar_right  = '<div class="btn-edition">';
  $navbar_right .= '<a target="_blank" href="#" style="background-image: url('.$gls_images.'/assets/images/logo-gradient.png);">Team Edition</a></div>';

  if( $args->theme_location == 'primary' ){
    $items .= '<li class="menu-item btn-wrapper">'.$navbar_right.'</li>';
  }
  return $items;
}, 10, 2);
