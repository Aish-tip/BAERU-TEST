<?php

// [bold_timeline_item]

class Bold_Timeline_Item {
	static function init() {
		add_shortcode( 'bold_timeline_item', array( __CLASS__, 'handle_shortcode' ) );
	}

	static function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( array(
			'title'    						=> '',
			'subtitle' 						=> '',
			'supertitle' 					=> '',
			'icon' 							=> '',
			'audio' 						=> '',
			'video' 						=> '',
			'images' 						=> '',
			'size'							=> '',
			
			'item_images_columns'			=> 'inherit',
			'item_title_size'				=> 'inherit',
			'item_supertitle_style'			=> 'inherit',
			'item_alignment'				=> 'inherit',
			'item_title_tag'				=> 'h2',
			'item_title_font'				=> 'inherit',
			'item_body_font'				=> 'inherit',
			'item_font_subset'				=> '',
			'item_media_position'			=> 'inherit',
			'item_frame_thickness'			=> 'inherit',
			'item_style'					=> 'inherit',
			'item_shape'					=> 'inherit',
			'item_connection_type'			=> 'inherit',
			'item_marker_type'				=> 'inherit',
			'item_content_display'			=> 'inherit',
			'item_animation'				=> 'inherit',
			'item_frame_color'				=> '',
			'item_background_color'			=> '',
			'item_color'					=> '',
			'item_sticker_color'			=> '',
			
			'item_icon_position'    		=> 'inherit',
			'item_icon_style'    			=> 'inherit',
			'item_icon_shape'    			=> 'inherit',
			'item_icon_color'				=> '',
			'item_marker_color'				=> '',
			'item_connection_color'			=> '',
			
			'el_id'							=> '',
			'el_class'						=> '',
			'el_style'						=> '',
			'responsive'					=> ''
		), $atts, 'bold_timeline_item' ) );
		
		require( dirname(__FILE__) . '/../../assets/views/bold_timeline_item_view.php' );		
		
		return $output;
	}
}

Bold_Timeline_Item::init();

// Map shortcode

