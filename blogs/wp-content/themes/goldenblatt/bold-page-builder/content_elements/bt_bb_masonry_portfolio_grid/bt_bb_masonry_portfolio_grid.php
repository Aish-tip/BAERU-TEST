<?php

class bt_bb_masonry_portfolio_grid extends BT_BB_Element {

	function __construct() {
		parent::__construct();
		add_action( 'wp_ajax_bt_bb_get_grid_portfolio', array( __CLASS__, 'bt_bb_get_grid_portfolio_callback' ) );
		add_action( 'wp_ajax_nopriv_bt_bb_get_grid_portfolio', array( __CLASS__, 'bt_bb_get_grid_portfolio_callback' ) );
	}

	static function bt_bb_get_grid_portfolio_callback() {
		check_ajax_referer( 'bt-bb-masonry-portfolio-grid-nonce', 'bt-nonce' );
		bt_bb_masonry_portfolio_grid::dump_grid( intval( $_POST['number'] ), sanitize_text_field( $_POST['category'] ), $_POST['show'], $_POST['target'] );
		die();
	}
	
	static function dump_grid( $number, $category, $show, $target ) {

		$show = unserialize( urldecode( $show ) );
		$prefix				= 'bt_bb_';
		$shortcode			= 'bt_bb_grid';
		$class = array();

		if ( $target == '' ) {
			$target = '_self';
		}

		$cat_slug_arr = array();
		if ( $category != '' ) {
			$posts = bt_bb_get_posts( $number, 0, $category, 'portfolio' );	
		} else {
			$posts = bt_bb_get_posts( $number, 0, '', 'portfolio' );
		}

		foreach( $posts as $item ) {
			$post_thumbnail_id = get_post_thumbnail_id( $item['ID'] );
			$img = wp_get_attachment_image_src( $post_thumbnail_id, 'boldthemes_large_rectangle_2x3' );
			$img_src = $img[0];
			$hw = 0;
			if ( $img_src != '' ) {
				$hw = $img[2] / $img[1];
			}
			


				$output .= '<div class="bt_bb_grid_item_post_inner">';
					// IMAGE
					$output = '<div class="bt_bb_grid_item_post_thumbnail"><a href="' . esc_url( $item['permalink'] ) . '" title="' . esc_attr( $item['title'] ) . '"></a></div>';

					// CONENT
					$output .= '<div class="bt_bb_grid_item_post_content">';
						// ICON
						$output .= '<div class="bt_bb_grid_item_post_icon"></div>';
						// TITLE
						$output .= '<h5 class="bt_bb_grid_item_post_title"><a href="' . esc_url($item['permalink']) . '" title="' . esc_attr($item['title']) . '">' . $item['title'] . '</a></h5>';
					$output .= '</div>'; // closed content

				$output .= '</div>'; // closed inner

				// VIEW MORE
				if ( $show['read_more'] ) {
					$output .= '<div class="bt_bb_grid_item_item_read_more">';
						$output .= '<a href="' . esc_url( $item['permalink'] ) . '" target="' . esc_attr( $target ) . '">' . esc_html__( 'View more', 'goldenblatt' ) . '</a>';
					$output .= '</div>';
				}

			$output .= '</div>';


			
				
			echo '<div class="bt_bb_grid_item" data-hw="' . esc_attr( $hw ) . '" data-src="' . esc_attr( $img_src ) . '"><div class="bt_bb_grid_item_box"><div class="bt_bb_grid_item_inner">' . $output . '</div></div>';
		}

		wp_die(); 

	}

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'number'			=> '',
			'columns'			=> '',
			'title_transform'	=> '',
			'title_size'		=> '',
			'gap'				=> '',
			'category'			=> '',
			'category_filter'	=> '',
			'filter_position'	=> '',
			'target'			=> '',
			'show_read_more'	=> '',

		) ), $atts, $this->shortcode ) );

		wp_enqueue_script( 'jquery-masonry' );

		wp_enqueue_script( 
			'bt_bb_portfolio_grid',
			get_template_directory_uri() . '/bold-page-builder/content_elements/bt_bb_masonry_portfolio_grid/bt_bb_portfolio_grid.js',
			array( 'jquery' )
		);
		
		wp_localize_script( 'bt_bb_portfolio_grid', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

		$class = array( $this->shortcode, 'bt_bb_grid_container' );

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

		if ( $title_transform != '' ) {
			$class[] = $this->prefix . 'title_transform' . '_' . $title_transform;
		}

		if ( $filter_position != '' ) {
			$class[] = $this->prefix . 'filter_position' . '_' . $filter_position;
		}

		if ( $title_size != '' ) {
			$class[] = $this->prefix . 'title_size' . '_' . $title_size;
		}
		
		if ( $gap != '' ) {
			$class[] = $this->prefix . 'gap' . '_' . $gap;
		}


		if ( $show_read_more != '' ) {
			$class[] = $this->prefix . 'show_read_more' . '_' . $show_read_more;
		}

		if ( $number > 1000 || $number == '' ) {
			$number = 1000;
		} else if ( $number < 1 ) {
			$number = 1;
		}

		$show = array( 'read_more' => false );
		if ( $show_read_more != '' ) {
			$show['read_more'] = true;
		}

		$output = '';
		
		if ( $category_filter == 'yes' ) {
			$cat_arr = get_terms( 'portfolio_category' );
			$cats = array();
			if ( $category != '' ) {
				$cat_slug_arr = explode( ',', $category );
				foreach ( $cat_arr as $cat ) {
					if ( in_array( $cat->slug, $cat_slug_arr ) ) {
						$cats[] = $cat;
					}
				}
			} else {
				$cats = $cat_arr;
			}

			$output .= '<div class="bt_bb_post_grid_filter">';
				$output .= '<span class="bt_bb_masonry_portfolio_grid_filter_item bt_bb_post_grid_filter_item active" data-category-portfolio="" data-post-type="portfolio">' . esc_html__( 'All', 'goldenblatt' ) . '</span>';
				foreach ( $cats as $cat ) {
					$output .= '<span class="bt_bb_masonry_portfolio_grid_filter_item bt_bb_post_grid_filter_item" data-category-portfolio="' . esc_attr($cat->slug) . '" data-post-type="portfolio">' . esc_html($cat->name) . '</span>';
				}
			$output .= '</div>';
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$output .= '<div class="bt_bb_post_grid_loader"><div></div><div></div><div></div><div></div></div>';

		$output .= '<div class="bt_bb_masonry_portfolio_grid_content bt_bb_grid_hide" data-bt-nonce="' . esc_attr( wp_create_nonce( 'bt-bb-masonry-portfolio-grid-nonce' ) ) . '" data-number-portfolio="' . esc_attr( $number ) . '" data-category-portfolio="' . esc_attr( $category ) . '" data-post-type="portfolio" data-show-portfolio="' . urlencode( serialize( $show ) ) . '"  data-target="' . esc_attr( $target ) . '"><div class="bt_bb_grid_sizer"></div></div>';

		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . ' data-columns="' . esc_attr( $columns ) . '">' . $output . '</div>';
		
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;
	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Masonry Portfolio Grid', 'goldenblatt' ), 'description' => esc_html__( 'Masonry portfolio grid', 'goldenblatt' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(

				array( 'param_name' => 'gap', 'type' => 'dropdown', 'heading' => esc_html__( 'Gap', 'goldenblatt' ), 'preview' => true,
					'value' => array(
						esc_html__('No gap', 'goldenblatt' ) 		=> 'no_gap',
						esc_html__('Small', 'goldenblatt' ) 		=> 'small',
						esc_html__('Normal', 'goldenblatt' )		=> 'normal',
						esc_html__('Large', 'goldenblatt' )			=> 'large'
					)
				),
				array( 'param_name' => 'number', 'type' => 'textfield', 'heading' => esc_html__( 'Number of items', 'goldenblatt' ), 'description' => esc_html__( 'Enter number of items or leave empty to show all (up to 1000)', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'columns', 'type' => 'dropdown', 'heading' => esc_html__( 'Columns', 'goldenblatt' ), 'preview' => true,
					'value' => array(
						esc_html__('1', 'goldenblatt' ) 			=> '1',
						esc_html__('2', 'goldenblatt' ) 			=> '2',
						esc_html__('3', 'goldenblatt' ) 			=> '3',
						esc_html__('4', 'goldenblatt' ) 			=> '4',
						esc_html__('5', 'goldenblatt' ) 			=> '5',
						esc_html__('6', 'goldenblatt' ) 			=> '6'
					)
				),
				array( 'param_name' => 'title_transform', 'type' => 'dropdown', 'heading' => esc_html__( 'Title uppercase', 'goldenblatt' ),
					'value' => array(
						esc_html__('No', 'goldenblatt' ) 			=> '',
						esc_html__('Yes', 'goldenblatt' ) 			=> 'uppercase'
					)
				),
				array( 'param_name' => 'title_size', 'type' => 'dropdown', 'heading' => esc_html__( 'Title size', 'goldenblatt' ),
					'value' => array(
						esc_html__('Small', 'goldenblatt' ) 		=> '',
						esc_html__('Large', 'goldenblatt' ) 		=> 'large'
					)
				),
				array( 'param_name' => 'category', 'type' => 'textfield', 'heading' => esc_html__( 'Category', 'goldenblatt' ), 'description' => esc_html__( 'Enter category slug or leave empty to show all', 'goldenblatt' ), 'preview' => true ),
				array( 'param_name' => 'category_filter', 'type' => 'dropdown', 'heading' => esc_html__( 'Category filter', 'goldenblatt' ),
					'value' => array(
						esc_html__('No', 'goldenblatt' ) 			=> 'no',
						esc_html__('Yes', 'goldenblatt' ) 			=> 'yes'
					)
				),
				array( 'param_name' => 'filter_position', 'type' => 'dropdown', 'heading' => esc_html__( 'Category filter align', 'goldenblatt' ),
					'value' => array(
						esc_html__('Right', 'goldenblatt' ) 		=> '',
						esc_html__('Left', 'goldenblatt' ) 			=> 'left',
						esc_html__('Center', 'goldenblatt' ) 		=> 'center'
					)
				),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'goldenblatt' ),
					'value' => array(
						esc_html__('Self (open in same tab)', 'goldenblatt' ) 	=> '_self',
						esc_html__('Blank (open in new tab)', 'goldenblatt' ) 	=> '_blank',
					)
				),
				array( 'param_name' => 'show_read_more', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'goldenblatt' ) => 'show_share' ), 'heading' => esc_html__( 'Show read more', 'goldenblatt' ), 'preview' => true 
				)
			)
		) );
	}
}