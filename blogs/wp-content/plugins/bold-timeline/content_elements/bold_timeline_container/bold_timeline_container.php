<?php

// [bold_timeline_container]

class Bold_Timeline_Container {
	static function init() {
		add_shortcode( 'bold_timeline_container', array( __CLASS__, 'handle_shortcode' ) );
	}

	static function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( array(
			'timeline_style'				=> 'classic',
			'line_position'					=> 'inherit_from_style',
			'line_style'					=> 'inherit_from_style',
			'line_thickness'				=> 'inherit_from_style',
			'line_color'					=> '',
			
			'item_style'					=> 'inherit_from_style',
			'item_shape'					=> 'inherit_from_style',
			'item_frame_thickness'			=> 'inherit_from_style',
			'item_connection_type'			=> 'inherit_from_style',
			'item_connection_color'			=> '',
			'item_content_display'			=> 'inherit_from_style',
			'item_marker_type'				=> 'inherit_from_style',
			'item_marker_color'				=> '',
			'item_title_size'				=> 'inherit_from_style',
			'item_supertitle_style'         => 'inherit_from_style',
			'item_sticker_color'            => '',
			'item_alignment'				=> 'inherit_from_style',
			'item_title_font'				=> 'inherit',
			'item_body_font'				=> 'inherit',
			'item_font_subset'				=> '',
			'item_media_position'			=> 'inherit_from_style',
			'item_images_columns'			=> 'inherit_from_style',
			'item_animation'				=> 'inherit_from_style',
			'item_frame_color'				=> '',
			'item_background_color'         => '',
			
			'item_icon_position'            => 'inherit_from_style',
			'item_icon_shape'				=> 'inherit_from_style',
			'item_icon_style'				=> 'inherit_from_style',
			'item_icon_color'				=> '',
			
			'group_frame_thickness'         => 'inherit_from_style',
			'group_style'					=> 'inherit_from_style',
			'group_shape'					=> 'inherit_from_style',
			'group_frame_color'				=> '',
			'group_title_size'				=> 'inherit_from_style',
			'group_title_font'				=> 'inherit',
			'group_font_subset'				=> '',
			'group_content_display'         => 'inherit_from_style',
			
			'button_style'					=> 'inherit_from_style',
			'button_shape'					=> 'inherit_from_style',
			'button_size'					=> 'inherit_from_style',
			'button_color'					=> '',
			
			'slider_animation'				=> 'inherit_from_style',
			'slider_gap'					=> 'inherit_from_style',
			'slider_dots_style'				=> 'inherit_from_style',
			'slider_arrows_style'           => 'inherit_from_style',
			'slider_arrows_shape'           => 'inherit_from_style',
			'slider_arrows_size'            => 'inherit_from_style',
			'slider_navigation_color'       => '',
			'slider_slides_to_show'			=> '2',
			'slider_auto_play'				=> '0',
			
			'el_id'							=> '',
			'el_class'						=> '',
			'el_css'						=> '',
			'el_style'						=> '',
			'responsive'					=> ''
		), $atts, 'bold_timeline_container' ) );
        
		Bold_Timeline::$timeline_style = $timeline_style;
		
		require( dirname(__FILE__) . '/../../assets/php/timeline_styles.php' );	
		require( dirname(__FILE__) . '/../../content_elements/bold_timeline_container/bold_timeline_container_styles.php' );
        
		require( dirname(__FILE__) . '/../../assets/views/bold_timeline_container_view.php' );
		return $output;
	}
}

Bold_Timeline_Container::init();

// Map shortcode

