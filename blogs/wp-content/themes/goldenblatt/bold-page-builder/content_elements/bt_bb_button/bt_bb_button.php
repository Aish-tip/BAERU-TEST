<?php

class bt_bb_button extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'text'					=> '',
			'icon'					=> '',
			'url'					=> '',
			'target'				=> '',
			'color_scheme'  		=> '',
			'icon_color_scheme'  	=> '',
			'font'          		=> '',
			'font_subset'   		=> '',
			'style'					=> '',
			'size'					=> '',
			'width'					=> '',
			'shape'					=> '',
			'align'                 => 'inherit'
		) ), $atts, $this->shortcode ) );
		
		$class = array( $this->shortcode );
		$data_override_class = array();

		if ( $font != '' && $font != 'inherit' ) {
			require_once( dirname(__FILE__) . '/../../../../../plugins/bold-page-builder/content_elements_misc/misc.php' );
			bt_bb_enqueue_google_font( $font, $font_subset );
		}
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}	
		
		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $font != '' && $font != 'inherit' ) {
			$el_style = $el_style . ';' . 'font-family:\'' . urldecode( $font ) . '\'';
		}

		$color_scheme_id = NULL;
		if ( is_numeric ( $color_scheme ) ) {
			$color_scheme_id = $color_scheme;
		} else if ( $color_scheme != '' ) {
			$color_scheme_id = bt_bb_get_color_scheme_id( $color_scheme );
		}
		$color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $color_scheme_id - 1 );
		if ( $color_scheme_colors ) $el_style .= '; --button-primary-color:' . $color_scheme_colors[0] . '; --button-secondary-color:' . $color_scheme_colors[1] . ';';
		if ( $color_scheme != '' ) $class[] = $this->prefix . 'color_scheme_' .  $color_scheme_id;

		$icon_color_scheme_id = NULL;
		if ( is_numeric ( $icon_color_scheme ) ) {
			$icon_color_scheme_id = $icon_color_scheme;
		} else if ( $icon_color_scheme != '' ) {
			$icon_color_scheme_id = bt_bb_get_color_scheme_id( $icon_color_scheme );
		}
		$icon_color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $icon_color_scheme_id - 1 );
		if ( $icon_color_scheme_colors ) $el_style .= '; --button-icon-primary-color:' . $icon_color_scheme_colors[0] . '; --button-icon-secondary-color:' . $icon_color_scheme_colors[1] . ';';
		if ( $icon_color_scheme != '' ) $class[] = $this->prefix . 'icon_color_scheme_' .  $icon_color_scheme_id;
		
		if ( $style != '' ) {
			$class[] = $this->prefix . 'style' . '_' . $style;
		}
		
		$this->responsive_data_override_class(
			$class, $data_override_class,
			array(
				'prefix' => $this->prefix,
				'param' => 'size',
				'value' => $size
			)
		);
		
		if ( $width != '' ) {
			$class[] = $this->prefix . 'width' . '_' . $width;
		}
		
		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}
		
		$this->responsive_data_override_class(
			$class, $data_override_class,
			array(
				'prefix' => $this->prefix,
				'param' => 'align',
				'value' => $align
			)
		);

		if ( $icon != '' ) {
			$class[] = 'btWithIcon';
		}

		if ( $target == '' ) {
			$target = '_self';
		}
		
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$output = $this->get_html( $icon, $text, $url, $target );
		
		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . ' data-bt-override-class="' . htmlspecialchars( json_encode( $data_override_class, JSON_FORCE_OBJECT ), ENT_QUOTES, 'UTF-8' ) . '">' . $output . '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}
	
	function get_html( $icon, $text, $url, $target ) {

		if ( $url == '' ) {
			$url = '#';
		}
		
		$text_output = '';

		if ( $text != '' ) {
			$text_output = '<span class="bt_bb_button_text">' . $text . '</span>';
		}

		$link = bt_bb_get_url( $url );

		// IMPORTANT: esc_attr must be used instead of esc_url

		if ( $icon == '' || $icon == 'no_icon' ) {
			$output = '<a href="' . esc_attr( $link ) . '" target="' . esc_attr( $target ) . '" class="' . esc_attr( $this->prefix ) . 'link" title="' . esc_attr( $text ) . '">';
					$output .= $text_output;
			$output .= '</a>';
		
		} else {
			
			$output = '<a href="' . esc_attr( $link ) . '" target="' . esc_attr( $target ) . '" class="' . esc_attr( $this->prefix ) . 'link" title="' . esc_attr( $text ) . '">';
				/* Icon */
				$output .= '<div class="' . esc_attr( $this->prefix ) . 'icon">';
					$output .= bt_bb_icon::get_html( $icon, '', '', '' );
				$output .= '</div>';
			
				/* Text - Button */
				$output .= '<div class="' . esc_attr( $this->prefix ) . 'link">';
					$output .= $text_output;
				$output .= '</div>';
			$output .= '</a>';
		}
		
		return $output;
	}	

	function map_shortcode() {

		include( WP_PLUGIN_DIR   . '/bold-page-builder/content_elements_misc/fonts1.php' );

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Button', 'goldenblatt' ), 'description' => esc_html__( 'Button with custom link', 'goldenblatt' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'text', 'type' => 'textfield', 'heading' => esc_html__( 'Text', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'url', 'type' => 'textfield', 'heading' => esc_html__( 'URL', 'goldenblatt' ), 'description' => esc_html__( 'Enter full or local URL (eg. https://www.bold-themes.com or /pages/about-us) or post slug (eg. about-us)', 'goldenblatt' ), 'group' => esc_html__( 'URL', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'goldenblatt' ), 'group' => esc_html__( 'URL', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'goldenblatt' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'goldenblatt' ) => '_blank',
					)
				),
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Alignment', 'goldenblatt' ), 'description' => esc_html__( 'Please note that it is not possible to show multiple buttons inline if any of them are using Center option.', 'goldenblatt' ), 'responsive_override' => true,
					'value' => array(
						esc_html__( 'Inherit', 'goldenblatt' ) 				=> 'inherit',
						esc_html__( 'Left', 'goldenblatt' ) 				=> 'left',
						esc_html__( 'Center', 'goldenblatt' ) 				=> 'center',
						esc_html__( 'Right', 'goldenblatt' ) 				=> 'right'
					)
				),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Size', 'goldenblatt' ), 'preview' => true, 'group' => esc_html__( 'Design', 'goldenblatt' ), 'responsive_override' => true,
					'value' => array(
						esc_html__( 'Small', 'goldenblatt' ) 			=> 'small',
						esc_html__( 'Normal', 'goldenblatt' ) 			=> 'normal',
						esc_html__( 'Large', 'goldenblatt' ) 			=> 'large'
					)
				),				
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'goldenblatt' ), 'value' => $color_scheme_arr, 'preview' => true, 'group' => esc_html__( 'Design', 'goldenblatt' ) ),
				array( 'param_name' => 'font', 'type' => 'dropdown', 'heading' => esc_html__( 'Font', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ), 'preview' => true,
					'value' => array( esc_html__( 'Inherit', 'goldenblatt' ) => 'inherit' ) + BT_BB_Root::$font_arr
				),
				array( 'param_name' => 'font_subset', 'type' => 'textfield', 'heading' => esc_html__( 'Google Font subset', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ), 'value' => 'latin,latin-ext', 'description' => esc_html__( 'E.g. latin,latin-ext,cyrillic,cyrillic-ext', 'goldenblatt' ) ),
				array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Style', 'goldenblatt' ), 'preview' => true, 'group' => esc_html__( 'Design', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Outline', 'goldenblatt' ) 			=> 'outline',
						esc_html__( 'Filled', 'goldenblatt' ) 			=> 'filled',
						esc_html__( 'Clean', 'goldenblatt' ) 			=> 'clean'
					)
				),
				array( 'param_name' => 'icon_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon color scheme', 'goldenblatt' ), 'value' => $color_scheme_arr, 'group' => esc_html__( 'Design', 'goldenblatt' ) ),
				array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Inherit', 'goldenblatt' ) 			=> 'inherit',
						esc_html__( 'Square', 'goldenblatt' ) 			=> 'square',
						esc_html__( 'Rounded', 'goldenblatt' ) 			=> 'rounded',
						esc_html__( 'Round', 'goldenblatt' ) 			=> 'round'
					)
				),
				array( 'param_name' => 'width', 'type' => 'dropdown', 'heading' => esc_html__( 'Width', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Inline', 'goldenblatt' ) 			=> 'inline',
						esc_html__( 'Full', 'goldenblatt' ) 			=> 'full'				
					)
				)
			)
		) );
	} 
}