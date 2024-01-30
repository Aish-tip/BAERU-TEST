<?php

class bt_bb_card extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'image'      					=> '',
			'title_position'  				=> '',
			'lazy_load'  					=> 'no',			
			'url'    						=> '',
			'target' 						=> '',			
			'icon'							=> '',
			'icon_position'					=> '',
			'icon_size'						=> '',
			'icon_color_scheme' 			=> '',
			'title'							=> '',
			'html_tag'      				=> 'h3',
			'title_size'					=> '',
			'title_font_weight'  			=> '',
			'title_color_scheme' 			=> '',
			'text'							=> '',
			'color_scheme' 					=> ''
		) ), $atts, $this->shortcode ) );

		$title = html_entity_decode( $title, ENT_QUOTES, 'UTF-8' );
		
		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $title_size != '' ) {
			$class[] = $this->prefix . 'title_size' . '_' . $title_size;
		}

		if ( $title_font_weight != '' ) {
			$class[] = $this->prefix . 'font_weight' . '_' . $title_font_weight;
		}

		if ( $title_position != '' ) {
			$title_position_arr = explode( ' ', $title_position );
			$class[] = $this->prefix . 'title_position' . '_' . $title_position_arr[0];
			if ( count( $title_position_arr ) > 1 ) {
				$class[] = $this->prefix . 'content_position' . '_' . $title_position_arr[1];
			}
		}

		$color_scheme_id = NULL;
		if ( is_numeric ( $color_scheme ) ) {
			$color_scheme_id = $color_scheme;
		} else if ( $color_scheme != '' ) {
			$color_scheme_id = bt_bb_get_color_scheme_id( $color_scheme );
		}
		$color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $color_scheme_id - 1 );
		if ( $color_scheme_colors ) $el_style .= '; --card-primary-color:' . $color_scheme_colors[0] . '; --card-secondary-color:' . $color_scheme_colors[1] . ';';
		if ( $color_scheme != '' ) $class[] = $this->prefix . 'color_scheme_' .  $color_scheme_id;

		$icon_color_scheme_id = NULL;
		if ( is_numeric ( $icon_color_scheme ) ) {
			$icon_color_scheme_id = $icon_color_scheme;
		} else if ( $icon_color_scheme != '' ) {
			$icon_color_scheme_id = bt_bb_get_color_scheme_id( $icon_color_scheme );
		}
		$icon_color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $icon_color_scheme_id - 1 );
		if ( $icon_color_scheme_colors ) $el_style .= '; --card-icon-primary-color:' . $icon_color_scheme_colors[0] . '; --card-icon-secondary-color:' . $icon_color_scheme_colors[1] . ';';
		if ( $icon_color_scheme != '' ) $class[] = $this->prefix . 'icon_color_scheme_' .  $icon_color_scheme_id;

		$title_color_scheme_id = NULL;
		if ( is_numeric ( $title_color_scheme ) ) {
			$title_color_scheme_id = $title_color_scheme;
		} else if ( $title_color_scheme != '' ) {
			$title_color_scheme_id = bt_bb_get_color_scheme_id( $title_color_scheme );
		}
		$title_color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $title_color_scheme_id - 1 );
		if ( $title_color_scheme_colors ) $el_style .= '; --card-title-primary-color:' . $title_color_scheme_colors[0] . '; --card-title-secondary-color:' . $title_color_scheme_colors[1] . ';';
		if ( $title_color_scheme != '' ) $class[] = $this->prefix . 'title_color_scheme_' .  $title_color_scheme_id;

		/*if ( $title_color_scheme != '' ) {
			$class[] = $this->prefix . 'title_color_scheme' . '_' . bt_bb_get_color_scheme_id( $title_color_scheme );
		}*/

		if ( $icon_position != '' ) {
			$class[] = $this->prefix . 'icon_position' . '_' . $icon_position;
		}

		if ( $icon_size != '' ) {
			$class[] = $this->prefix . 'icon_size' . '_' . $icon_size;
		}

		if ( $image == '' ) {
			$class[] = 'btNoImage';
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );		
		$class_attr = implode( ' ', $class );
		
		if ( $el_class != '' ) {
			$class_attr = $class_attr . ' ' . $el_class;
		}
	
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		$icon_html = bt_bb_icon::get_html( $icon, '' );


		$content = do_shortcode( $content );


		$output = '';

		$link = bt_bb_get_permalink_by_slug( $url );

		// IMAGE
		if ( ( $image != '' ) && ( $url != '') ) {
			$output .=  '<div class="' . esc_attr( $this->shortcode . '_image') . '"><a href="' . esc_url( $link ) . '"  target="' . esc_attr( $target ) . '">' . do_shortcode( '[bt_bb_image image="' . esc_attr( $image ) . '" 
				 caption="' . esc_attr( $title ) . '" lazy_load="' . esc_attr( $lazy_load ) . '" ignore_fe_editor="true"]' ) . '</a></div>';
		} else {
			$output .=  '<div class="' . esc_attr( $this->shortcode . '_image') . '">' . do_shortcode( '[bt_bb_image image="' . esc_attr( $image ) . '" 
				 caption="' . esc_attr( $title ) . '" lazy_load="' . esc_attr( $lazy_load ) . '" ignore_fe_editor="true"]' ) . '</div>';
		}
		
		// CONTENT
		$output .= '<div class="' . esc_attr( $this->shortcode . '_content' ) . '">';
			
			// ICON & TEXT
			$output .= '<div class="' . esc_attr( $this->shortcode . '_icon_box' ) . '">';
				if ( $icon != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_icon' ) . '">' . $icon_html . '</div>';
				
				if ( $title_position != '' && $title != '' ) {
					$output .= '<'. $html_tag .' class="' . esc_attr( $this->shortcode . '_title' ) . '">';

						if ( $url != '') {
							$output .= '<a href="' . esc_url( $link ) . '"  target="' . esc_attr( $target ) . '">' . wp_kses_post( $title ) . '</a>';
						} else {
							$output .= wp_kses_post( $title );
						}

					$output .= '</' . $html_tag . '>';		
				}

			$output .= '</div>';
			
			// TEXT BOX
			if ( ( $text != '' ) || ( $content != '' ) || ( $title_position == '' && $title != '' ) )  {

				$output .= '<div class="' . esc_attr( $this->shortcode . '_text_box' ) . '">';
					if ( $title_position == '' && $title != '' ) $output .= '<'. $html_tag .' class="' . esc_attr( $this->shortcode . '_title' ) . '">';
							if ( $url != '' ) {
								$output .= '<a href="' . esc_url( $link ) . '"  target="' . esc_attr( $target ) . '">' . wp_kses_post( $title ) . '</a>';
							} else {
								$output .= '<span>' . wp_kses_post( $title ) . '</span>';
							}

					$output .= '</' . $html_tag . '>';

					if ( $text != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_text' ) . '">' . wp_kses_post( $text ) . '</div>';
					if ( $content != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_content_inner' ) . '">' . ( $content ) . '</div>';
				$output .= '</div>';
			}
		
		$output .= '</div>';


		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . ( $output ) . '</div>';

		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();
		
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Card', 'goldenblatt' ), 'description' => esc_html__( 'Card with image and text', 'goldenblatt' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_button' => true, 'bt_bb_icon' => true, 'bt_bb_separator' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'image', 'type' => 'attach_image', 'preview' => true, 'group' => esc_html__( 'Image', 'goldenblatt' ), 'heading' => esc_html__( 'Image', 'goldenblatt' ) 
				),
				array( 'param_name' => 'title_position', 'group' => esc_html__( 'Text', 'goldenblatt' ), 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Title position', 'goldenblatt' ), 
					'value' => array(
						esc_html__( 'Top', 'goldenblatt' ) 			=> 'top',
						esc_html__( 'Below', 'goldenblatt' ) 		=> ''
					)
				),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'yes', 'group' => esc_html__( 'Image', 'goldenblatt' ), 'heading' => esc_html__( 'Lazy load this image', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'No', 'goldenblatt' ) 			=> 'no',
						esc_html__( 'Yes', 'goldenblatt' ) 			=> 'yes'
					)
				),
				array( 'param_name' => 'url', 'group' => esc_html__( 'URL', 'goldenblatt' ), 'type' => 'textfield', 'heading' => esc_html__( 'URL', 'goldenblatt' ) ),
				array( 'param_name' => 'target', 'group' => esc_html__( 'URL', 'goldenblatt' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'goldenblatt' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'goldenblatt' ) => '_blank',
					)
				),
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'goldenblatt' ), 'group' => esc_html__( 'Icon', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'icon_position', 'group' => esc_html__( 'Icon', 'goldenblatt' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Icon position', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Left', 'goldenblatt' ) 		=> '',
						esc_html__( 'Right', 'goldenblatt' ) 		=> 'right'
					)
				),
				array( 'param_name' => 'icon_size', 'group' => esc_html__( 'Icon', 'goldenblatt' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Icon size', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Small', 'goldenblatt' ) 		=> 'small',
						esc_html__( 'Normal', 'goldenblatt' ) 		=> 'normal',
						esc_html__( 'Large', 'goldenblatt' ) 		=> ''
					)
				),
				array( 'param_name' => 'icon_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon color scheme', 'goldenblatt' ), 'value' => $color_scheme_arr, 'group' => esc_html__( 'Icon', 'goldenblatt' ) ),
				array( 'param_name' => 'title', 'type' => 'textfield', 'group' => esc_html__( 'Text', 'goldenblatt' ), 'preview' => true, 'heading' => esc_html__( 'Title', 'goldenblatt' ) 
				),
				array( 'param_name' => 'text', 'type' => 'textarea', 'group' => esc_html__( 'Text', 'goldenblatt' ), 'heading' => esc_html__( 'Text', 'goldenblatt' ) ),
				array( 'param_name' => 'html_tag', 'type' => 'dropdown', 'group' => esc_html__( 'Text', 'goldenblatt' ), 'default' => 'h3', 'heading' => esc_html__( 'HTML tag', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'h1', 'goldenblatt' ) 			=> 'h1',
						esc_html__( 'h2', 'goldenblatt' )	 		=> 'h2',
						esc_html__( 'h3', 'goldenblatt' ) 			=> 'h3',
						esc_html__( 'h4', 'goldenblatt' ) 			=> 'h4',
						esc_html__( 'h5', 'goldenblatt' ) 			=> 'h5',
						esc_html__( 'h6', 'goldenblatt' ) 			=> 'h6'
				) ),
				array( 'param_name' => 'title_size', 'default' => '', 'group' => esc_html__( 'Text', 'goldenblatt' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Title size', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Small', 'goldenblatt' ) 		=> 'small',
						esc_html__( 'Normal', 'goldenblatt' ) 		=> '',
						esc_html__( 'Large', 'goldenblatt' ) 		=> 'large'
					)
				),
				array( 'param_name' => 'title_font_weight', 'type' => 'dropdown', 'heading' => esc_html__( 'Title font weight', 'goldenblatt' ), 'group' => esc_html__( 'Text', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Default', 'goldenblatt' ) 		=> '',
						esc_html__( 'Thin', 'goldenblatt' ) 		=> 'thin',
						esc_html__( 'Lighter', 'goldenblatt' ) 		=> 'lighter',
						esc_html__( 'Light', 'goldenblatt' ) 		=> 'light',
						esc_html__( 'Normal', 'goldenblatt' ) 		=> 'normal',
						esc_html__( 'Medium', 'goldenblatt' ) 		=> 'medium',
						esc_html__( 'Semi bold', 'goldenblatt' ) 	=> 'semi-bold',
						esc_html__( 'Bold', 'goldenblatt' ) 		=> 'bold',
						esc_html__( 'Bolder', 'goldenblatt' ) 		=> 'bolder',
						esc_html__( 'Black', 'goldenblatt' ) 		=> 'black'
					)
				),
				array( 'param_name' => 'title_color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Title color scheme', 'goldenblatt' ), 'value' => $color_scheme_arr, 'preview' => true, 'group' => esc_html__( 'Text', 'goldenblatt' ) ),
				array( 'param_name' => 'color_scheme', 'group' => esc_html__( 'Text', 'goldenblatt' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Background color scheme', 'goldenblatt' ), 'value' => $color_scheme_arr, 'preview' => true 
					)
				)
			)
		);
	}
}