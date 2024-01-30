<?php

/* New image sizes */

function goldenblatt_custom_image_sizes () {
	
	/* large */
	add_image_size( 'boldthemes_large_square', 1280, 1280, true );
	add_image_size( 'boldthemes_large_rectangle', 1280, 720, true );
	add_image_size( 'boldthemes_large_rectangle_2x3', 1280, 850, true );
	add_image_size( 'boldthemes_large_vertical_rectangle', 720, 1280, true );
	add_image_size( 'boldthemes_large_vertical_rectangle_2x3', 960, 640, true );
	
	/* medium */
	add_image_size( 'boldthemes_medium_square', 640, 640, true );
	add_image_size( 'boldthemes_medium_rectangle', 640, 360, true );
	add_image_size( 'boldthemes_medium_rectangle_2x3', 640, 425, true );
	add_image_size( 'boldthemes_medium_vertical_rectangle', 360, 640, true );
	add_image_size( 'boldthemes_medium_vertical_rectangle_2x3', 480, 320, true );
	
	/* small */
	add_image_size( 'boldthemes_small_square', 320, 320, true );
	add_image_size( 'boldthemes_small_rectangle', 320, 180, true );
	add_image_size( 'boldthemes_small_rectangle_2x3', 320, 215, true );
	add_image_size( 'boldthemes_small_vertical_rectangle', 180, 320, true );
	add_image_size( 'boldthemes_small_vertical_rectangle_2x3', 240, 160, true );

}
add_action( 'after_setup_theme', 'goldenblatt_custom_image_sizes', 11);


// COLOR SCHEME

if ( is_file( dirname(__FILE__) . '/../../../../plugins/bold-page-builder/content_elements_misc/misc.php' ) ) {
	require_once( dirname(__FILE__) . '/../../../../plugins/bold-page-builder/content_elements_misc/misc.php' );
}
if ( function_exists('bt_bb_get_color_scheme_param_array') ) {
	$color_scheme_arr = bt_bb_get_color_scheme_param_array();
} else {
	$color_scheme_arr = array();
}


