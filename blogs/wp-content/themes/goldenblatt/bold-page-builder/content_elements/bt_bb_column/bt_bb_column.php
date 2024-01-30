<?php

class bt_bb_column extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {

		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'width'    		   			=> '',
			'width_lg'                  => '',
			'width_md'                  => '',
			'width_sm'                  => '',
			'width_xs'                  => '',
			'align'   		   			=> 'left',
			'vertical_align'   			=> 'top',
			'padding'          			=> 'normal',
			'order'                     => '',
			'background_image'      	=> '',
			'lazy_load'  				=> 'no',
			'inner_background_image'    => '',
			'color_scheme'  			=> '',
			'background_color' 			=> '',
			'inner_background_color' 	=> '',
			'opacity'	       			=> '',
			'icon'						=> '',
			'icon_color_scheme'  		=> '',
			'top_border'				=> '',
			'bottom_border'				=> '',
			'left_border'				=> '',
			'right_border'				=> '',
			'border_color'          	=> '',
			'inner_color_scheme'  		=> ''
		) ), $atts, $this->shortcode ) );
		
		
		$el_inner_style = '';
		$el_inner_inner_style = '';
		
		$inner_class = array( $this->shortcode . '_content' );
		$inner_inner_class = array( $this->shortcode . '_content_inner' );

		$class = array( $this->shortcode );
		$data_override_class = array();
		
		$class[] = $this->get_responsive_class( $width, 'xl' );
		
		if ( $width_xs != '' ) {
			$class[] = $this->get_responsive_class( $width_xs, 'xs' );
		}
		if ( $width_sm != '' ) {
			$class[] = $this->get_responsive_class( $width_sm, 'sm' );
		}
		if ( $width_md != '' ) {
			$class[] = $this->get_responsive_class( $width_md, 'md' );
		}
		if ( $width_lg != '' ) {
			$class[] = $this->get_responsive_class( $width_lg, 'lg' );
		}
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}
		
		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $icon != '' ) {
			$class[] = "btWithIcon";
		}

		if ( $border_color != '' ) {
			$class[] = $this->prefix . 'border_color' . '_' . $border_color;
		}

		if ( method_exists( get_parent_class( $this ), 'responsive_data_override_class' ) ) {
			$this->responsive_data_override_class(
				$class, $data_override_class,
				array(
					'prefix' => $this->prefix,
					'param' => 'align',
					'value' => $align
				)
			);
		} else {
			if ( $align != '' ) {
				$class[] = $this->prefix . 'align' . '_' . $align;
			}
		}
		
		if ( $vertical_align != '' ) {
			$inner_class[] = $this->prefix . 'vertical_align' . '_' . $vertical_align;
		}

		$color_scheme_id = NULL;
		if ( is_numeric ( $color_scheme ) ) {
			$color_scheme_id = $color_scheme;
		} else if ( $color_scheme != '' ) {
			$color_scheme_id = bt_bb_get_color_scheme_id( $color_scheme );
		}
		$color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $color_scheme_id - 1 );
		if ( $color_scheme_colors ) $el_style .= '; --column-primary-color:' . $color_scheme_colors[0] . '; --column-secondary-color:' . $color_scheme_colors[1] . ';';
		if ( $color_scheme != '' ) $class[] = $this->prefix . 'color_scheme_' .  $color_scheme_id; $inner_class[] = $this->prefix . 'color_scheme_' . $color_scheme_id;

		$inner_color_scheme_id = NULL;
		if ( is_numeric ( $inner_color_scheme ) ) {
			$inner_color_scheme_id = $inner_color_scheme;
		} else if ( $inner_color_scheme != '' ) {
			$inner_color_scheme_id = bt_bb_get_color_scheme_id( $inner_color_scheme );
		}
		$inner_color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $inner_color_scheme_id - 1 );
		if ( $inner_color_scheme_colors ) $el_style .= '; --column-inner-primary-color:' . $inner_color_scheme_colors[0] . '; --column-inner-secondary-color:' . $inner_color_scheme_colors[1] . ';';
		if ( $inner_color_scheme != '' ) $class[] = $this->prefix . 'inner_color_scheme_' .  $inner_color_scheme_id;
		
		$icon_color_scheme_id = NULL;
		if ( is_numeric ( $icon_color_scheme ) ) {
			$icon_color_scheme_id = $icon_color_scheme;
		} else if ( $icon_color_scheme != '' ) {
			$icon_color_scheme_id = bt_bb_get_color_scheme_id( $icon_color_scheme );
		}
		$icon_color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $icon_color_scheme_id - 1 );
		if ( $icon_color_scheme_colors ) $el_style .= '; --column-icon-primary-color:' . $icon_color_scheme_colors[0] . '; --column-icon-secondary-color:' . $icon_color_scheme_colors[1] . ';';
		if ( $icon_color_scheme != '' ) $class[] = $this->prefix . 'icon_color_scheme_' .  $icon_color_scheme_id;

		if ( method_exists( get_parent_class( $this ), 'responsive_data_override_class' ) ) {
			$this->responsive_data_override_class(
				$class, $data_override_class,
				array(
					'prefix' => $this->prefix,
					'param' => 'padding',
					'value' => $padding
				)
			);
		} else {
			if ( $padding != '' ) {
				$class[] = $this->prefix . 'padding' . '_' . $padding;
			}
		}
		
		if ( method_exists( get_parent_class( $this ), 'responsive_override_class' ) ) {
			$this->responsive_override_class(
				$class,
				array(
					'prefix' => $this->prefix,
					'ignore' => '0',
					'param'  => 'order',
					'value'  => $order
				)
			);
		}

		if ( $top_border != '' ) {
			$class[] = "bt_bb_top_border";
		}

		if ( $bottom_border != '' ) {
			$class[] = "bt_bb_bottom_border";
		}

		if ( $left_border != '' ) {
			$class[] = "bt_bb_left_border";
		}

		if ( $right_border != '' ) {
			$class[] = "bt_bb_right_border";
		}

		if ( $background_color != '' ) {
			if ( strpos( $background_color, '#' ) !== false ) {
				$background_color = bt_bb_column::hex2rgb( $background_color );
				if ( $opacity == '' ) {
					$opacity = 1;
				}
				$el_inner_style .= 'background-color: rgba(' . $background_color[0] . ', ' . $background_color[1] . ', ' . $background_color[2] . ', ' . $opacity . ');';
			}else{
				$el_inner_style .= 'background-color:' . $background_color . ';';
			}
		}
		
		if ( $inner_background_color != '' ) {
			if ( strpos( $inner_background_color, '#' ) !== false ) {
				$inner_background_color = bt_bb_column::hex2rgb( $inner_background_color );
				if ( $opacity == '' ) {
					$opacity = 1;
				}
				$el_inner_inner_style .= 'background-color:rgba(' . $inner_background_color[0] . ', ' . $inner_background_color[1] . ', ' . $inner_background_color[2] . ', ' . $opacity . ');';
			}else{
				$el_inner_inner_style .= 'background-color:' . $inner_background_color . ';';
			}
		}
		
		$background_data_attr = '';
		$inner_background_data_attr = '';
		$inner_inner_background_data_attr = '';
		
		if ( $background_image != '' ) {
			$background_image = wp_get_attachment_image_src( $background_image, 'full' );
			if ( $background_image ) {
				$background_image_url = $background_image[0];
				if ( $lazy_load == 'yes' ) {
					$blank_image_src = BT_BB_Root::$path . 'img/blank.gif';
					$el_inner_style .= 'background-image:url(\'' . $blank_image_src . '\');';
					$inner_background_data_attr .= ' data-background_image_src=\'' . $background_image_url . '\'';
					$inner_class[] = 'btLazyLoadBackground';
				} else {
					$el_inner_style .= 'background-image:url(\'' . $background_image_url . '\');';
				}

				$inner_class[] = 'bt_bb_column_background_image';
			}
		}
		
		if ( $inner_background_image != '' ) {
			$inner_background_image = wp_get_attachment_image_src( $inner_background_image, 'full' );
			if ( $inner_background_image ) {
				$inner_background_image_url = $inner_background_image[0];
				if ( $lazy_load == 'yes' ) {
					$blank_image_src = BT_BB_Root::$path . 'img/blank.gif';
					$el_inner_inner_style .= 'background-image:url(\'' . $blank_image_src . '\');';
					$inner_inner_background_data_attr .= ' data-background_image_src="' . esc_attr( $inner_background_image_url ) . '"';
					$inner_inner_class[] = 'btLazyLoadBackground';
				} else {
					$el_inner_inner_style .= 'background-image:url(\'' . $inner_background_image_url . '\');';
				}
				$inner_inner_class[] = 'bt_bb_column_inner_background_image';
			}
		}
		
		if ( $el_inner_style != '' ) {
			$el_inner_style = ' style="' . esc_attr( $el_inner_style ) . '"';
		}
		
		if ( $el_inner_inner_style != '' ) {
			$el_inner_inner_style = ' style="' . esc_attr( $el_inner_inner_style ) . '"';
		}
		
		$style_attr = '';

		if ( $el_style != '' ) {
			$style_attr = 'style="' . esc_attr( $el_style ) . '"';
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		$icon_html = bt_bb_icon::get_html( $icon, '' );

		// COLUMN
		$output = '<div ' . $id_attr . ' class="' . implode( ' ', $class ) . '" ' . $style_attr . $background_data_attr . ' data-width="' . esc_attr( $this->get_width2( $width ) ) . '" data-bt-override-class="' . htmlspecialchars( json_encode( $data_override_class, JSON_FORCE_OBJECT ), ENT_QUOTES, 'UTF-8' ) . '">';
			
			// COLUMN CONTENT
			$output .= '<div class="' . esc_attr( implode( ' ', $inner_class ) ) . '"' . $el_inner_style . $inner_background_data_attr . '>';
				// ICON
				if ( $icon != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_icon' ) . '">' . $icon_html . '</div>';

				// COLUMN CONTENT INNER
				$output .= '<div class="' . esc_attr( implode( ' ', $inner_inner_class ) ) . '"' . $el_inner_inner_style . $inner_inner_background_data_attr . '>';
					$output .= do_shortcode( $content );
				$output .= '</div>';
			$output .= '</div>';
		$output .= '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}
	
	function get_responsive_class( $width, $size ) {
		
		$width = $this->get_width1( $width );

		$class = 'col-' . $size . '-' . $width;
		
		return $class;
	}
	
	function get_width1( $width ) {
		$array = explode( '/', $width );

		if ( empty( $array ) || $array[0] == 0 || $array[1] == 0 ) {
			$width = 12;
		} else {
			$top = $array[0];
			$bottom = $array[1];
			$width = 12 * $top / $bottom;
			if ( $width < 1 || $width > 12 ) {
				$width = 12;
			}
		}
		
		$width = str_replace( '.', '_', $width );
		
		return $width;
	}
	
	function get_width2( $width ) {
		$array = explode( '/', $width );

		if ( empty( $array ) || $array[0] == 0 || $array[1] == 0 ) {
			$width = 12;
		} else {
			$top = $array[0];
			$bottom = $array[1];
			$width = 12 * $top / $bottom;
			if ( $width < 1 || $width > 12 ) {
				$width = 12;
			}
		}
		
		return $width;
	}

	function map_shortcode() {

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();


		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Column', 'goldenblatt' ), 'description' => esc_html__( 'Column element', 'goldenblatt' ), 'width_param' => 'width', 'container' => 'vertical', 'accept' => array( 'bt_bb_section' => false, 'bt_bb_row' => false, 'bt_bb_column' => false, 'bt_bb_column_inner' => false, 'bt_bb_tab_item' => false, 'bt_bb_accordion_item' => false, 'bt_bb_cost_calculator_item' => false, 'bt_cc_group' => false, 'bt_cc_multiply' => false, 'bt_cc_item' => false, 'bt_bb_content_slider_item' => false, 'bt_bb_google_maps_location' => false, '_content' => false ), 'accept_all' => true, 'toggle' => false, 'responsive_override' => true,
			'params' => array(
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Align', 'goldenblatt' ), 'preview' => true, 'responsive_override' => true,
					'value' => array(
						esc_html__( 'Left', 'goldenblatt' ) => 'left',
						esc_html__( 'Right', 'goldenblatt' ) => 'right',
						esc_html__( 'Center', 'goldenblatt' ) => 'center'
					)
				),
				array( 'param_name' => 'vertical_align', 'type' => 'dropdown', 'heading' => esc_html__( 'Vertical align', 'goldenblatt' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Top', 'goldenblatt' )     => 'top',
						esc_html__( 'Middle', 'goldenblatt' )  => 'middle',
						esc_html__( 'Bottom', 'goldenblatt' )  => 'bottom'
					)
				),
				array( 'param_name' => 'padding', 'type' => 'dropdown', 'heading' => esc_html__( 'Padding', 'goldenblatt' ), 'preview' => true,
					 'responsive_override' => true, 'value' => array(
						esc_html__( 'Normal', 'goldenblatt' ) 		=> 'normal',
						esc_html__( 'Double', 'goldenblatt' ) 		=> 'double',
						esc_html__( 'Text Indent', 'goldenblatt' ) 	=> 'text_indent',
						esc_html__( '0px', 'goldenblatt' ) 			=> '0',
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
						esc_html__( '60px', 'goldenblatt' ) 		=> '60',
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
				array( 'param_name' => 'order', 'type' => 'dropdown', 'heading' => esc_html__( 'Order', 'goldenblatt' ), 'default' => '0', 'responsive_override' => true, 'description' => esc_html__( 'Columns are placed in the visual order according to selected order, lowest values first.', 'goldenblatt' ),
					'value' => array(
						esc_html__( ' -5', 'goldenblatt' ) => '-5',
						esc_html__( ' -4', 'goldenblatt' ) => '-4',
						esc_html__( ' -3', 'goldenblatt' ) => '-3',
						esc_html__( ' -2', 'goldenblatt' ) => '-2',
						esc_html__( ' -1', 'goldenblatt' ) => '-1',
						esc_html__( ' 0 (default)', 'goldenblatt' ) => '0',
						esc_html__( ' 1', 'goldenblatt' ) => '1',
						esc_html__( ' 2', 'goldenblatt' ) => '2',
						esc_html__( ' 3', 'goldenblatt' ) => '3',
						esc_html__( ' 4', 'goldenblatt' ) => '4',
						esc_html__( ' 5', 'goldenblatt' ) => '5'
					)
				),
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'goldenblatt' ), 'group' => esc_html__( 'Icon', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'icon_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon Color scheme', 'goldenblatt' ), 'group' => esc_html__( 'Icon', 'goldenblatt' ), 'value' => $color_scheme_arr ),

				array( 'param_name' => 'top_border', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'goldenblatt' ) => 'top_border' ), 'group' => esc_html__( 'Borders', 'goldenblatt' ), 'heading' => esc_html__( 'Top Border', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'bottom_border', 'type' => 'checkbox', 'group' => esc_html__( 'Borders', 'goldenblatt' ), 'value' => array( esc_html__( 'Yes', 'goldenblatt' ) => 'bottom_border' ), 'heading' => esc_html__( 'Bottom Border', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'left_border', 'type' => 'checkbox', 'group' => esc_html__( 'Borders', 'goldenblatt' ), 'value' => array( esc_html__( 'Yes', 'goldenblatt' ) => 'left_border' ), 'heading' => esc_html__( 'Left Border', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'right_border', 'type' => 'checkbox', 'group' => esc_html__( 'Borders', 'goldenblatt' ), 'value' => array( esc_html__( 'Yes', 'goldenblatt' ) => 'right_border' ), 'heading' => esc_html__( 'Right Border', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'border_color', 'type' => 'dropdown', 'heading' => esc_html__( 'Border color', 'goldenblatt' ), 'group' => esc_html__( 'Borders', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Light', 'goldenblatt' ) 		=> '',
						esc_html__( 'Dark', 'goldenblatt' ) 		=> 'dark',
						esc_html__( 'Accent', 'goldenblatt' ) 		=> 'accent'
					)
				),
				
				array( 'param_name' => 'background_image', 'type' => 'attach_image',  'preview' => true, 'heading' => esc_html__( 'Background image', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ) ),
				array( 'param_name' => 'inner_background_image', 'type' => 'attach_image',  'preview' => true, 'heading' => esc_html__( 'Inner background image', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ) ),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'yes', 'heading' => esc_html__( 'Lazy load background image', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'No', 'goldenblatt' ) => 'no',
						esc_html__( 'Yes', 'goldenblatt' ) => 'yes'
					) ),
				array( 'param_name' => 'background_color', 'preview' => true, 'type' => 'colorpicker', 'heading' => esc_html__( 'Background color', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ) ),
				array( 'param_name' => 'inner_background_color', 'preview' => true, 'type' => 'colorpicker', 'heading' => esc_html__( 'Inner background color', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ) ),
				array( 'param_name' => 'opacity', 'type' => 'textfield', 'heading' => esc_html__( 'Background color opacity (e.g. 0.4)', 'goldenblatt' ), 'group' => esc_html__( 'Design', 'goldenblatt' ) ),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'goldenblatt' ), 'preview' => true, 'group' => esc_html__( 'Design', 'goldenblatt' ), 'weight' => 0, 'value' => $color_scheme_arr ),
				array( 'param_name' => 'inner_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Inner Color scheme', 'goldenblatt' ), 'preview' => true, 'group' => esc_html__( 'Design', 'goldenblatt' ), 'weight' => 1, 'value' => $color_scheme_arr )
			)
		) );
	}

	static function hex2rgb( $hex ) {
		$hex = str_replace( '#', '', $hex );
		if ( strlen( $hex ) == 3 ) {
			$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
			$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
			$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
		} else {
			$r = hexdec( substr( $hex, 0, 2 ) );
			$g = hexdec( substr( $hex, 2, 2 ) );
			$b = hexdec( substr( $hex, 4, 2 ) );
		}
		$rgb = array( $r, $g, $b );
		return $rgb;
	}
}