function bold_timeline_map_container() {
	
	require( dirname(__FILE__) . '/../../assets/php/fonts.php' );

	$bold_timeline_container_params = array(
                array( 'param_name' => 'timeline_style', 'type' => 'dropdown', 'default' => 'classic', 'heading' => esc_html__( 'Timeline Style', 'bold-timeline' ), 'description' =>  esc_html__( 'Timeline Style settings can be overwriten by individual style setting.', 'bold-timeline' ), 'preview' => true,
				'value' => array(                                
					esc_html__( 'Classic Style', 'bold-timeline' ) 					=> 'classic',
					esc_html__( 'Retro Style', 'bold-timeline' ) 					=> 'retro',
					esc_html__( 'Clean Style', 'bold-timeline' ) 					=> 'clean',
					esc_html__( 'Travel Style', 'bold-timeline' ) 					=> 'travel',
					esc_html__( 'CV Style', 'bold-timeline' ) 						=> 'cv'
				)
		),
		array( 'param_name' => 'line_position', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Line position', 'bold-timeline' ),  'preview' => true,
			'value' => array(
					esc_html__( 'Inherit from style', 'bold-timeline' ) 				=> 'inherit_from_style',
					esc_html__( 'Left', 'bold-timeline' ) 						=> 'left',
					esc_html__( 'Right', 'bold-timeline' ) 						=> 'right',
					esc_html__( 'Center', 'bold-timeline' ) 					=> 'center',
					esc_html__( 'Center overlap', 'bold-timeline' ) 				=> 'center_overlap',
					esc_html__( 'Top (horizontal timeline)', 'bold-timeline' )                      => 'top',
					esc_html__( 'Bottom (horizontal timeline)', 'bold-timeline' )                   => 'bottom'
			)
		),
		array( 'param_name' => 'line_style', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Line style', 'bold-timeline' ), 
			'value' => array(
					esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
					esc_html__( 'No line', 'bold-timeline' ) 		=> 'none',
					esc_html__( 'Solid', 'bold-timeline' ) 			=> 'solid',
					esc_html__( 'Dotted', 'bold-timeline' ) 		=> 'dotted',
					esc_html__( 'Dashed', 'bold-timeline' ) 		=> 'dashed'
			)
		),
		array( 'param_name' => 'line_thickness', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Line thickness', 'bold-timeline' ), 'preview' => true,
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
                                esc_html__( 'Thin', 'bold-timeline' ) 			=> 'thin',
				esc_html__( 'Normal', 'bold-timeline' ) 		=> 'normal',
				esc_html__( 'Thick', 'bold-timeline' ) 			=> 'thick'
			)
		),
		array( 'param_name' => 'line_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Line color', 'bold-timeline' ), 'preview' => true ),
		array( 'param_name' => 'item_style', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Style', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 'preview' => true,
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' )             => 'inherit_from_style',
				esc_html__( 'Clear', 'bold-timeline' ) 				=> 'clear',
				esc_html__( 'Outline', 'bold-timeline' ) 			=> 'outline',
				esc_html__( 'Full outline', 'bold-timeline' ) 			=> 'outline_full',
				esc_html__( 'Top border', 'bold-timeline' ) 			=> 'outline_top',
				esc_html__( 'Filled header', 'bold-timeline' ) 			=> 'filled_header',
				esc_html__( 'Filled header with outline', 'bold-timeline' ) 	=> 'filled_header_outline'
			)
		),
		array( 'param_name' => 'item_shape', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Shape', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 'preview' => true,
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Square', 'bold-timeline' ) 		=> 'square',
				esc_html__( 'Soft rounded', 'bold-timeline' )           => 'soft_rounded',
				esc_html__( 'Hard rounded', 'bold-timeline' )           => 'hard_rounded'
			)
		),
		array( 'param_name' => 'item_frame_thickness', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Frame thickness', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 'preview' => true,
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Thin', 'bold-timeline' ) 			=> 'thin',
				esc_html__( 'Normal', 'bold-timeline' ) 		=> 'normal',
				esc_html__( 'Thick', 'bold-timeline' ) 			=> 'thick'
			)
		),
		array( 'param_name' => 'item_frame_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Frame color', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 'preview' => true ),
		array( 'param_name' => 'item_background_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Background color', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ) ),
		array( 'param_name' => 'item_animation', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Animation', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'No Animation', 'bold-builder' ) => 'no_animation',
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
		array( 'param_name' => 'item_content_display', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Content display', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Show', 'bold-timeline' ) 			=> 'show',
				esc_html__( 'Hide', 'bold-timeline' ) 			=> 'hide'
			)
		),
		array( 'param_name' => 'item_connection_type', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Connector style', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 'preview' => true,
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'None', 'bold-timeline' ) 			=> 'none',
				esc_html__( 'Line', 'bold-timeline' ) 			=> 'line',
				esc_html__( 'Triangle', 'bold-timeline' ) 		=> 'triangle'
			)
		),
		array( 'param_name' => 'item_connection_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Connector color', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ) ),
		array( 'param_name' => 'item_marker_type', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Marker style', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 'preview' => true,
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'None', 'bold-timeline' ) 			=> 'none',
				esc_html__( 'Dot', 'bold-timeline' ) 			=> 'dot',
				esc_html__( 'Circle', 'bold-timeline' ) 		=> 'circle',
				esc_html__( 'Small circle', 'bold-timeline' ) 	=> 'circle_small'
			)
		),
		array( 'param_name' => 'item_marker_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Marker color', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ) ),
		array( 'param_name' => 'item_icon_shape', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Icon shape', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Hard rounded', 'bold-timeline' ) 		=> 'hard_rounded',
				esc_html__( 'Soft rounded', 'bold-timeline' ) 		=> 'soft_rounded',
				esc_html__( 'Square', 'bold-timeline' ) 		=> 'square'
			)
		),
		array( 'param_name' => 'item_icon_style', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Icon style', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Outline', 'bold-timeline' ) 		=> 'outline',
				esc_html__( 'Filled', 'bold-timeline' ) 		=> 'filled',
				esc_html__( 'Shadow', 'bold-timeline' ) 		=> 'shadow'
			)
		),
		array( 'param_name' => 'item_icon_position', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Icon position', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' )             => 'inherit_from_style',
				esc_html__( 'On the line', 'bold-timeline' ) 			=> 'line',
				esc_html__( 'Opposite to the line', 'bold-timeline' ) 		=> 'opposite'
			)
		),
		array( 'param_name' => 'item_icon_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Icon color', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ) ),
		array( 'param_name' => 'item_media_position', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Media position', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 'preview' => true,
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Bottom', 'bold-timeline' ) 		=> 'bottom',
				esc_html__( 'Top', 'bold-timeline' ) 			=> 'top',
				esc_html__( 'Left', 'bold-timeline' ) 			=> 'left',
				esc_html__( 'Right', 'bold-timeline' ) 			=> 'right'
			)
		),
		array( 'param_name' => 'item_images_columns', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Media image gallery columns', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' )             => 'inherit_from_style',
				esc_html__( 'One (1)', 'bold-timeline' ) 			=> '1',
				esc_html__( 'Two (2)', 'bold-timeline' ) 			=> '2',
				esc_html__( 'Three (3)', 'bold-timeline' ) 			=> '3',
				esc_html__( 'Four (4)', 'bold-timeline' ) 			=> '4'
			)
		),
		array( 'param_name' => 'item_title_size', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Title size', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Default', 'bold-timeline' )                => 'default',
				esc_html__( 'Small', 'bold-timeline' )                  => 'small',
				esc_html__( 'Normal', 'bold-timeline' )                 => 'normal',
				esc_html__( 'Large', 'bold-timeline' )                  => 'large'
			)
		),
		array( 'param_name' => 'item_supertitle_style', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Supertitle style', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Inherit', 'bold-timeline' ) 		=> 'inherit',
				esc_html__( 'Default', 'bold-timeline' ) 		=> 'default',
				esc_html__( 'Sticker', 'bold-timeline' ) 		=> 'sticker'
			)
		),
		array( 'param_name' => 'item_sticker_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Sticker color', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ) ),
		array( 'param_name' => 'item_title_font', 'type' => 'dropdown', 'heading' => esc_html__( 'Title font', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ),
			'value' => array( esc_html__( 'Inherit', 'bold-timeline' ) => 'inherit' ) + $font_arr
		),
		array( 'param_name' => 'item_body_font', 'type' => 'dropdown', 'heading' => esc_html__( 'Body font', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ),
			'value' => array( esc_html__( 'Inherit', 'bold-timeline' ) => 'inherit' ) + $font_arr
		),
		array( 'param_name' => 'item_font_subset', 'type' => 'textfield', 'heading' => esc_html__( 'Font subset', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 'value' => 'latin,latin-ext', 'description' => 'E.g. latin,latin-ext,cyrillic,cyrillic-ext' ),
		array( 'param_name' => 'item_alignment', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Item alignment', 'bold-timeline' ), 'group' => esc_html__( 'Items', 'bold-timeline' ), 'preview' => true,
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Default', 'bold-timeline' ) 		=> 'default',
				esc_html__( 'Left', 'bold-timeline' ) 			=> 'left',
				esc_html__( 'Right', 'bold-timeline' ) 			=> 'right',
				esc_html__( 'Center', 'bold-timeline' ) 		=> 'center'
			)
		),
		array( 'param_name' => 'group_shape', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Group shape', 'bold-timeline' ), 'group' => esc_html__( 'Groups', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Square', 'bold-timeline' ) 		=> 'square',
				esc_html__( 'Soft rounded', 'bold-timeline' ) 	=> 'soft_rounded',
				esc_html__( 'Hard rounded', 'bold-timeline' ) 	=> 'hard_rounded',
				esc_html__( 'Circle', 'bold-timeline' ) 		=> 'circle'
			)
		),
		array( 'param_name' => 'group_style', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Group style', 'bold-timeline' ), 'group' => esc_html__( 'Groups', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Clear', 'bold-timeline' ) 			=> 'clear',
				esc_html__( 'Outline', 'bold-timeline' ) 		=> 'outline',
				esc_html__( 'Filled', 'bold-timeline' ) 		=> 'filled',
				esc_html__( 'Shadow', 'bold-timeline' ) 		=> 'shadow'
			)
		),
		array( 'param_name' => 'group_frame_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Group frame color', 'bold-timeline' ), 'group' => esc_html__( 'Groups', 'bold-timeline' ) ),
		array( 'param_name' => 'group_frame_thickness', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Group frame thickness', 'bold-timeline' ), 'group' => esc_html__( 'Groups', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Thin', 'bold-timeline' ) 			=> 'thin',
				esc_html__( 'Normal', 'bold-timeline' ) 		=> 'normal',
				esc_html__( 'Thick', 'bold-timeline' ) 			=> 'thick'
			)
		),
		array( 'param_name' => 'group_title_size', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Group title size', 'bold-timeline' ), 'group' => esc_html__( 'Groups', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Default', 'bold-timeline' )                => 'default',
				esc_html__( 'Small', 'bold-timeline' )                  => 'small',
				esc_html__( 'Normal', 'bold-timeline' )                 => 'normal',
				esc_html__( 'Large', 'bold-timeline' )                  => 'large'
			)
		),
		array( 'param_name' => 'group_title_font', 'type' => 'dropdown', 'heading' => esc_html__( 'Title font', 'bold-timeline' ), 'group' => esc_html__( 'Groups', 'bold-timeline' ),
			'value' => array( esc_html__( 'Inherit', 'bold-timeline' ) => 'inherit' ) + $font_arr
		),
		array( 'param_name' => 'group_font_subset', 'type' => 'textfield', 'heading' => esc_html__( 'Font subset', 'bold-timeline' ), 'group' => esc_html__( 'Groups', 'bold-timeline' ), 'value' => 'latin,latin-ext', 'description' => 'E.g. latin,latin-ext,cyrillic,cyrillic-ext' ),
		array( 'param_name' => 'group_content_display', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Group content display', 'bold-timeline' ), 'group' => esc_html__( 'Groups', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Show', 'bold-timeline' ) 			=> 'show',
				esc_html__( 'Hide', 'bold-timeline' ) 			=> 'hide'
			)
		),
		array( 'param_name' => 'button_style', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Buttons style', 'bold-timeline' ), 'group' => esc_html__( 'Buttons', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Outline', 'bold-timeline' ) 		=> 'outline',
				esc_html__( 'Filled', 'bold-timeline' ) 		=> 'filled',
				esc_html__( 'Shadow', 'bold-timeline' ) 		=> 'shadow',
				esc_html__( 'Clear', 'bold-timeline' ) 			=> 'clear'
			)
		),
		array( 'param_name' => 'button_shape', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Buttons shape', 'bold-timeline' ), 'group' => esc_html__( 'Buttons', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Square', 'bold-timeline' ) 		=> 'square',
				esc_html__( 'Soft rounded', 'bold-timeline' ) 	=> 'soft_rounded',
				esc_html__( 'Hard rounded', 'bold-timeline' ) 	=> 'hard_rounded'
			)
		),
		array( 'param_name' => 'button_size', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Buttons size', 'bold-timeline' ), 'group' => esc_html__( 'Buttons', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Small', 'bold-timeline' )                  => 'small',
				esc_html__( 'Normal', 'bold-timeline' )                 => 'normal',
				esc_html__( 'Large', 'bold-timeline' )                  => 'large'
			)
		),
		array( 'param_name' => 'slider_animation', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Animation', 'bold-timeline' ), 'description' => esc_html__( 'If fade is selected, number of slides to show will be 1', 'bold-timeline' ), 'group' => esc_html__( 'Sliders', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Default', 'bold-timeline' ) 		=> 'slide',
				esc_html__( 'Fade', 'bold-timeline' ) 			=> 'fade'
			)
		),
		array( 'param_name' => 'slider_arrows_style', 'default' => 'inherit_from_style', 'type' => 'dropdown', 'heading' => esc_html__( 'Navigation arrows style', 'bold-timeline' ), 'group' => esc_html__( 'Sliders', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'None', 'bold-timeline' ) 			=> 'none',
				esc_html__( 'Outline', 'bold-timeline' ) 		=> 'outline',
				esc_html__( 'Filled', 'bold-timeline' ) 		=> 'filled',
				esc_html__( 'Shadow', 'bold-timeline' ) 		=> 'shadow'
			)
		),
		array( 'param_name' => 'slider_arrows_shape', 'default' => 'inherit_from_style', 'type' => 'dropdown', 'heading' => esc_html__( 'Navigation arrows shape', 'bold-timeline' ), 'group' => esc_html__( 'Sliders', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Square', 'bold-timeline' ) 		=> 'square',
				esc_html__( 'Soft rounded', 'bold-timeline' )           => 'soft_rounded',
				esc_html__( 'Hard rounded', 'bold-timeline' )           => 'hard_rounded',
				esc_html__( 'Circle', 'bold-timeline' ) 		=> 'circle'
			)
		),
		array( 'param_name' => 'slider_arrows_size', 'default' => 'inherit_from_style', 'type' => 'dropdown', 'heading' => esc_html__( 'Navigation arrows size', 'bold-timeline' ), 'group' => esc_html__( 'Sliders', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Large', 'bold-timeline' ) 			=> 'large',
				esc_html__( 'Normal', 'bold-timeline' ) 		=> 'normal',
				esc_html__( 'Small', 'bold-timeline' ) 			=> 'small',
				esc_html__( 'Hide', 'bold-timeline' ) 			=> 'hide'
			)
		),
		array( 'param_name' => 'slider_dots_style', 'default' => 'inherit_from_style', 'type' => 'dropdown', 'heading' => esc_html__( 'Dots navigation', 'bold-timeline' ), 'group' => esc_html__( 'Sliders', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'Show', 'bold-timeline' ) 			=> 'show',
				esc_html__( 'Hide', 'bold-timeline' ) 			=> 'hide'
			)
		),
		array( 'param_name' => 'slider_slides_to_show', 'type' => 'textfield', 'default' => '2', 'heading' => esc_html__( 'Number of slides to show', 'bold-timeline' ), 'description' => esc_html__( 'e.g. 2', 'bold-timeline' ), 'group' => esc_html__( 'Sliders', 'bold-timeline' ) ),
		array( 'param_name' => 'slider_auto_play', 'type' => 'textfield', 'heading' => esc_html__( 'Slider Autoplay interval (ms)', 'bold-timeline' ), 'default' => '0', 'description' => esc_html__( 'e.g. 2000', 'bold-timeline' ), 'group' => esc_html__( 'Sliders', 'bold-timeline' ) ),
		array( 'param_name' => 'slider_gap', 'type' => 'dropdown', 'default' => 'inherit_from_style', 'heading' => esc_html__( 'Slider Horizontal Gap', 'bold-timeline' ), 'group' => esc_html__( 'Sliders', 'bold-timeline' ),
			'value' => array(
                                esc_html__( 'Inherit from style', 'bold-timeline' ) 	=> 'inherit_from_style',
				esc_html__( 'No gap', 'bold-builder' )                  => 'no_gap',
				esc_html__( 'Small', 'bold-builder' )                   => 'small',
				esc_html__( 'Normal', 'bold-builder' )                  => 'normal',
				esc_html__( 'Large', 'bold-builder' )                   => 'large'
			)
		),
		array( 'param_name' => 'slider_navigation_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Slider navigation color', 'bold-timeline' ), 'group' => esc_html__( 'Sliders', 'bold-timeline' ) ),
		array( 'param_name' => 'el_id', 'type' => 'textfield', 'heading' => esc_html__( 'Custom Id Attribute', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'el_class', 'type' => 'textfield', 'heading' => esc_html__( 'Extra Class Name(s)', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'el_css', 'type' => 'textarea', 'heading' => esc_html__( 'Extra CSS', 'bold-timeline' ), 'description' => esc_html__( 'Use #this to select this element (e.g. #this { color: white; })', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'el_style', 'type' => 'textfield', 'heading' => esc_html__( 'Inline Style', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ) ),
		array( 'param_name' => 'responsive', 'type' => 'checkbox_group', 'heading' => esc_html__( 'Hide element on screens', 'bold-timeline' ), 'group' => esc_html__( 'Responsive', 'bold-timeline' ), 'preview' => true,
			'value' => array(
				esc_html__( '≤480px', 'bold-timeline' ) 		=> 'hidden_xs',
				esc_html__( '480-767px', 'bold-timeline' ) 		=> 'hidden_ms',
				esc_html__( '768-991px', 'bold-timeline' ) 		=> 'hidden_sm',
				esc_html__( '992-1200px', 'bold-timeline' )             => 'hidden_md',
				esc_html__( '≥1200px', 'bold-timeline' ) 		=> 'hidden_lg',
			)
		)
	);
	Bold_Timeline::$builder->map( 'bold_timeline_container', array( 'name' => esc_html__( 'Timeline', 'bold-timeline' ), 'description' => esc_html__( 'Timeline container', 'bold-timeline' ), 'container' => 'vertical', 'icon' => 'bt_bb_icon_bold_timeline_container', 'accept' => array( 'bold_timeline_group' => true ), 'show_settings_on_create' => true, 'root' => true, 'params' => $bold_timeline_container_params ));
	
}
add_action( 'wp_loaded', 'bold_timeline_map_container' );