// SECTION LAYOUT

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_section', 'top_spacing' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_section', 'bottom_spacing' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_section', array(

		array( 'param_name' => 'top_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Top spacing', 'goldenblatt' ), 'weight' => 1, 'preview' => true,
			'responsive_override' => true, 
			'value' => array(
				esc_html__( 'No spacing', 'goldenblatt' ) 	=> '',
				esc_html__( 'Extra small', 'goldenblatt' ) 	=> 'extra_small',
				esc_html__( 'Small', 'goldenblatt' ) 		=> 'small',		
				esc_html__( 'Normal', 'goldenblatt' ) 		=> 'normal',
				esc_html__( 'Medium', 'goldenblatt' ) 		=> 'medium',
				esc_html__( 'Large', 'goldenblatt' ) 		=> 'large',
				esc_html__( 'Extra large', 'goldenblatt' ) 	=> 'extra_large',
				esc_html__( '5px', 'goldenblatt' ) 			=> '5',
				esc_html__( '10px', 'goldenblatt' ) 		=> '10',
				esc_html__( '15px', 'goldenblatt' ) 		=> '15',
				esc_html__( '20px', 'goldenblatt' ) 		=> '20',
				esc_html__( '25px', 'goldenblatt' ) 		=> '25',
				esc_html__( '30px', 'goldenblatt' ) 		=> '30',
				esc_html__( '35px', 'goldenblatt' ) 		=> '35',
				esc_html__( '40px', 'goldenblatt' ) 		=> '40',
				esc_html__( '45px', 'goldenblatt' ) 		=> '45',
				esc_html__( '50px', 'goldenblatt' ) 		=> '50',
				esc_html__( '55px', 'goldenblatt' ) 		=> '55',
				esc_html__( '60px', 'goldenblatt' ) 		=> '60',
				esc_html__( '65px', 'goldenblatt' ) 		=> '65',
				esc_html__( '70px', 'goldenblatt' ) 		=> '70',
				esc_html__( '75px', 'goldenblatt' ) 		=> '75',
				esc_html__( '80px', 'goldenblatt' ) 		=> '80',
				esc_html__( '85px', 'goldenblatt' ) 		=> '85',
				esc_html__( '90px', 'goldenblatt' ) 		=> '90',
				esc_html__( '95px', 'goldenblatt' ) 		=> '95',
				esc_html__( '100px', 'goldenblatt' ) 		=> '100'
			)
		),
		array( 'param_name' => 'bottom_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Bottom spacing', 'goldenblatt' ), 'weight' => 2, 'preview' => true, 'responsive_override' => true,
			'value' => array(
				esc_html__( 'No spacing', 'goldenblatt' ) 	=> '',
				esc_html__( 'Extra small', 'goldenblatt' ) 	=> 'extra_small',
				esc_html__( 'Small', 'goldenblatt' ) 		=> 'small',		
				esc_html__( 'Normal', 'goldenblatt' ) 		=> 'normal',
				esc_html__( 'Medium', 'goldenblatt' ) 		=> 'medium',
				esc_html__( 'Large', 'goldenblatt' ) 		=> 'large',
				esc_html__( 'Extra large', 'goldenblatt' ) 	=> 'extra_large',
				esc_html__( '5px', 'goldenblatt' ) 			=> '5',
				esc_html__( '10px', 'goldenblatt' ) 		=> '10',
				esc_html__( '15px', 'goldenblatt' ) 		=> '15',
				esc_html__( '20px', 'goldenblatt' ) 		=> '20',
				esc_html__( '25px', 'goldenblatt' ) 		=> '25',
				esc_html__( '30px', 'goldenblatt' ) 		=> '30',
				esc_html__( '35px', 'goldenblatt' ) 		=> '35',
				esc_html__( '40px', 'goldenblatt' ) 		=> '40',
				esc_html__( '45px', 'goldenblatt' ) 		=> '45',
				esc_html__( '50px', 'goldenblatt' ) 		=> '50',
				esc_html__( '55px', 'goldenblatt' ) 		=> '55',
				esc_html__( '60px', 'goldenblatt' ) 		=> '60',
				esc_html__( '65px', 'goldenblatt' ) 		=> '65',
				esc_html__( '70px', 'goldenblatt' ) 		=> '70',
				esc_html__( '75px', 'goldenblatt' ) 		=> '75',
				esc_html__( '80px', 'goldenblatt' ) 		=> '80',
				esc_html__( '85px', 'goldenblatt' ) 		=> '85',
				esc_html__( '90px', 'goldenblatt' ) 		=> '90',
				esc_html__( '95px', 'goldenblatt' ) 		=> '95',
				esc_html__( '100px', 'goldenblatt' ) 		=> '100'
			)
		),
		array( 'param_name' => 'negative_margin', 'type' => 'dropdown', 'heading' => esc_html__( 'Negative margin', 'goldenblatt' ), 'group' => esc_html__( 'General', 'goldenblatt' ), 'weight' => 4, 'preview' => true,
		'value' => array(
				esc_html__( 'No margin', 'goldenblatt' ) 	=> '',
				esc_html__( 'Small', 'goldenblatt' ) 		=> 'small',
				esc_html__( 'Normal', 'goldenblatt' ) 		=> 'normal',
				esc_html__( 'Medium', 'goldenblatt' ) 		=> 'medium',
				esc_html__( 'Large', 'goldenblatt' ) 		=> 'large',
				esc_html__( 'Extra Large', 'goldenblatt' ) 	=> 'extralarge',
				esc_html__( '5px', 'goldenblatt' ) 			=> '5',
				esc_html__( '10px', 'goldenblatt' ) 		=> '10',
				esc_html__( '15px', 'goldenblatt' ) 		=> '15',
				esc_html__( '20px', 'goldenblatt' ) 		=> '20',
				esc_html__( '25px', 'goldenblatt' ) 		=> '25',
				esc_html__( '30px', 'goldenblatt' ) 		=> '30',
				esc_html__( '35px', 'goldenblatt' ) 		=> '35',
				esc_html__( '40px', 'goldenblatt' ) 		=> '40',
				esc_html__( '45px', 'goldenblatt' ) 		=> '45',
				esc_html__( '50px', 'goldenblatt' ) 		=> '50',
				esc_html__( '55px', 'goldenblatt' ) 		=> '55',
				esc_html__( '60px', 'goldenblatt' ) 		=> '60',
				esc_html__( '65px', 'goldenblatt' ) 		=> '65',
				esc_html__( '70px', 'goldenblatt' ) 		=> '70',
				esc_html__( '75px', 'goldenblatt' ) 		=> '75',
				esc_html__( '80px', 'goldenblatt' ) 		=> '80',
				esc_html__( '85px', 'goldenblatt' ) 		=> '85',
				esc_html__( '90px', 'goldenblatt' ) 		=> '90',
				esc_html__( '95px', 'goldenblatt' ) 		=> '95',
				esc_html__( '100px', 'goldenblatt' ) 		=> '100'
			)
		),
	) );
}

