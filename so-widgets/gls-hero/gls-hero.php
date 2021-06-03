<?php
/*
	Widget Name: GLS Hero
	Description: GLS Hero
	Author: Stephen Anil, Sputznik
	Author URI: https://sputznik.com
	Widget URI:
	Video URI:
*/
class GLS_HERO extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'gls-hero',
			// The name of the widget for display purposes.
			__('GLS Hero', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __( 'GLS Hero', 'siteorigin-widgets' ),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'image_slides' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Image Slider Section' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
					'fields' => array(
						'image' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Choose Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
						'redirect_url' => array(
							'type' 	 => 'link',
							'label'  => __( 'Redirect URL', 'siteorigin-widgets' ),
						),
						'new_window' => array(
		        	'type' 		=> 'checkbox',
		        	'label' 	=> __( 'Open URL in a new window', 'siteorigin-widgets' ),
		        	'default' => false
		    		),
					)
				),
        'hero_content' => array(
          'type' => 'tinymce',
          'label' => __( 'Main Content', 'siteorigin-widgets' ),
          'default' => '',
          'rows' => 20,
          'default_editor' => 'tinymce'
        ),
				'hero_more_section' => array(
          'type' => 'tinymce',
          'label' => __( 'Read More Content', 'siteorigin-widgets' ),
          'default' => '',
          'rows' => 20,
          'default_editor' => 'tinymce'
        ),
				'btn_contact_url' => array(
					'type' 		=> 'link',
					'label' => __( 'Contact Button URL', 'siteorigin-widgets'),
				),
				'animation_speed' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Slider Animation Speed', 'siteorigin-widgets' ),
					'default' 	=> '2000',
					'description'	=>	'Animation speed in milliseconds. Default 2000'
				),

			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/gls-hero"
		);
	}
	function get_template_name($instance) {
		return 'template';
	}
	function get_template_dir($instance) {
		return 'templates';
	}
    function get_style_name($instance) {
        return '';
    }
}
siteorigin_widget_register('gls-hero', __FILE__, 'GLS_HERO');
