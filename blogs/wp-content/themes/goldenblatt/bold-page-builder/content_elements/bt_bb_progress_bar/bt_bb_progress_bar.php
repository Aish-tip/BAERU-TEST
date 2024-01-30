<?php

class bt_bb_progress_bar extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'percentage'		=> '',
			'left_text'			=> '',
			'right_text'		=> '',
			'color_scheme'		=> ''
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme' . '_' . $color_scheme;
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}		
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		$content = do_shortcode( $content );

		$output = '';

		$output .= '<div' . $id_attr . ' class="' . implode( ' ', $class ) . ' bt_bb_style_filled"' . $style_attr . '>';
			
			// TEXT ABOVE
			$output .= '<div class="' . esc_attr( $this->shortcode ) . '_text_above">';
				if ( $left_text != '' ) $output .= '<div class="' . esc_attr( $this->shortcode ) . '_left_text"><span>' . $left_text . '</span></div>';
				if ( $right_text != '' ) $output .= '<div class="' . esc_attr( $this->shortcode ) . '_right_text"><span>' . $right_text . '</span></div>';
			$output .= '</div>';

			$output .= '<div class="' . esc_attr( $this->shortcode ) . '_bg"><div class="bt_bb_progress_bar_inner animate" style="width:' . $percentage . '%"></div>';

			
				
			$output .= '</div>';

		$output .= '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {
		
		$color_scheme_arr = bt_bb_get_color_scheme_param_array();
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Progress Bar', 'goldenblatt' ), 'description' => esc_html__( 'Progress bar', 'goldenblatt' ), 'container' => 'vertical', 'accept' => false, 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'percentage', 'type' => 'textfield', 'heading' => esc_html__( 'Percentage', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'left_text', 'type' => 'textfield', 'heading' => esc_html__( 'Left text (above)', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'right_text', 'type' => 'textfield', 'heading' => esc_html__( 'Right text (above)', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'goldenblatt' ), 'preview' => true, 'group' => esc_html__( 'Design', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Dark color', 'goldenblatt' ) 		=> '',
						esc_html__( 'Light color', 'goldenblatt' ) 		=> 'light',
						esc_html__( 'Accent color', 'goldenblatt' ) 	=> 'accent',
						esc_html__( 'Alternate color', 'goldenblatt' ) 	=> 'alternate'
					)
				)
			)
		) );
	}
}