function goldenblatt_bt_bb_section_class( $class, $atts ) {
	if ( isset( $atts['negative_margin'] ) && $atts['negative_margin'] != '' ) {
		$class[] = 'bt_bb_negative_margin' . '_' . $atts['negative_margin'];
	}
	return $class;
}
add_filter( 'bt_bb_section_class', 'goldenblatt_bt_bb_section_class', 10, 2 );


// ROW

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_row', array(
		array( 'param_name' => 'layout', 'type' => 'dropdown', 'heading' => esc_html__( 'Special columns layout', 'goldenblatt' ), 'preview' => true, 'preview_strong' => true, 'description' => 'Choose to show special 1/2+1/2 columns layout with limited content 1200px (with overlap left or right)',
			'value' => array(
				esc_html__( 'None', 'goldenblatt' ) 						=> '',
				esc_html__( 'Special', 'goldenblatt' ) 						=> 'special',
				esc_html__( 'Special with Overlap Left', 'goldenblatt' ) 	=> 'overlap-left',
				esc_html__( 'Special with Overlap Right', 'goldenblatt' ) 	=> 'overlap-right'
			)
		),
	));
}

function goldenblatt_bt_bb_row_class( $class, $atts ) {
	if ( isset( $atts['layout'] ) && $atts['layout'] != '' ) {
		$class[] = 'bt_bb_layout_special';
	}
	if ( isset( $atts['layout'] ) && $atts['layout'] == 'overlap-left' ) {
		$class[] = 'btOverlapLeft';
	}
	if ( isset( $atts['layout'] ) && $atts['layout'] == 'overlap-right' ) {
		$class[] = 'btOverlapRight';
	}

	return $class;
}
add_filter( 'bt_bb_row_class', 'goldenblatt_bt_bb_row_class', 10, 2 );



