<?php
/*
  Widget Name: GLS Multi-Purpose Button
  Description: Multi-purpose button that can be used as a simple button or open a video popup
  Author: Stephen Anil, Sputznik
  Author URI: https://sputznik.com
  Widget URI:
*/
class GLS_MULTI_PURPOSE_BUTTON extends SiteOrigin_Widget{

  function __construct(){
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'gls-multi-button',
      // The name of the widget for display purposes.
      __( 'GLS Multi-Purpose Button', 'siteorigin-widgets' ),
      // The $widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
        'description' => __( 'Multi-purpose button that can be used as a simple button or open a video popup', 'siteorigin-widgets' ),
        'help'        => '',
      ),
      //The $control_options array, which is passed through to WP_Widget
      array(),
      //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
      array(
        'btn_text' => array(
          'type'    => 'text',
          'label'   => __('Button Text','siteorigin-widgets'),
          'default' => '',
        ),
        'is_modal' => array(
					'type' => 'checkbox',
					'label' => __( 'Open Video Popup', 'siteorigin-widgets' ),
          'description' => 'Instead of redirecting, clicking on the button will open a video popup',
					'default' => false,
					'state_emitter' => array(
						'callback' 	=> 'conditional',
						'args' 		=> array(
							'is_modal[active]: val',
							'is_modal[inactive]: !val'
						)
					),
				),
        'video_section' => array(
          'type'    => 'section',
          'label'   => __( 'Video Section', 'siteorigin-widgets' ),
          'hide'    => true,
          'state_handler' => array(
  					'is_modal[active]' 	=> array('show'),
  					'_else[is_modal]' 	=> array('hide'),
  				),
          'fields'  => array(
            'video_type' => array(
              'type'    => 'select',
              'label'   => __( 'Choose video type', 'siteorigin-widgets' ),
              'options' => array(
                'sp-wp-video'	    => 'Self Hosted',
      					'sp-ytube-video'	=> 'Youtube',
                'gls-vimeo-video' => 'Vimeo'
              ),
      				'state_emitter' => array(
              	'callback' 	=> 'select',
              	'args' 			=> array( 'video_type' )
          		),
            ),
      			'video_id' => array(
              'type' 		=> 'text',
              'label' 	=> __( 'Video ID', 'siteorigin-widgets' ),
      				'state_handler' => array(
                'video_type[sp-wp-video]'     => array('hide'),
      	        'video_type[sp-ytube-video]'  => array('show'),
                'video_type[gls-vimeo-video]' => array('show'),
      	    	),
            ),
      			'video_url' => array(
              'type' 		=> 'link',
              'label' 	=> __( 'Video URL', 'siteorigin-widgets' ),
      				'state_handler' => array(
                'video_type[sp-wp-video]'     => array('show'),
      	        'video_type[sp-ytube-video]' 	=> array('hide'),
                'video_type[gls-vimeo-video]' => array('hide'),
      	    	),
            ),
          )
        ),
        'link' => array(
          'type'    => 'link',
          'label'   => __('Redirect URL','siteorigin-widgets'),
          'default' => '',
          'state_handler' => array(
						'is_modal[active]' 	=> array('hide'),
						'_else[is_modal]' 	=> array('show'),
					),
        ),
      ),
      plugin_dir_path(__FILE__).'/widgets/gls-multi-button'
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

siteorigin_widget_register( 'gls-multi-button', __FILE__, 'GLS_MULTI_PURPOSE_BUTTON' );
