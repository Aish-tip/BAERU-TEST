<?php

// [bold_timeline_item_button]

class bold_timeline_item_button {
	static function init() {
		add_shortcode( 'bold_timeline_item_button', array( __CLASS__, 'handle_shortcode' ) );
	}

	static function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( array(
			'title'    				=> '',
			'url' 					=> '',
			'target' 				=> '',
			'style' 				=> 'filled',
			'shape' 				=> 'soft_rounded',
			'width' 				=> 'block',
			'size' 					=> 'normal',
			'color' 				=> '',			
			'el_id'					=> '',
			'el_class'				=> '',
			'el_style'				=> '',
			'responsive'			=> ''
		), $atts, 'bold_timeline_item_button' ) );
		
		require( dirname(__FILE__) . '/../../assets/views/bold_timeline_item_button_view.php' );
		return $output;
	}
}

bold_timeline_item_button::init();

// Map shortcode

function bold_timeline_item_button() {

	Bold_Timeline::$builder->map( 'bold_timeline_item_button', array( 'name' => esc_html__( 'Button', 'bold-builder' ), 'description' => esc_html__( 'Button element', 'bold-builder' ), 'icon' => 'bold_timeline_item_button_icon', 'container' => 'vertical', 'params' => array(), 'toggle' => true, 'show_settings_on_create' => true, 'params' => array(
				array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'bold-timeline' ), 'preview' => true ),
				array( 'param_name' => 'url', 'type' => 'textfield', 'heading' => esc_html__( 'URL', 'bold-timeline' ), 'preview' => true ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'default' => '_self', 'heading' => esc_html__( 'URL target', 'bold-timeline' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'bold-timeline' ) 		=> '_self',
						esc_html__( 'Blank (open in new tab)', 'bold-timeline' ) 		=> '_blank'
					)
				),
				array( 'param_name' => 'style', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Style', 'bold-timeline' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Inherit', 'bold-timeline' ) 			=> 'inherit',
						esc_html__( 'Outline', 'bold-timeline' ) 			=> 'outline',
						esc_html__( 'Filled', 'bold-timeline' ) 			=> 'filled',
						esc_html__( 'Shadow', 'bold-timeline' ) 			=> 'shadow',
						esc_html__( 'Clear', 'bold-timeline' ) 				=> 'clear'
					)
				),
				array( 'param_name' => 'shape', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Shape', 'bold-timeline' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Inherit', 'bold-timeline' ) 			=> 'inherit',
						esc_html__( 'Soft rounded', 'bold-timeline' ) 		=> 'soft_rounded',
						esc_html__( 'Hard rounded', 'bold-timeline' ) 		=> 'hard_rounded',
						esc_html__( 'Square', 'bold-timeline' ) 			=> 'square'
					)
				),
				array( 'param_name' => 'width', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Width', 'bold-timeline' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Inherit', 'bold-timeline' ) 			=> 'inherit',
						esc_html__( 'Full', 'bold-timeline' ) 				=> 'block',
						esc_html__( 'Adapt to title', 'bold-timeline' ) 	=> 'inline'
					)
				),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Size', 'bold-timeline' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Inherit', 'bold-timeline' ) 			=> 'inherit',
						esc_html__( 'Small', 'bold-timeline' ) 				=> 'small',
						esc_html__( 'Normal', 'bold-timeline' ) 			=> 'normal',
						esc_html__( 'Large', 'bold-timeline' ) 				=> 'large'
					)
				),
				array( 'param_name' => 'color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Color', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ), 'preview' => true ),
				array( 'param_name' => 'el_id', 'type' => 'textfield', 'heading' => esc_html__( 'Custom Id Attribute', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
				array( 'param_name' => 'el_class', 'type' => 'textfield', 'heading' => esc_html__( 'Extra Class Name(s)', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
				array( 'param_name' => 'el_style', 'type' => 'textfield', 'heading' => esc_html__( 'Inline Style', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),		
				array( 'param_name' => 'responsive', 'type' => 'checkbox_group', 'heading' => esc_html__( 'Hide element on screens', 'bold-timeline' ), 'group' => esc_html__( 'Responsive', 'bold-timeline' ), 'preview' => true,
					'value' => array(
							esc_html__( '≤480px', 'bold-timeline' ) 		=> 'hidden_xs',
							esc_html__( '480-767px', 'bold-timeline' ) 		=> 'hidden_ms',
							esc_html__( '768-991px', 'bold-timeline' ) 		=> 'hidden_sm',
							esc_html__( '992-1200px', 'bold-timeline' ) 	=> 'hidden_md',
							esc_html__( '≥1200px', 'bold-timeline' ) 		=> 'hidden_lg'
					)
				),
			
                    ) 
		)  
	);	
	
}
add_action( 'plugins_loaded', 'bold_timeline_item_button' );