// SEPARATOR - SPACING, BORDER COLOR

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_separator', 'top_spacing' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_separator', 'bottom_spacing' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_separator', array(
		array( 'param_name' => 'top_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Top spacing', 'goldenblatt' ), 'weight' => 0, 'preview' => true,
			'responsive_override' => true, 'value' => array(
				esc_html__( 'No spacing', 'goldenblatt' ) 	=> 'none',
				esc_html__( 'Extra small', 'goldenblatt' ) 	=> 'extra_small',
				esc_html__( 'Small', 'goldenblatt' ) 		=> 'small',		
				esc_html__( 'Normal', 'goldenblatt' ) 		=> 'normal',
				esc_html__( 'Medium', 'goldenblatt' )	 	=> 'medium',
				esc_html__( 'Large', 'goldenblatt' ) 		=> 'large',
				esc_html__( 'Extra large', 'goldenblatt' ) 	=> 'extra_large',
				esc_html__( '5px', 'goldenblatt' ) 			=> '5',
				esc_html__( '10px', 'goldenblatt' ) 		=> '10',
				esc_html__( '15px', 'goldenblatt' ) 		=> '15',
				esc_html__( '20px', 'goldenblatt' ) 		=> '20',
				esc_html__( '25px', 'goldenblatt' ) 		=> '25',
				esc_html__( '30px', 'goldenblatt' ) 		=> '30',
				esc_html__( '35px', 'goldenblatt' ) 		=> '35',
				esc_html__( '40px', 'goldenblatt' ) 		=> '40',
				esc_html__( '45px', 'goldenblatt' ) 		=> '45',
				esc_html__( '50px', 'goldenblatt' ) 		=> '50',
				esc_html__( '60px', 'goldenblatt' )			=> '60',
				esc_html__( '70px', 'goldenblatt' ) 		=> '70',
				esc_html__( '80px', 'goldenblatt' ) 		=> '80',
				esc_html__( '90px', 'goldenblatt' ) 		=> '90',
				esc_html__( '100px', 'goldenblatt' ) 		=> '100',
				esc_html__( '110px', 'goldenblatt' ) 		=> '110',
				esc_html__( '120px', 'goldenblatt' ) 		=> '120',
				esc_html__( '130px', 'goldenblatt' ) 		=> '130',
				esc_html__( '140px', 'goldenblatt' ) 		=> '140',
				esc_html__( '150px', 'goldenblatt' ) 		=> '150'
			)
		),
		array( 'param_name' => 'bottom_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Bottom spacing', 'goldenblatt' ), 'weight' => 1, 'preview' => true, 'responsive_override' => true,
			'value' => array(
				esc_html__( 'No spacing', 'goldenblatt' ) 		=> 'none',
				esc_html__( 'Extra small', 'goldenblatt' ) 		=> 'extra_small',
				esc_html__( 'Small', 'goldenblatt' ) 			=> 'small',		
				esc_html__( 'Normal', 'goldenblatt' ) 			=> 'normal',
				esc_html__( 'Medium', 'goldenblatt' ) 			=> 'medium',
				esc_html__( 'Large', 'goldenblatt' ) 			=> 'large',
				esc_html__( 'Extra large', 'goldenblatt' ) 		=> 'extra_large',
				esc_html__( '5px', 'goldenblatt' ) 				=> '5',
				esc_html__( '10px', 'goldenblatt' ) 			=> '10',
				esc_html__( '15px', 'goldenblatt' ) 			=> '15',
				esc_html__( '20px', 'goldenblatt' ) 			=> '20',
				esc_html__( '25px', 'goldenblatt' ) 			=> '25',
				esc_html__( '30px', 'goldenblatt' ) 			=> '30',
				esc_html__( '35px', 'goldenblatt' ) 			=> '35',
				esc_html__( '40px', 'goldenblatt' ) 			=> '40',
				esc_html__( '45px', 'goldenblatt' ) 			=> '45',
				esc_html__( '50px', 'goldenblatt' ) 			=> '50',
				esc_html__( '60px', 'goldenblatt' ) 			=> '60',
				esc_html__( '70px', 'goldenblatt' ) 			=> '70',
				esc_html__( '80px', 'goldenblatt' ) 			=> '80',
				esc_html__( '90px', 'goldenblatt' ) 			=> '90',
				esc_html__( '100px', 'goldenblatt' ) 			=> '100',
				esc_html__( '110px', 'goldenblatt' ) 			=> '110',
				esc_html__( '120px', 'goldenblatt' ) 			=> '120',
				esc_html__( '130px', 'goldenblatt' ) 			=> '130',
				esc_html__( '140px', 'goldenblatt' ) 			=> '140',
				esc_html__( '150px', 'goldenblatt' ) 			=> '150'
			)
		),
		array( 'param_name' => 'color', 'type' => 'dropdown', 'heading' => esc_html__( 'Border color', 'goldenblatt' ), 'preview' => true,
			'value' => array(
				esc_html__( 'Default', 'goldenblatt' ) 			=> '',
				esc_html__( 'Dark color', 'goldenblatt' ) 		=> 'dark',
				esc_html__( 'Light color', 'goldenblatt' ) 		=> 'light',
				esc_html__( 'Accent color', 'goldenblatt' ) 	=> 'accent',
				esc_html__( 'Gray color', 'goldenblatt' ) 		=> 'gray'
			)
		),
	));
}

