<?php

/* Remove unused params */

remove_action( 'customize_register', 'boldthemes_customize_blog_side_info' );
remove_action( 'boldthemes_customize_register', 'boldthemes_customize_blog_side_info' );


// SUPERTITLE WEIGHT

BoldThemes_Customize_Default::$data['default_supertitle_weight'] = 'default';
if ( ! function_exists( 'boldthemes_customize_default_supertitle_weight' ) ) {
	function boldthemes_customize_default_supertitle_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_supertitle_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_supertitle_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));

		$wp_customize->add_control( 'default_supertitle_weight', array(
			'label'     		=> esc_html__( 'Supertitle Font Weight', 'goldenblatt' ),
			'section'   		=> BoldThemesFramework::$pfx . '_typo_section',
			'settings'  		=> BoldThemesFramework::$pfx . '_theme_options[default_supertitle_weight]',
			'priority'  		=> 100,
			'type'      		=> 'select',
			'choices'   => array(
				'default'		=> esc_html__( 'Default', 'goldenblatt' ),
				'thin' 			=> esc_html__( 'Thin', 'goldenblatt' ),
				'lighter' 		=> esc_html__( 'Lighter', 'goldenblatt' ),
				'light' 		=> esc_html__( 'Light', 'goldenblatt' ),
				'normal' 		=> esc_html__( 'Normal', 'goldenblatt' ),
				'medium' 		=> esc_html__( 'Medium', 'goldenblatt' ),
				'semi-bold' 	=> esc_html__( 'Semi bold', 'goldenblatt' ),
				'bold' 			=> esc_html__( 'Bold', 'goldenblatt' ),
				'bolder' 		=> esc_html__( 'Bolder', 'goldenblatt' ),
				'black' 		=> esc_html__( 'Black', 'goldenblatt' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_supertitle_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_supertitle_weight' );


// HEADING WEIGHT

BoldThemes_Customize_Default::$data['default_heading_weight'] = 'default';
if ( ! function_exists( 'boldthemes_customize_default_heading_weight' ) ) {
	function boldthemes_customize_default_heading_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_heading_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_heading_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));

		$wp_customize->add_control( 'default_heading_weight', array(
			'label'     		=> esc_html__( 'Heading Weight', 'goldenblatt' ),
			'section'   		=> BoldThemesFramework::$pfx . '_typo_section',
			'settings'  		=> BoldThemesFramework::$pfx . '_theme_options[default_heading_weight]',
			'priority'  		=> 100,
			'type'      		=> 'select',
			'choices'   => array(
				'default'		=> esc_html__( 'Default', 'goldenblatt' ),
				'thin' 			=> esc_html__( 'Thin', 'goldenblatt' ),
				'lighter' 		=> esc_html__( 'Lighter', 'goldenblatt' ),
				'light' 		=> esc_html__( 'Light', 'goldenblatt' ),
				'normal' 		=> esc_html__( 'Normal', 'goldenblatt' ),
				'medium' 		=> esc_html__( 'Medium', 'goldenblatt' ),
				'semi-bold' 	=> esc_html__( 'Semi bold', 'goldenblatt' ),
				'bold' 			=> esc_html__( 'Bold', 'goldenblatt' ),
				'bolder' 		=> esc_html__( 'Bolder', 'goldenblatt' ),
				'black' 		=> esc_html__( 'Black', 'goldenblatt' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_heading_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_heading_weight' );


// SUBTITLE WEIGHT

BoldThemes_Customize_Default::$data['default_subtitle_weight'] = 'default';
if ( ! function_exists( 'boldthemes_customize_default_subtitle_weight' ) ) {
	function boldthemes_customize_default_subtitle_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_subtitle_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_subtitle_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));

		$wp_customize->add_control( 'default_subtitle_weight', array(
			'label'     		=> esc_html__( 'Subtitle Font Weight', 'goldenblatt' ),
			'section'   		=> BoldThemesFramework::$pfx . '_typo_section',
			'settings'  		=> BoldThemesFramework::$pfx . '_theme_options[default_subtitle_weight]',
			'priority'  		=> 100,
			'type'      		=> 'select',
			'choices'   => array(
				'default'		=> esc_html__( 'Default', 'goldenblatt' ),
				'thin' 			=> esc_html__( 'Thin', 'goldenblatt' ),
				'lighter' 		=> esc_html__( 'Lighter', 'goldenblatt' ),
				'light' 		=> esc_html__( 'Light', 'goldenblatt' ),
				'normal' 		=> esc_html__( 'Normal', 'goldenblatt' ),
				'medium' 		=> esc_html__( 'Medium', 'goldenblatt' ),
				'semi-bold' 	=> esc_html__( 'Semi bold', 'goldenblatt' ),
				'bold' 			=> esc_html__( 'Bold', 'goldenblatt' ),
				'bolder' 		=> esc_html__( 'Bolder', 'goldenblatt' ),
				'black' 		=> esc_html__( 'Black', 'goldenblatt' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_subtitle_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_subtitle_weight' );


// BUTTON FONT

BoldThemes_Customize_Default::$data['button_font'] = 'Poppins';
if ( ! function_exists( 'boldthemes_customize_button_font' ) ) {
	function boldthemes_customize_button_font( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[button_font]', array(
			'default'           => urlencode( BoldThemes_Customize_Default::$data['button_font'] ),
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'button_font', array(
			'label'     => esc_html__( 'Button Font', 'goldenblatt' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[button_font]',
			'priority'  => 101,
			'type'      => 'select',
			'choices'   => BoldThemesFramework::$customize_fonts
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_button_font' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_button_font' );


// CAPITALIZE MAIN MENU

BoldThemes_Customize_Default::$data['capitalize_main_menu'] = true;
if ( ! function_exists( 'boldthemes_customize_capitalize_main_menu' ) ) {
	function boldthemes_customize_capitalize_main_menu( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[capitalize_main_menu]', array(
			'default'           => BoldThemes_Customize_Default::$data['capitalize_main_menu'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'capitalize_main_menu', array(
			'label'     => esc_html__( 'Capitalize Menu Items', 'goldenblatt' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[capitalize_main_menu]',
			'priority'  => 103,
			'type'      => 'checkbox'
		));
	}
}

add_action( 'customize_register', 'boldthemes_customize_capitalize_main_menu' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_capitalize_main_menu' );


// MENU WEIGHT

BoldThemes_Customize_Default::$data['default_menu_weight'] = 'default';

if ( ! function_exists( 'boldthemes_customize_default_menu_weight' ) ) {
	function boldthemes_customize_default_menu_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_menu_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_menu_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'default_menu_weight', array(
			'label'     => esc_html__( 'Menu Font Weight', 'goldenblatt' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[default_menu_weight]',
			'priority'  => 102,
			'type'      => 'select',
			'choices'   => array(
				'default'	=> esc_html__( 'Default', 'goldenblatt' ),
				'thin' 		=> esc_html__( 'Thin', 'goldenblatt' ),
				'lighter' 	=> esc_html__( 'Lighter', 'goldenblatt' ),
				'light' 	=> esc_html__( 'Light', 'goldenblatt' ),
				'normal' 	=> esc_html__( 'Normal', 'goldenblatt' ),
				'medium' 	=> esc_html__( 'Medium', 'goldenblatt' ),
				'semi-bold' => esc_html__( 'Semi bold', 'goldenblatt' ),
				'bold' 		=> esc_html__( 'Bold', 'goldenblatt' ),
				'bolder' 	=> esc_html__( 'Bolder', 'goldenblatt' ),
				'black' 	=> esc_html__( 'Black', 'goldenblatt' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_menu_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_menu_weight' );


/* Helper function */

if ( ! function_exists( 'goldenblatt_body_class' ) ) {
	function goldenblatt_body_class( $extra_class ) {
		if ( boldthemes_get_option( 'default_heading_weight' ) ) {
			$extra_class[] =  'btHeadingWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_heading_weight' ) );
		}
		if ( boldthemes_get_option( 'default_supertitle_weight' ) ) {
			$extra_class[] =  'btSupertitleWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_supertitle_weight' ) );
		}
		if ( boldthemes_get_option( 'default_subtitle_weight' ) ) {
			$extra_class[] =  'btSubtitleWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_subtitle_weight' ) );
		}
		return $extra_class;
	}
}