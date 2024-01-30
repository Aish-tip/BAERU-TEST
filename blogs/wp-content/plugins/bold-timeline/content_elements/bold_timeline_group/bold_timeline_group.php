<?php 

// [bold_timeline_group]

class Bold_Timeline_Group {
	static function init() {
		add_shortcode( 'bold_timeline_group', array( __CLASS__, 'handle_shortcode' ) );
	}

	static function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( array(
			'title'							=> '',
			'subtitle'						=> '',			
			'group_style' 					=> 'inherit',
			'group_thickness' 				=> 'inherit',
			'group_shape' 					=> 'inherit',
			'group_title_tag'				=> 'h3',
			'group_title_size'				=> 'inherit',
			'group_title_font'				=> 'inherit',
			'group_font_subset'				=> '',
			'group_frame_color'				=> '',
			'group_content_display'			=> 'inherit',
			'group_animation' 				=> 'inherit',			
			'group_show_button_style'       => 'inherit',
			'group_show_button_shape'		=> 'inherit',
			'group_show_button_color'		=> '',			
			'el_id'							=> '',
			'el_class'						=> '',
			'el_style'						=> '',
			'responsive'					=> ''			
		), $atts, 'bold_timeline_group' ) );
                
		require( dirname(__FILE__) . '/../../assets/views/bold_timeline_group_view.php' );
		return $output;
	}
}

Bold_Timeline_Group::init();

// Map shortcode

