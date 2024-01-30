<?php

// [bold_timeline_item_separator]

class bold_timeline_item_separator {
	static function init() {
		add_shortcode( 'bold_timeline_item_separator', array( __CLASS__, 'handle_shortcode' ) );
	}

	static function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( array(
			'top_margin'    	=> '',
			'bottom_margin' 	=> '',
			'el_id'				=> '',
			'el_class'			=> '',
			'el_style'			=> '',
			'responsive'		=> ''
		), $atts, 'bold_timeline_item_separator' ) );
		
		require( dirname(__FILE__) . '/../../assets/views/bold_timeline_item_separator_view.php' );
		return $output;
	}
}

bold_timeline_item_separator::init();

// Map shortcode

function bold_timeline_item_separator() {

	Bold_Timeline::$builder->map( 'bold_timeline_item_separator', array( 'name' => esc_html__( 'Separator', 'bold-builder' ), 'description' => esc_html__( 'Separator element', 'bold-builder' ), 'icon' => 'bold_timeline_item_separator_icon', 'container' => 'vertical', 'params' => array(), 'toggle' => true, 'show_settings_on_create' => true, 'params' => array(
				array( 'param_name' => 'top_margin', 'type' => 'dropdown', 'heading' => esc_html__( 'Top margin', 'bold-timeline' ), 'preview' => true,
					'value' => array(
						esc_html__( 'None', 'bold-timeline' ) 			=> 'none',
						esc_html__( 'Extra small', 'bold-timeline' ) 	=> 'extra_small',
						esc_html__( 'Small', 'bold-timeline' ) 			=> 'small',
						esc_html__( 'Normal', 'bold-timeline' ) 		=> 'normal',
						esc_html__( 'Large', 'bold-timeline' ) 			=> 'large'
					)
				),
				array( 'param_name' => 'bottom_margin', 'type' => 'dropdown', 'heading' => esc_html__( 'Bottom margin', 'bold-timeline' ), 'preview' => true,
					'value' => array(
						esc_html__( 'None', 'bold-timeline' ) 			=> 'none',
						esc_html__( 'Extra small', 'bold-timeline' ) 	=> 'extra_small',
						esc_html__( 'Small', 'bold-timeline' ) 			=> 'small',
						esc_html__( 'Normal', 'bold-timeline' ) 		=> 'normal',
						esc_html__( 'Large', 'bold-timeline' ) 			=> 'large'
					) 
				),
                                array( 'param_name' => 'el_id', 'type' => 'textfield', 'heading' => esc_html__( 'Custom Id Attribute', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ), 'preview' => true ),
                                array( 'param_name' => 'el_class', 'type' => 'textfield', 'heading' => esc_html__( 'Extra Class Name(s)', 'bold-timeline' ), 'preview' => true, 'group' => esc_html__( 'Custom', 'bold-timeline' ), 'preview' => true ),
                                array( 'param_name' => 'el_style', 'type' => 'textfield', 'heading' => esc_html__( 'Inline Style', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ), 'preview' => true ),		
                                array( 'param_name' => 'responsive', 'type' => 'checkbox_group', 'heading' => esc_html__( 'Hide element on screens', 'bold-timeline' ), 'group' => esc_html__( 'Responsive', 'bold-timeline' ), 'preview' => true,
                                        'value' => array(
                                                esc_html__( '≤480px', 'bold-timeline' ) 		=> 'hidden_xs',
                                                esc_html__( '480-767px', 'bold-timeline' ) 		=> 'hidden_ms',
                                                esc_html__( '768-991px', 'bold-timeline' ) 		=> 'hidden_sm',
                                                esc_html__( '992-1200px', 'bold-timeline' ) 	=> 'hidden_md',
                                                esc_html__( '≥1200px', 'bold-timeline' ) 		=> 'hidden_lg',
                                        )
                                ),
			) 
		)  
	);	
	
}
add_action( 'plugins_loaded', 'bold_timeline_item_separator' );