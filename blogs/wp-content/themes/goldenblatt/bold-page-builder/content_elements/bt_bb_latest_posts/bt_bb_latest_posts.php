<?php

class bt_bb_latest_posts extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'rows'            	=> '',
			'columns'         	=> '',
			'gap'             	=> '',
			'category'        	=> '',
			'target'          	=> '',
			'lazy_load'  		=> 'no'
		) ), $atts, $this->shortcode ) );

		$inner_class = array( $this->shortcode . '_item' );
		$class = array( $this->shortcode );
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}	
		
		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}
		
		if ( $columns != '' ) {
			$class[] = $this->prefix . 'columns' . '_' . $columns;
		}
		
		if ( $gap != '' ) {
			$class[] = $this->prefix . 'gap' . '_' . $gap;
		}

		$date_design_format         = 'j M';
		$date_design_format_day     = 'd';
		$date_design_format_month   = 'M';

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$number = $rows * $columns;
		$posts = bt_bb_get_posts( $number, 0, $category );
		
		$output = '';

		foreach( $posts as $post_item ) {

			$output .= '<div class="' . esc_attr( implode( ' ', $inner_class ) ) . '">';
				$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_inner">';
					$post_thumbnail_id = get_post_thumbnail_id( $post_item['ID'] );

					if ( $post_thumbnail_id != '' ) {
						$img = wp_get_attachment_image_src( $post_thumbnail_id, $size = 'medium' );
						if ( $lazy_load == 'yes' ) {
							$img_src = BT_BB_Root::$path . 'img/blank.gif';
							$img_class = 'btLazyLoadImage';
							$data_img = ' data-image_src="' . esc_attr( $img[0] ) . '"';
						} else {
							$img_src = $img[0];
							$img_class = '';
							$data_img = '';
						}
					} else {
						$img_src = '';
					}
					
					// IMAGE
					$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_image">';
						$output .= '<a href="' . esc_url( $post_item['permalink'] ) . '" target="' . esc_attr( $target ) . '">';
							if ( $img_src != '' ) $output .= '<img src="' . esc_url_raw( $img_src ) . '" alt="' . esc_attr( $post_item['title'] ) . '" title="' . esc_attr( $post_item['title'] ) . '" class="' . esc_attr( $img_class ) . '" ' . $data_img .  '>';
						$output .= '</a>';
					$output .= '</div>';

					$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_content"><div class="' . esc_attr( $this->shortcode ) . '_item_content_box">';
						// DATE
						$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_date">';
							if ( $date_design_format_day != '' && $date_design_format_month != '' ) {
								$output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_date_day">';
									$output .= get_the_date( $date_design_format_day, $post_item['ID'] );
								$output .= '</span>';

								$output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_date_month">';
									$output .= get_the_date( $date_design_format_month, $post_item['ID'] );
								$output .= '</span>';
							} else {
								$output .= get_the_date( $date_design_format, $post_item['ID'] );
							}
						$output .= '</div>';

						// TITLE
						$output .= '<h5 class="' . esc_attr( $this->shortcode ) . '_item_title">';
							$output .= '<a href="' . esc_url( $post_item['permalink'] ) . '" target="' . esc_attr( $target ) . '">' . $post_item['title'] . '</a>';
						$output .= '</h5>';
					$output .= '</div></div>';

				$output .= '</div>';
				
			$output .= '</div>';
		}

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . $output . '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Latest Posts', 'goldenblatt' ), 'description' => esc_html__( 'List of latest posts', 'goldenblatt' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'rows', 'type' => 'textfield', 'value' => '1', 'heading' => esc_html__( 'Rows', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'columns', 'type' => 'dropdown', 'value' => '3', 'heading' => esc_html__( 'Columns', 'goldenblatt' ), 'preview' => true,
					'value' => array(
						esc_html__( '1', 'goldenblatt' ) 	=> '1',
						esc_html__( '2', 'goldenblatt' ) 	=> '2',
						esc_html__( '3', 'goldenblatt' ) 	=> '3',
						esc_html__( '4', 'goldenblatt' ) 	=> '4',
						esc_html__( '6', 'goldenblatt' ) 	=> '6'
					)
				),
				array( 'param_name' => 'gap', 'type' => 'dropdown', 'default' => 'normal', 'heading' => esc_html__( 'Gap', 'goldenblatt' ), 'preview' => true,
					'value' => array(
						esc_html__( 'No gap', 'goldenblatt' ) 	=> 'no_gap',
						esc_html__( 'Small', 'goldenblatt' ) 	=> 'small',
						esc_html__( 'Normal', 'goldenblatt' ) 	=> 'normal',
						esc_html__( 'Large', 'goldenblatt' ) 	=> 'large'
					)
				),				
				array( 'param_name' => 'category', 'type' => 'textfield', 'heading' => esc_html__( 'Category', 'goldenblatt' ), 'description' => esc_html__( 'Enter category slug or leave empty to show all', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'goldenblatt' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'goldenblatt' ) => '_blank',
					)
				),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'yes', 'heading' => esc_html__( 'Lazy load images', 'goldenblatt' ),
					'value' => array(
						esc_html__( 'No', 'goldenblatt' ) 		=> 'no',
						esc_html__( 'Yes', 'goldenblatt' ) 		=> 'yes'
					)
				)
			)
		) );
	} 
}