function bold_timeline_map_group() {
	
	require( dirname(__FILE__) . '/../../assets/php/fonts.php' );
	
	$bold_timeline_group_params = array(
		array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'bold-timeline' ), 'preview' => true ),
		array( 'param_name' => 'group_frame_thickness', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Frame thickness', 'bold-timeline' ), 'preview' => true,
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Thin', 'bold-timeline' ) 			=> 'thin',
				esc_html__( 'Normal', 'bold-timeline' ) 		=> 'normal',
				esc_html__( 'Thick', 'bold-timeline' ) 			=> 'thick'
			)
		),
		array( 'param_name' => 'group_shape', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Shape', 'bold-timeline' ), 'preview' => true,
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Square', 'bold-timeline' ) 		=> 'square',
				esc_html__( 'Soft rounded', 'bold-timeline' ) 	=> 'soft_rounded',
				esc_html__( 'Hard rounded', 'bold-timeline' ) 	=> 'hard_rounded',
				esc_html__( 'Circle', 'bold-timeline' ) 		=> 'circle'
			)
		),
		array( 'param_name' => 'group_style', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Style', 'bold-timeline' ), 'preview' => true,
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Clear', 'bold-timeline' ) 			=> 'clear',
				esc_html__( 'Outline', 'bold-timeline' ) 		=> 'outline',
				esc_html__( 'Filled', 'bold-timeline' ) 		=> 'filled'
			)
		),
		array( 'param_name' => 'group_title_tag', 'type' => 'dropdown', 'default' => 'h3', 'heading' => esc_html__( 'Title tag', 'bold-timeline' ), 'group' => esc_html__( 'Typography', 'bold-timeline' ), 'preview' => true,
			'value' => array(
				esc_html__( 'H1', 'bold-timeline' ) 		=> 'h1',
				esc_html__( 'H2', 'bold-timeline' ) 		=> 'h2',
				esc_html__( 'H3', 'bold-timeline' ) 		=> 'h3',
				esc_html__( 'H4', 'bold-timeline' ) 		=> 'h4',
				esc_html__( 'H5', 'bold-timeline' ) 		=> 'h5',
				esc_html__( 'H6', 'bold-timeline' ) 		=> 'h6',
				esc_html__( 'DIV', 'bold-timeline' ) 		=> 'h7',
			)
		),
		array( 'param_name' => 'group_title_size', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Title size', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 	=> 'inherit',
				esc_html__( 'Default', 'bold-timeline' ) 	=> 'default',
				esc_html__( 'Small', 'bold-timeline' ) 		=> 'small',
				esc_html__( 'Normal', 'bold-timeline' ) 	=> 'normal',
				esc_html__( 'Large', 'bold-timeline' ) 		=> 'large'
			)
		),
		array( 'param_name' => 'group_title_font', 'type' => 'dropdown', 'heading' => esc_html__( 'Title font', 'bold-timeline' ), 'group' => esc_html__( 'Typography', 'bold-timeline' ),
			'value' => array( esc_html__( 'Inherit', 'bold-timeline' ) => 'inherit' ) + $font_arr
		),
		array( 'param_name' => 'group_font_subset', 'type' => 'textfield', 'heading' => esc_html__( 'Font subset', 'bold-timeline' ), 'group' => esc_html__( 'Typography', 'bold-timeline' ), 'value' => 'latin,latin-ext', 'description' => 'E.g. latin,latin-ext,cyrillic,cyrillic-ext' ),
		array( 'param_name' => 'group_frame_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Frame color', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ), 'preview' => true ),
		array( 'param_name' => 'group_content_display', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Content display', 'bold-timeline' ), 'group' => esc_html__( 'Expand', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Show', 'bold-timeline' ) 			=> 'show',
				esc_html__( 'Hide', 'bold-timeline' ) 			=> 'hide'
			)
		),
		array( 'param_name' => 'group_show_button_style', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Show more button style', 'bold-timeline' ), 'group' => esc_html__( 'Expand', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 						=> 'inherit',
				esc_html__( 'Outline', 'bold-timeline' ) 						=> 'outline',
				esc_html__( 'Filled', 'bold-timeline' ) 						=> 'filled',
				esc_html__( 'Shadow', 'bold-timeline' ) 						=> 'shadow',
				esc_html__( 'Clear', 'bold-timeline' ) 							=> 'clear'
			)
		),
		array( 'param_name' => 'group_show_button_shape', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Show more button shape', 'bold-timeline' ), 'group' => esc_html__( 'Expand', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Square', 'bold-timeline' ) 		=> 'square',
				esc_html__( 'Soft rounded', 'bold-timeline' ) 	=> 'soft_rounded',
				esc_html__( 'Hard rounded', 'bold-timeline' ) 	=> 'hard_rounded'
			)
		),
		array( 'param_name' => 'group_show_button_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Buton color', 'bold-timeline' ), 'group' => esc_html__( 'Expand', 'bold-timeline' ) ),
		array( 'param_name' => 'el_id', 'type' => 'textfield', 'heading' => esc_html__( 'Custom Id Attribute', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'el_class', 'type' => 'textfield', 'heading' => esc_html__( 'Extra Class Name(s)', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'el_style', 'type' => 'textfield', 'heading' => esc_html__( 'Inline Style', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'responsive', 'type' => 'checkbox_group', 'heading' => esc_html__( 'Hide element on screens', 'bold-timeline' ), 'group' => esc_html__( 'Responsive', 'bold-timeline' ),
			'value' => array(
				esc_html__( '≤480px', 'bold-timeline' ) 		=> 'hidden_xs',
				esc_html__( '480-767px', 'bold-timeline' ) 		=> 'hidden_ms',
				esc_html__( '768-991px', 'bold-timeline' ) 		=> 'hidden_sm',
				esc_html__( '992-1200px', 'bold-timeline' ) 	=> 'hidden_md',
				esc_html__( '≥1200px', 'bold-timeline' ) 		=> 'hidden_lg',
			)
		),
	);
	Bold_Timeline::$builder->map( 'bold_timeline_group', array( 'name' => esc_html__( 'Timeline Group', 'bold-timeline' ), 'description' => esc_html__( 'Timeline group', 'bold-timeline' ), 'container' => 'vertical', 'icon' => 'bt_bb_icon_bold_timeline_group', 
            'accept' => array( 'bold_timeline_item' => true, 'bold_timeline_item_posts' => true ), 'show_settings_on_create' => true, 'params' => $bold_timeline_group_params ));	
	
}
add_action( 'wp_loaded', 'bold_timeline_map_group' );