function goldenblatt_bt_bb_separator_class( $class, $atts ) {
	if ( isset( $atts['color'] ) && $atts['color'] != '' ) {
		$class[] = 'bt_bb_color' . '_' . $atts['color'];
	}
	return $class;
}
add_filter( 'bt_bb_separator_class', 'goldenblatt_bt_bb_separator_class', 10, 2 );


// HEADLINE - FONT WEIGHT

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'font_weight' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'dash' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'superheadline_font_weight' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'subheadline_font_weight' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'size' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_headline', array(
		array( 'param_name' => 'size', 'type' => 'dropdown', 'preview' => true, 'heading' => esc_html__( 'Size', 'goldenblatt' ), 'description' => 'Predefined heading sizes, independent of html tag', 'responsive_override' => true,
			'value' => array(
				esc_html__( 'Inherit', 'goldenblatt' ) 				=> 'inherit',
				esc_html__( 'Extra small', 'goldenblatt' ) 			=> 'extrasmall',
				esc_html__( 'Small', 'goldenblatt' ) 				=> 'small',
				esc_html__( 'Medium', 'goldenblatt' ) 				=> 'medium',
				esc_html__( 'Normal', 'goldenblatt' ) 				=> 'normal',
				esc_html__( 'Large', 'goldenblatt' ) 				=> 'large',
				esc_html__( 'Extra large', 'goldenblatt' ) 			=> 'extralarge',
				esc_html__( 'Huge', 'goldenblatt' ) 				=> 'huge',
				esc_html__( 'Extra huge', 'goldenblatt' ) 			=> 'extrahuge',
				esc_html__( 'Extra extra huge', 'goldenblatt' ) 	=> 'extraextrahuge'
			)
		),
		array( 'param_name' => 'font_weight', 'type' => 'dropdown', 'heading' => esc_html__( 'Font weight', 'goldenblatt' ), 'group' => esc_html__( 'Font', 'goldenblatt' ),
			'value' => array(
				esc_html__( 'Default', 'goldenblatt' ) 				=> '',
				esc_html__( 'Thin', 'goldenblatt' ) 				=> 'thin',
				esc_html__( 'Lighter', 'goldenblatt' ) 				=> 'lighter',
				esc_html__( 'Light', 'goldenblatt' ) 				=> 'light',
				esc_html__( 'Normal', 'goldenblatt' ) 				=> 'normal',
				esc_html__( 'Medium', 'goldenblatt' ) 				=> 'medium',
				esc_html__( 'Semi bold', 'goldenblatt' ) 			=> 'semi-bold',
				esc_html__( 'Bold', 'goldenblatt' ) 				=> 'bold',
				esc_html__( 'Bolder', 'goldenblatt' ) 				=> 'bolder',
				esc_html__( 'Black', 'goldenblatt' ) 				=> 'black'
			)
		),
		array( 'param_name' => 'dash', 'type' => 'dropdown', 'preview' => true, 'heading' => esc_html__( 'Dash', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ),
			'value' => array(
				esc_html__( 'None', 'goldenblatt' ) 					=> 'none',
				esc_html__( 'Light White square', 'goldenblatt' ) 		=> 'top',
				esc_html__( 'Accent square', 'goldenblatt' ) 			=> 'bottom',
				esc_html__( 'Light Accent square', 'goldenblatt' ) 		=> 'top_bottom',
				esc_html__( 'Light Alternate square', 'goldenblatt' ) 	=> 'light_alternate',
				esc_html__( 'Gray square', 'goldenblatt' ) 				=> 'gray'
			)
		),
		array( 'param_name' => 'supertitle_font_weight', 'type' => 'dropdown', 'heading' => esc_html__( 'Supertitle font weight', 'goldenblatt' ), 'group' => esc_html__( 'Font', 'goldenblatt' ),
			'value' => array(
				esc_html__( 'Default', 'goldenblatt' ) 				=> '',
				esc_html__( 'Thin', 'goldenblatt' ) 				=> 'thin',
				esc_html__( 'Lighter', 'goldenblatt' ) 				=> 'lighter',
				esc_html__( 'Light', 'goldenblatt' ) 				=> 'light',
				esc_html__( 'Normal', 'goldenblatt' ) 				=> 'normal',
				esc_html__( 'Medium', 'goldenblatt' ) 				=> 'medium',
				esc_html__( 'Semi bold', 'goldenblatt' ) 			=> 'semi-bold',
				esc_html__( 'Bold', 'goldenblatt' ) 				=> 'bold',
				esc_html__( 'Bolder', 'goldenblatt' ) 				=> 'bolder',
				esc_html__( 'Black', 'goldenblatt' ) 				=> 'black'
			)
		),
		array( 'param_name' => 'subtitle_font_weight', 'type' => 'dropdown', 'heading' => esc_html__( 'Subtitle font weight', 'goldenblatt' ), 'group' => esc_html__( 'Font', 'goldenblatt' ),
			'value' => array(
				esc_html__( 'Default', 'goldenblatt' ) 				=> '',
				esc_html__( 'Thin', 'goldenblatt' ) 				=> 'thin',
				esc_html__( 'Lighter', 'goldenblatt' ) 				=> 'lighter',
				esc_html__( 'Light', 'goldenblatt' ) 				=> 'light',
				esc_html__( 'Normal', 'goldenblatt' ) 				=> 'normal',
				esc_html__( 'Medium', 'goldenblatt' ) 				=> 'medium',
				esc_html__( 'Semi bold', 'goldenblatt' ) 			=> 'semi-bold',
				esc_html__( 'Bold', 'goldenblatt' ) 				=> 'bold',
				esc_html__( 'Bolder', 'goldenblatt' ) 				=> 'bolder',
				esc_html__( 'Black', 'goldenblatt' ) 				=> 'black'
			)
		),
	));
}

