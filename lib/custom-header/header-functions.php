<?php

 /**
  * HEADER OPTIONS
  * $headers_arr['header5'] adds a new custom header to the global headers
  */
 add_filter( 'sp_headers_options', function( $headers_arr ){
   $headers_arr['header5'] = 'GLS Header';
   return $headers_arr;
 } );


/**
 * Includes the custom header template
 */
 add_filter( 'sp_header5_template', function( $template ){
   $template = get_stylesheet_directory().'/lib/custom-header/header-template.php';
   return $template;
 } );


/**
 * For bootstrap only
 * CHANGE THE ATTRIBUTES PASSED TO THE NAVIGATION MENU
 */
add_filter('sp_nav_menu_options', function( $sp_nav_menu_options ){

  global $sp_customize;

  $header_type = $sp_customize->get_header_type();

  if( $header_type == 'header5' ){

    //Add bootstrap navbar classes

    $sp_nav_menu_options['container_class'] = 'collapse navbar-collapse';
    $sp_nav_menu_options['container_id']    = 'bs-example-navbar-collapse-1';
    $sp_nav_menu_options['menu_class']      = 'nav navbar-nav';

  }

  return $sp_nav_menu_options;
});

// CUSTOMIZER OPTIONS
add_action('customize_register', function( $wp_customize ){
  global $sp_customize;

  $sp_customize->section( $wp_customize, 'sp_theme_panel', 'sp_gls_section', 'GLS Settings', '');

  /** HEADER BUTTON */
  $sp_customize->text( $wp_customize, 'sp_gls_section', '[gls][header-btn-txt]', 'Header Button Text', '');
  $sp_customize->text( $wp_customize, 'sp_gls_section', '[gls][header-btn-url]', 'Header Button URL', '');

});