function bold_timeline_map_item() {

	if ( function_exists('boldthemes_get_icon_fonts_bb_array') ) {
		$icon_arr = boldthemes_get_icon_fonts_bb_array();
	} else {
		require_once( dirname(__FILE__) . '/../../assets/php/fa_icons.php' );
		require_once( dirname(__FILE__) . '/../../assets/php/s7_icons.php' );
		require_once( dirname(__FILE__) . '/../../assets/php/FontAwesome5Brands.php' );
		$icon_arr = array( 'Font Awesome' => bold_timeline_fa_icons(), 'S7' => bold_timeline_s7_icons(), 'FontAwesome5Brands' => bold_timeline_FontAwesome5Brands_icons() );
	}
	
	$icon_arr = apply_filters( 'bold_timeline_icons', $icon_arr );
	
	require( dirname(__FILE__) . '/../../assets/php/fonts.php' );
	
	$bold_timeline_item_params = array(
		array( 'param_name' => 'supertitle', 'type' => 'textfield', 'heading' => esc_html__( 'Supertitle', 'bold-timeline' ) ),
		array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'bold-timeline' ), 'preview' => true ),
		array( 'param_name' => 'subtitle', 'type' => 'textfield', 'heading' => esc_html__( 'Subtitle', 'bold-timeline' ) ),
		array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'bold-timeline' ), 'value' => $icon_arr, 'preview' => true ),
		array( 'param_name' => 'item_media_position', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Media position', 'bold-timeline' ), 'group' => esc_html__( 'Media', 'bold-timeline' ), 'preview' => true,
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 	=> 'inherit',
				esc_html__( 'Bottom', 'bold-timeline' ) 	=> 'bottom',
				esc_html__( 'Top', 'bold-timeline' ) 		=> 'top',
				esc_html__( 'Left', 'bold-timeline' ) 		=> 'left',
				esc_html__( 'Right', 'bold-timeline' ) 		=> 'right'
			)
		),
		array( 'param_name' => 'images', 'type' => 'attach_images', 'heading' => esc_html__( 'Images', 'bold-timeline' ), 'group' => esc_html__( 'Media', 'bold-timeline' ) ),
		array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Image size', 'bold-timeline' ),  'group' => esc_html__( 'Media', 'bold-timeline' ), 'preview' => true , 
			'value' => bold_timeline_get_image_sizes()
		),
		array( 'param_name' => 'item_images_columns', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Image gallery columns', 'bold-timeline' ), 'group' => esc_html__( 'Media', 'bold-timeline' ), 
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' )                => 'inherit',
				esc_html__( 'One (1)', 'bold-timeline' ) 		=> '1',
				esc_html__( 'Two (2)', 'bold-timeline' ) 		=> '2',
				esc_html__( 'Three (3)', 'bold-timeline' ) 		=> '3',
				esc_html__( 'Four (4)', 'bold-timeline' ) 		=> '4'
			)
		),
		array( 'param_name' => 'audio', 'type' => 'textfield', 'heading' => esc_html__( 'Audio', 'bold-timeline' ), 'group' => esc_html__( 'Media', 'bold-timeline' ) ),
		array( 'param_name' => 'video', 'type' => 'textfield', 'heading' => esc_html__( 'Video', 'bold-timeline' ), 'group' => esc_html__( 'Media', 'bold-timeline' ) ),
		array( 'param_name' => 'item_title_size', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Title size', 'bold-timeline' ), 'group' => esc_html__( 'Typography', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 	=> 'inherit',
				esc_html__( 'Default', 'bold-timeline' ) 	=> 'default',
				esc_html__( 'Small', 'bold-timeline' ) 		=> 'small',
				esc_html__( 'Normal', 'bold-timeline' ) 	=> 'normal',
				esc_html__( 'Large', 'bold-timeline' ) 		=> 'large'
			)
		),
		array( 'param_name' => 'item_title_tag', 'type' => 'dropdown', 'default' => 'h2', 'heading' => esc_html__( 'Title tag', 'bold-timeline' ), 'group' => esc_html__( 'Typography', 'bold-timeline' ), 'preview' => true,
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
		array( 'param_name' => 'item_supertitle_style', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Supertitle style', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Default', 'bold-timeline' ) 		=> 'default',
				esc_html__( 'Sticker', 'bold-timeline' ) 		=> 'sticker'
			)
		),
		array( 'param_name' => 'item_alignment', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Item alignment', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ), 'preview' => true,
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Default', 'bold-timeline' ) 		=> 'default',
				esc_html__( 'Left', 'bold-timeline' ) 			=> 'left',
				esc_html__( 'Right', 'bold-timeline' ) 			=> 'right',
				esc_html__( 'Center', 'bold-timeline' ) 		=> 'center'
			)
		),
		array( 'param_name' => 'item_title_font', 'type' => 'dropdown', 'heading' => esc_html__( 'Title font', 'bold-timeline' ), 'group' => esc_html__( 'Typography', 'bold-timeline' ),
			'value' => array( esc_html__( 'Inherit', 'bold-timeline' ) => 'inherit' ) + $font_arr
		),
		array( 'param_name' => 'item_body_font', 'type' => 'dropdown', 'heading' => esc_html__( 'Body font', 'bold-timeline' ), 'group' => esc_html__( 'Typography', 'bold-timeline' ),
			'value' => array( esc_html__( 'Inherit', 'bold-timeline' ) => 'inherit' ) + $font_arr
		),
		array( 'param_name' => 'item_font_subset', 'type' => 'textfield', 'heading' => esc_html__( 'Font subset', 'bold-timeline' ), 'group' => esc_html__( 'Typography', 'bold-timeline' ), 'value' => 'latin,latin-ext', 'description' => 'E.g. latin,latin-ext,cyrillic,cyrillic-ext' ),
		array( 'param_name' => 'item_frame_thickness', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Item frame thickness', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Thin', 'bold-timeline' ) 			=> 'thin',
				esc_html__( 'Normal', 'bold-timeline' ) 		=> 'normal',
				esc_html__( 'Thick', 'bold-timeline' ) 			=> 'thick'
			)
		),
		array( 'param_name' => 'item_style', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Item style', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ), 'preview' => true,
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 						=> 'inherit',
				esc_html__( 'Clear', 'bold-timeline' ) 							=> 'clear',
				esc_html__( 'Outline', 'bold-timeline' ) 						=> 'outline',
				esc_html__( 'Full outline', 'bold-timeline' ) 					=> 'outline_full',
				esc_html__( 'Top border', 'bold-timeline' ) 					=> 'outline_top',
				esc_html__( 'Filled header', 'bold-timeline' ) 					=> 'filled_header',
				esc_html__( 'Filled header with outline', 'bold-timeline' ) 	=> 'filled_header_outline'
			)
		),
		array( 'param_name' => 'item_frame_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Item frame color', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ), 'preview' => true ),
		array('param_name' => 'item_background_color', 'type' => 'colorpicker', 'heading' => esc_html__('Item background color', 'bold-timeline'), 'group' => esc_html__('Properties', 'bold-timeline')),
		array('param_name' => 'item_color', 'type' => 'colorpicker', 'heading' => esc_html__('Item text color', 'bold-timeline'), 'group' => esc_html__('Properties', 'bold-timeline')),
        array( 'param_name' => 'item_connection_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Connector color', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ) ),
		array( 'param_name' => 'item_sticker_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Sticker color', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ) ),
		array( 'param_name' => 'item_shape', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Item shape', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Square', 'bold-timeline' ) 		=> 'square',
				esc_html__( 'Soft rounded', 'bold-timeline' ) 	=> 'soft_rounded',
				esc_html__( 'Hard rounded', 'bold-timeline' ) 	=> 'hard_rounded'
			)
		),
		array( 'param_name' => 'item_marker_type', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Line marker style', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'None', 'bold-timeline' ) 			=> 'none',
				esc_html__( 'Dot', 'bold-timeline' ) 			=> 'dot',
				esc_html__( 'Circle', 'bold-timeline' ) 		=> 'circle',
				esc_html__( 'Small circle', 'bold-timeline' ) 	=> 'circle_small'
			)
		),
		array( 'param_name' => 'item_icon_style', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Icon style', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 						=> 'inherit',
				esc_html__( 'Outline', 'bold-timeline' ) 						=> 'outline',
				esc_html__( 'Filled', 'bold-timeline' ) 						=> 'filled',
				esc_html__( 'Shadow', 'bold-timeline' ) 						=> 'shadow'
			)
		),
		array( 'param_name' => 'item_icon_shape', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Icon shape', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 						=> 'inherit',
				esc_html__( 'Soft rounded', 'bold-timeline' ) 					=> 'soft_rounded',
				esc_html__( 'Hard rounded', 'bold-timeline' ) 					=> 'hard_rounded',
				esc_html__( 'Square', 'bold-timeline' ) 						=> 'square'
			)
		),
		array( 'param_name' => 'item_icon_position', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Icon position', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 					=> 'inherit',
				esc_html__( 'On the line', 'bold-timeline' ) 				=> 'line',
				esc_html__( 'Opposite to the line', 'bold-timeline' ) 		=> 'opposite'
			)
		),
		array( 'param_name' => 'item_icon_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Item icon color', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ) ),
		array( 'param_name' => 'item_marker_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Item marker color', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ) ),
		array( 'param_name' => 'item_connection_type', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Item connection style', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'None', 'bold-timeline' ) 			=> 'none',
				esc_html__( 'Line', 'bold-timeline' ) 			=> 'line',
				esc_html__( 'Triangle', 'bold-timeline' ) 		=> 'triangle'
			)
		),
		array( 'param_name' => 'item_content_display', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Item content display', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ),
			'value' => array(
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Show', 'bold-timeline' ) 			=> 'show',
				esc_html__( 'Hide', 'bold-timeline' ) 			=> 'hide'
			)
		),
		array( 'param_name' => 'item_animation', 'type' => 'dropdown', 'default' => 'inherit', 'heading' => esc_html__( 'Item animation', 'bold-timeline' ), 'group' => esc_html__( 'Properties', 'bold-timeline' ), 
			'value' => array(
				esc_html__( 'Inherit', 'bold-builder' ) => 'inherit',
				esc_html__( 'Fade In', 'bold-builder' ) => 'fade_in',
				esc_html__( 'Move Up', 'bold-builder' ) => 'move_up',
				esc_html__( 'Move Left', 'bold-builder' ) => 'move_left',
				esc_html__( 'Move Right', 'bold-builder' ) => 'move_right',
				esc_html__( 'Move Down', 'bold-builder' ) => 'move_down',
				esc_html__( 'Zoom in', 'bold-builder' ) => 'zoom_in',
				esc_html__( 'Zoom out', 'bold-builder' ) => 'zoom_out',
				esc_html__( 'Fade In / Move Up', 'bold-builder' ) => 'fade_in move_up',
				esc_html__( 'Fade In / Move Left', 'bold-builder' ) => 'fade_in move_left',
				esc_html__( 'Fade In / Move Right', 'bold-builder' ) => 'fade_in move_right',
				esc_html__( 'Fade In / Move Down', 'bold-builder' ) => 'fade_in move_down',
				esc_html__( 'Fade In / Zoom in', 'bold-builder' ) => 'fade_in zoom_in',
				esc_html__( 'Fade In / Zoom out', 'bold-builder' ) => 'fade_in zoom_out'
			)
		),
		array( 'param_name' => 'el_id', 'type' => 'textfield', 'heading' => esc_html__( 'Custom Id Attribute', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'el_class', 'type' => 'textfield', 'heading' => esc_html__( 'Extra Class Name(s)', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'el_style', 'type' => 'textfield', 'heading' => esc_html__( 'Inline Style', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'responsive', 'type' => 'checkbox_group', 'heading' => esc_html__( 'Hide element on screens', 'bold-timeline' ), 'group' => esc_html__( 'Responsive', 'bold-timeline' ), 'preview' => true,
			'value' => array(
				esc_html__( '≤480px', 'bold-timeline' ) 		=> 'hidden_xs',
				esc_html__( '480-767px', 'bold-timeline' ) 		=> 'hidden_ms',
				esc_html__( '768-991px', 'bold-timeline' ) 		=> 'hidden_sm',
				esc_html__( '992-1200px', 'bold-timeline' )     => 'hidden_md',
				esc_html__( '≥1200px', 'bold-timeline' ) 		=> 'hidden_lg',
			)
		),
	);
	Bold_Timeline::$builder->map( 'bold_timeline_item', array( 'name' => esc_html__( 'Timeline Item', 'bold-timeline' ), 'description' => esc_html__( 'Timeline item', 'bold-timeline' ), 'container' => 'vertical', 'icon' => 'bt_bb_icon_bold_timeline_item', 'show_settings_on_create' => true, 'accept' => array( 'bold_timeline_item_text' => true, 'bold_timeline_item_button' => true, 'bold_timeline_item_separator' => true ), 'params' => $bold_timeline_item_params ));	
	
}
add_action( 'wp_loaded', 'bold_timeline_map_item' );