function goldenblatt_bt_bb_headline_class( $class, $atts ) {
	if ( isset( $atts['supertitle_font_weight'] ) && $atts['supertitle_font_weight'] != '' ) {
		$class[] = 'bt_bb_supertitle_font_weight' . '_' . $atts['supertitle_font_weight'];
	}
	if ( isset( $atts['subtitle_font_weight'] ) && $atts['subtitle_font_weight'] != '' ) {
		$class[] = 'bt_bb_subtitle_font_weight' . '_' . $atts['subtitle_font_weight'];
	}
	if ( $atts['headline'] == '' ) {
		$class[] = 'btNoHeadline';
	}
	return $class;
}
add_filter( 'bt_bb_headline_class', 'goldenblatt_bt_bb_headline_class', 10, 2 );




// SLIDER - DOTS COLOR SCHEME

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_content_slider', 'show_dots' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_content_slider', 'arrows_size' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_content_slider', array(
		array( 'param_name' => 'dots_shape', 'type' => 'dropdown', 'group' => esc_html__( 'Navigation', 'goldenblatt' ), 'heading' => esc_html__( 'Dots shape', 'goldenblatt' ),
			'value' => array(
				esc_html__( 'Circle', 'goldenblatt' ) 		=> '',
				esc_html__( 'Square', 'goldenblatt' ) 		=> 'square',
				esc_html__( 'Line', 'goldenblatt' ) 		=> 'line'
			)
		),
		array( 'param_name' => 'show_dots', 'type' => 'dropdown', 'group' => esc_html__( 'Navigation', 'goldenblatt' ), 'heading' => esc_html__( 'Dots navigation', 'goldenblatt' ),
			'value' => array(
				esc_html__( 'Bottom', 'goldenblatt' ) 		=> 'bottom',
				esc_html__( 'Below', 'goldenblatt' ) 		=> 'below',
				esc_html__( 'On side', 'goldenblatt' ) 		=> 'on_side',
				esc_html__( 'Hide', 'goldenblatt' ) 		=> 'hide'
			)
		),
		array( 'param_name' => 'arrows_size', 'type' => 'dropdown', 'group' => esc_html__( 'Navigation', 'goldenblatt' ), 'preview' => true, 'default' => 'normal', 'heading' => esc_html__( 'Navigation arrows size', 'goldenblatt' ),
			'value' => array(
				esc_html__( 'No arrows', 'goldenblatt' ) 	=> 'no_arrows',
				esc_html__( 'Small', 'goldenblatt' ) 		=> 'small',
				esc_html__( 'Normal', 'goldenblatt' ) 		=> 'normal',
				esc_html__( 'Large', 'goldenblatt' ) 		=> 'large'
			)
		),
		array( 'param_name' => 'dots_color_scheme', 'type' => 'dropdown', 'group' => esc_html__( 'Navigation', 'goldenblatt' ), 'heading' => esc_html__( 'Dots color scheme', 'goldenblatt' ), 'value' => $color_scheme_arr ),
	));
}

