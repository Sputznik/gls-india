<?php
/*
	Widget Name: GLS Logo Slider
	Description: GLS SOW for using Logo Slider with SLICK.JS within the page builder
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class GLS_LOGO_SLIDER extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'gls-logo-slider',
			// The name of the widget for display purposes.
			__('GLS Logo Slider', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('GLS SOW for using Slider Revolution plugin within the page builder.', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'show_slides' => array(
					'type' 			=> 'number',
					'label' 		=> __( 'Show number of slides', 'siteorigin-widgets' ),
					'default' 		=> 6,
				),
				'slides' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Logo Section' , 'siteorigin-widgets' ),
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
							'label'  => __( 'URL', 'siteorigin-widgets' ),
						)
					)
				)
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/gls-logo-slider"
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
siteorigin_widget_register('gls-logo-slider', __FILE__, 'GLS_LOGO_SLIDER');
