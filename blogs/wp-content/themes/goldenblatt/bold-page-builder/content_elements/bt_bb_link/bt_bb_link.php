<?php

class bt_bb_link extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'text'					=> '',
			'url'					=> '',
			'target'				=> '',
			'color_scheme'  		=> '',
			'style'					=> ''
		) ), $atts, $this->shortcode ) );
		
		$class = array( $this->shortcode );
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}	
		
		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}
	
		if ( $style != '' ) {
			$class[] = $this->prefix . 'style' . '_' . $style;
		}
		
		$color_scheme_id = NULL;
		if ( is_numeric ( $color_scheme ) ) {
			$color_scheme_id = $color_scheme;
		} else if ( $color_scheme != '' ) {
			$color_scheme_id = bt_bb_get_color_scheme_id( $color_scheme );
		}
		$color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $color_scheme_id - 1 );
		if ( $color_scheme_colors ) $el_style .= '; --link-primary-color:' . $color_scheme_colors[0] . '; --link-secondary-color:' . $color_scheme_colors[1] . ';';
		if ( $color_scheme != '' ) $class[] = $this->prefix . 'color_scheme_' .  $color_scheme_id;
		
		if ( $target == '' ) {
			$target = '_self';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$output = $this->get_html( $text, $url, $target );
		
		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '>' . $output . '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}
	
	function get_html( $text, $url, $target ) {
		
		$text_output = '';

		if ( $text != '' ) {
			$text_output = '<span class="bt_bb_link_text">' . $text . '</span>';
		}

		$link = bt_bb_get_url( $url );

		// IMPORTANT: esc_attr must be used instead of esc_url
		
		if ( $link != '' ) {
			$output = '<a href="' . esc_attr( $link ) . '" target="' . esc_attr( $target ) . '" class="bt_bb_link_content" title="' . esc_attr( $text ) . '">';
				$output .= $text_output;
			$output .= '</a>';
		} else {
			$output = '<div class="bt_bb_link_content">';
				$output .= $text_output;
			$output .= '</div>';
		}
		
		
		return $output;
	}	

	function map_shortcode() {

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Link', 'goldenblatt' ), 'description' => esc_html__( 'Text with link', 'goldenblatt' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'text', 'type' => 'textfield', 'heading' => esc_html__( 'Text', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'url', 'type' => 'textfield', 'heading' => esc_html__( 'URL', 'goldenblatt' ), 'description' => esc_html__( 'Enter full or local URL (eg. https://www.bold-themes.com or /pages/about-us) or post slug (eg. about-us)', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'goldenblatt' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'goldenblatt' ) => '_blank',
					)
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'goldenblatt' ), 'value' => $color_scheme_arr, 'preview' => true
				),
				array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Style', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Visible Line', 'goldenblatt' ) 	=> '',
						esc_html__( 'Visible Arrow', 'goldenblatt' ) 	=> 'arrow'
					)
				)
			)
		) );
	} 
}