function goldenblatt_bt_bb_content_slider_class( $class, $atts ) {
	if ( isset( $atts['dots_shape'] ) && $atts['dots_shape'] != '' ) {
		$class[] = 'bt_bb_dots_shape' . '_' . $atts['dots_shape'];
	}
	if ( isset( $atts['dots_color_scheme'] ) && $atts['dots_color_scheme'] != '' ) {
		$class[] = 'bt_bb_dots_color_scheme' . '_' . bt_bb_get_color_scheme_id( $atts['dots_color_scheme'] );
	}
	return $class;
}


function goldenblatt_bt_bb_content_slider_style( $style, $atts ) {
	if ( isset( $atts['dots_color_scheme'] ) && $atts['dots_color_scheme'] != '' ) {
	
		$dots_color_scheme_id = NULL;
		if ( is_numeric ( $atts['dots_color_scheme'] ) ) {
			$dots_color_scheme_id = $atts['dots_color_scheme'];
		} else if ( $atts['dots_color_scheme'] != '' ) {
			$dots_color_scheme_id = bt_bb_get_color_scheme_id( $atts['dots_color_scheme'] );
		}
		$dots_color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $dots_color_scheme_id - 1 );
		if ( $dots_color_scheme_colors ) $style .= '; --dots-primary-color:' . $dots_color_scheme_colors[0] . '; --dots-secondary-color:' . $dots_color_scheme_colors[1] . ';';
	}

	return $style;
}

add_filter( 'bt_bb_content_slider_class', 'goldenblatt_bt_bb_content_slider_class', 10, 2 );
add_filter( 'bt_bb_content_slider_style', 'goldenblatt_bt_bb_content_slider_style', 10, 2 );



// ICONS - ADD ALIGNMENT

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_icon', array(
		array( 'param_name' => 'text_align', 'type' => 'dropdown', 'default' => '', 'heading' => esc_html__( 'Text alignment', 'goldenblatt' ),
			'value' => array(
				esc_html__( 'Top', 'goldenblatt' ) 			=> 'top',
				esc_html__( 'Middle', 'goldenblatt' ) 		=> '',
				esc_html__( 'Bottom', 'goldenblatt' ) 		=> 'bottom'
			)
		)
	));
}
function goldenblatt_bt_bb_icon_class( $class, $atts ) {
	if ( isset( $atts['text_align'] ) && $atts['text_align'] != '' ) {
		$class[] = 'bt_bb_text_align' . '_' . $atts['text_align'];
	}
	return $class;
}
add_filter( 'bt_bb_icon_class', 'goldenblatt_bt_bb_icon_class', 10, 2 );



