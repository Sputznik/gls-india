<?php

/* ASSETS */
add_action('wp_enqueue_scripts',function(){
  // Enqueue Styles
  wp_enqueue_style('mulish-google-fonts', 'https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800&display=swap', array('sp-core-style'), time() );
  wp_enqueue_style('archivo-google-fonts', 'https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700;800&display=swap', array('sp-core-style'), time() );
  wp_enqueue_style('gls-css', get_stylesheet_directory_uri().'/assets/css/main.css', array('sp-core-style'), time() );

  // Enqueue Scripts
  wp_enqueue_script('gls-js', get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'), time() );

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

/* ADD SOW FROM THE THEME */
add_action('siteorigin_widgets_widget_folders', function( $folders ){
  $folders[] = get_stylesheet_directory() . '/so-widgets/';
  return $folders;
});

/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
add_filter('wp_nav_menu_items', function( $items, $args ){

  global $sp_customize;

	$option = $sp_customize->get_option();

  $gls_images = get_stylesheet_directory_uri();

  if( isset( $option['gls'] ) && $option['gls'] ){

    $btn_txt = ( isset( $option['gls']['header-btn-txt'] ) && $option['gls']['header-btn-txt'] ) ? $option['gls']['header-btn-txt'] : "Button";
    $btn_url = ( isset( $option['gls']['header-btn-url'] ) && $option['gls']['header-btn-url'] ) ? $option['gls']['header-btn-url'] : "#";

    $navbar_right  = '<div class="btn-edition">';
    $navbar_right .= '<a target="_blank" href="'.$btn_url.'" style="background-image: url('.$gls_images.'/assets/images/logo-gradient.png);">'.$btn_txt.'</a></div>';

    if( $args->theme_location == 'primary' ){
      $items .= '<li class="menu-item btn-wrapper">'.$navbar_right.'</li>';
    }

  }

  return $items;
}, 10, 2);