// MASONRY POST GRID

/*if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( "bt_bb_masonry_post_grid", 'post_type' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_masonry_post_grid', array(
		array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'goldenblatt' ), 'value' => $color_scheme_arr ),
	));
}

function goldenblatt_bt_bb_masonry_post_grid_class( $class, $atts ) {
	if ( isset( $atts['color_scheme'] ) && $atts['color_scheme'] != '' ) {
		$class[] = 'bt_bb_color_scheme' . '_' . bt_bb_get_color_scheme_id( $atts['color_scheme'] );
	}
	return $class;
}

function goldenblatt_bt_bb_masonry_post_grid_style( $style, $atts ) {
	if ( isset( $atts['color_scheme'] ) && $atts['color_scheme'] != '' ) {
	
		$color_scheme_id = NULL;
		if ( is_numeric ( $atts['color_scheme'] ) ) {
			$color_scheme_id = $atts['color_scheme'];
		} else if ( $atts['color_scheme'] != '' ) {
			$color_scheme_id = bt_bb_get_color_scheme_id( $atts['color_scheme'] );
		}
		$color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $color_scheme_id - 1 );
		if ( $color_scheme_colors ) $style .= '; --masonry-primary-color:' . $color_scheme_colors[0] . '; --masonry-secondary-color:' . $color_scheme_colors[1] . ';';
	}
	return $style;
}

add_filter( 'bt_bb_masonry_post_grid_class', 'goldenblatt_bt_bb_masonry_post_grid_class', 10, 2 );
add_filter( 'bt_bb_masonry_post_grid_style', 'goldenblatt_bt_bb_masonry_post_grid_style', 10, 2 );*/



// ACCORDION - SHAPE

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_accordion', 'shape' );
}

function goldenblatt_bt_bb_fe( $elements ) {

	
	$elements[ 'bt_bb_card' ] = array(
		'edit_box_selector' => '',
		'params' => array(			
			'image'      			=> array(),
			'title_position'  		=> array(),
			'url'					=> array( 'js_handler' => array( 'target_selector' => 'a', 'type' => 'attr', 'attr' => 'href' ) ),
			'target' 				=> array( 'js_handler' => array( 'target_selector' => 'a', 'type' => 'attr', 'attr' => 'target' ) ),
			'icon'					=> array(),
			'title'					=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_card_content .bt_bb_card_title', 'type' => 'inner_html' ) ),
			'text'					=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_card_text', 'type' => 'inner_html' ) ),
		),
	);
	$elements[ 'bt_bb_link' ] = array(
		'edit_box_selector' => '',
		'params' => array(
			'text'					=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_link  .bt_bb_link_text', 'type' => 'inner_html' ) ),
			'url'					=> array( 'js_handler' => array( 'target_selector' => 'a', 'type' => 'attr', 'attr' => 'href' ) ),
			'target' 				=> array( 'js_handler' => array( 'target_selector' => 'a', 'type' => 'attr', 'attr' => 'target' ) ),
			'style'					=> array( 'js_handler' => array( 'target_selector' => '', 'type' => 'class' ) ),
		),
	);
	$elements[ 'bt_bb_counter' ] = array(
		'edit_box_selector' => '',
		'ajax_trigger_scroll' => true,
		'params' => array(
			'icon'				=> array(),
			'number'			=> array(),
			'text'				=> array(),
		),
	);
	$elements[ 'bt_bb_price_list' ] = array(
		'edit_box_selector' => '',
		'params' => array(
			'icon'			=> array(),
			'title'			=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_price_list_title', 'type' => 'inner_html' ) ),
			'currency'		=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_price_list_currency', 'type' => 'inner_html' ) ),
			'price'			=> array( 'js_handler' => array( 'target_selector' => '.bt_bb_price_list_amount', 'type' => 'inner_html' ) ),
			'text'			=> array(),
		),
	);

	return $elements;
}
add_filter( 'bt_bb_fe_elements', 'goldenblatt_bt_bb_fe' );
