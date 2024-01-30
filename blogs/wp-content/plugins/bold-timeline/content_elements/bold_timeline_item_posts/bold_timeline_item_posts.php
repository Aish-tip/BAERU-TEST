<?php
// [bold_timeline_item_posts]

class bold_timeline_item_posts {
	static function init() {
		add_shortcode( 'bold_timeline_item_posts', array( __CLASS__, 'handle_shortcode' ) );
	}

	static function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( array(
            'number'    			=> '',
			'category_filter' 		=> '',
			'author_filter' 		=> '',
			'taxonomy_filter' 		=> '',
			'post_format_filter' 	=> '',
			'date_filter'			=> '',
			'order_by' 				=> '',
			'show_date' 			=> 'supertitle',
			'show_categories' 		=> 'subtitle',
			'show_comments' 		=> 'no',
			'show_excerpt' 			=> 'yes',
			'show_featured_image' 	=> 'yes',
			'el_id'					=> '',
			'el_class'				=> '',
			'el_style'				=> '',
			'responsive'            => ''
		), $atts, 'bold_timeline_item_posts' ) );

		require( dirname(__FILE__) . '/../../assets/views/bold_timeline_item_posts_view.php' );
		return $output;
	}
}

bold_timeline_item_posts::init();

// Map shortcode

function bold_timeline_item_posts() {

	Bold_Timeline::$builder->map( 'bold_timeline_item_posts', 
		array( 
			'name' => esc_html__( 'Timeline Item Posts', 'bold-timeline' ), 'description' => esc_html__( 'Timeline Item Posts filter element', 'bold-timeline' ), 'icon' => 'bold_timeline_item_posts_icon', 'container' => 'vertical', 'toggle' => true, 'show_settings_on_create' => true, 'params' => array(
				array( 'param_name' => 'category_filter', 'type' => 'textfield', 'heading' => esc_html__( 'Category filter', 'bold-timeline' ), 'description' => esc_html__( 'Type Post Category slugs separated by comma (eg sport, business)', 'bold-timeline' ), 'group' => esc_html__( 'Posts', 'bold-timeline' ), 'weight' => 40, 'preview' => true, 'preview_strong' => true ),		
				array( 'param_name' => 'post_format_filter', 'type' => 'textfield', 'heading' => esc_html__( 'Post format filter', 'bold-timeline' ), 'description' => esc_html__( 'Type Post Filter Format separated by comma (eg post-format-video, post-format-audio)', 'bold-timeline' ), 'group' => esc_html__( 'Posts', 'bold-timeline' ), 'weight' => 41, 'preview' => true, 'preview_strong' => true ),		
				array( 'param_name' => 'taxonomy_filter', 'type' => 'textfield', 'heading' => esc_html__( 'Taxonomy filter', 'bold-timeline' ), 'description' => esc_html__( 'Type /taxonomy:slug1,slug2/ separated by semicolon (eg tag:highlight,michael-jackson;custom-taxonomy:slug1,slug2)', 'bold-timeline' ), 'group' => esc_html__( 'Posts', 'bold-timeline' ), 'weight' => 42, 'preview' => true, 'preview_strong' => true ),		
				array( 'param_name' => 'author_filter', 'type' => 'textfield', 'heading' => esc_html__( 'Post author username', 'bold-timeline' ), 'description' => esc_html__( 'Type Author username (eg: martin)', 'bold-timeline' ), 'group' => esc_html__( 'Posts', 'bold-timeline' ), 'weight' => 43, 'preview' => true, 'preview_strong' => true ),		
				array( 'param_name' => 'date_filter', 'type' => 'textfield', 'heading' => esc_html__( 'Date filter', 'bold-timeline' ), 'description' => esc_html__( 'Type strtotime()-compatible string (eg 7 days ago, 1 month ago)', 'bold-timeline' ), 'group' => esc_html__( 'Posts', 'bold-timeline' ), 'weight' => 44, 'preview' => true ),
				array( 'param_name' => 'order_by', 'default' => 'default', 'type' => 'dropdown', 'group' => 'Posts', 'heading' => esc_html__( 'Order by', 'bold-timeline' ), 'weight' => 48, 
					'value' => array(
						 esc_html__( 'Default', 'bold-timeline' ) => 'default',
						 esc_html__( 'Post date ascending', 'bold-timeline' ) => 'publish_date-asc',
						 esc_html__( 'Comment count descending', 'bold-timeline' ) => 'comment_count-decs',
						 esc_html__( 'Post views descending', 'bold-timeline' ) => 'post_views-decs',
						 esc_html__( 'Random', 'bold-timeline' ) => 'rand'
					)
				),
				array( 'param_name' => 'number', 'type' => 'textfield', 'heading' => esc_html__( 'Number of items', 'bold-timeline' ), 'description' => esc_html__( 'Enter number of items or leave empty to show all (up to 1000)', 'bold-timeline' ), 'group' => esc_html__( 'Design', 'bold-timeline' ), 'preview' => true ),
				array( 'param_name' => 'show_date', 'type' => 'dropdown', 'default' => 'supertitle', 'heading' => esc_html__( 'Show date', 'bold-timeline' ), 'group' => esc_html__( 'Design', 'bold-timeline' ),
						'value' => array(
										esc_html__( 'No', 'bold-timeline' ) => 'no',
										esc_html__( 'Supertitle', 'bold-timeline' ) => 'supertitle',
										esc_html__( 'Subtitle', 'bold-timeline' ) => 'subtitle'
						)
				),
				array( 'param_name' => 'show_categories', 'type' => 'dropdown', 'default' => 'subtitle', 'heading' => esc_html__( 'Show categories', 'bold-timeline' ), 'group' => esc_html__( 'Design', 'bold-timeline' ),
						'value' => array(
										esc_html__( 'No', 'bold-timeline' ) => 'no',
										esc_html__( 'Supertitle', 'bold-timeline' ) => 'supertitle',
										esc_html__( 'Subtitle', 'bold-timeline' ) => 'subtitle'
						)
				),
				array( 'param_name' => 'show_comments', 'type' => 'dropdown', 'default' => 'no', 'heading' => esc_html__( 'Show comments', 'bold-timeline' ), 'group' => esc_html__( 'Design', 'bold-timeline' ),
						'value' => array(
							esc_html__( 'No', 'bold-timeline' ) => 'no',
							esc_html__( 'Supertitle', 'bold-timeline' ) => 'supertitle',
							esc_html__( 'Subtitle', 'bold-timeline' ) => 'subtitle'
						)
				),
				array( 'param_name' => 'show_excerpt', 'type' => 'dropdown', 'default' => 'yes', 'heading' => esc_html__( 'Show excerpt', 'bold-timeline' ), 'group' => esc_html__( 'Design', 'bold-timeline' ),
						'value' => array(
							esc_html__( 'No', 'bold-timeline' ) => 'no',
							esc_html__( 'Yes', 'bold-timeline' ) => 'yes'
						)
				),
				array( 'param_name' => 'show_featured_image', 'type' => 'dropdown', 'default' => 'yes', 'heading' => esc_html__( 'Show featured image', 'bold-timeline' ), 'group' => esc_html__( 'Design', 'bold-timeline' ),
						'value' => array(
							esc_html__( 'No', 'bold-timeline' ) => 'no',
							esc_html__( 'Yes', 'bold-timeline' ) => 'yes'
						)
				),
				array( 'param_name' => 'el_id', 'type' => 'textfield', 'heading' => esc_html__( 'Custom Id Attribute', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ), 'preview' => true ),
				array( 'param_name' => 'el_class', 'type' => 'textfield', 'heading' => esc_html__( 'Extra Class Name(s)', 'bold-timeline' ), 'preview' => true, 'group' => esc_html__( 'Custom', 'bold-timeline' ), 'preview' => true ),
				array( 'param_name' => 'el_style', 'type' => 'textfield', 'heading' => esc_html__( 'Inline Style', 'bold-timeline' ), 'group' => esc_html__( 'Custom', 'bold-timeline' ), 'preview' => true ),		
				array( 'param_name' => 'responsive', 'type' => 'checkbox_group', 'heading' => esc_html__( 'Hide element on screens', 'bold-timeline' ), 'group' => esc_html__( 'Responsive', 'bold-timeline' ), 'preview' => true,
						'value' => array(
							esc_html__( '≤480px', 'bold-timeline' ) 		=> 'hidden_xs',
							esc_html__( '480-767px', 'bold-timeline' ) 		=> 'hidden_ms',
							esc_html__( '768-991px', 'bold-timeline' ) 		=> 'hidden_sm',
							esc_html__( '992-1200px', 'bold-timeline' ) 	=> 'hidden_md',
							esc_html__( '≥1200px', 'bold-timeline' ) 		=> 'hidden_lg',
						)
				),
			) 
		)  
	);
}
add_action( 'plugins_loaded', 'bold_timeline_item_posts' );

/* Helpers */

// get args for query
if ( ! function_exists( 'bold_timeline_get_args_for_query_posts' ) ) {
    function bold_timeline_get_args_for_query_posts( $atts ){ 
        $args = array();
        
        /* Number of posts */
        $posts_per_item = $atts['number'];
        if ( $atts['number'] > 1000 || $atts['number'] == '' ) {
                $posts_per_item = 1000;
        } else if ( $atts['number'] < 1 ) {
                $posts_per_item = 1;
        }        
        $args['posts_per_item'] = $posts_per_item;

        /* Categories */		
        if ( isset( $atts['category_filter'] ) && $atts['category_filter'] != ''  ) {
                $args["category_name"] = $atts['category_filter'];
        } else  {
                $args["category_name"] = '';
        }

        /* Author */		
        if ( isset( $atts['author_filter'] ) && $atts['author_filter'] != ''  ) {
                $args["author_name"] = $atts['author_filter'];
        } else  {
                $args["author_name"] = '';
        }

        /* Taxonomies */		
        if ( isset( $atts['taxonomy_filter'] ) && $atts['taxonomy_filter'] != ''  ) {
                $args["taxonomy_filter"] = $atts['taxonomy_filter'];
        } else  {
                $args["taxonomy_filter"] = '';
        }

        /* Post formats */		
        if ( isset( $atts['post_format_filter'] ) && $atts['post_format_filter'] != ''  ) {
                $args["post_format_filter"] = $atts['post_format_filter'];
        } else  {
                $args["post_format_filter"] = '';
        }

        /* Date */		
        if ( isset( $atts['date_filter'] ) && $atts['date_filter'] != ''  ) {
                $args["date_filter"] = $atts['date_filter'];
        } else  {
                $args["date_filter"] = '';
        }

        /* Order by */
        $args["orderby"] = "date";
        $args["order"] = "DESC";
        if ( isset( $atts['order_by'] ) && $atts['order_by'] != 'default' && $atts['order_by'] != ''  ) {
                $tmp_arr = explode( "-", $atts['order_by'] );
                $args["orderby"] = $tmp_arr[0];
                if ( isset( $tmp_arr[1] ) ) {
                        $args["order"] = strtoupper($tmp_arr[1]);
                }
        }
        
        return $args;
    }
}

// query posts with filters
if ( ! function_exists( 'bold_timeline_query_posts_data' ) ) {
    function bold_timeline_query_posts_data( $args ){        
        $query_args = array(
                'orderby' 			=> $args['orderby'],
                'order' 			=> $args['order'],
                'posts_per_page' 		=> $args['posts_per_item']
        );

        if ( $args['date_filter'] != '' ) {
                $query_args['date_query'] = array(
                        array(
                                'column' => 'post_date_gmt',
                                'after' => $args['date_filter'],
                        )
                );
        }
        
        if ( $args['category_name'] == "bt-inherit" ) { 
                // reserved slug (bt-inherit) for category page
                if ( is_category() ) {
                        $cat = get_category( get_query_var( 'cat' ) );
                        $query_args['category_name'] = $cat->slug;
                }
        } else if ( $args['category_name'] != "" ) {
                $query_args['category_name'] = $args['category_name'];
        }
        
        if ( $args['author_name'] != "" ) {
                $query_args['author_name'] = $args['author_name'];
        }
        
        if ( $args['taxonomy_filter'] != "" ) {
                $taxonomy_list = explode( ';', $args['taxonomy_filter'] );                
                foreach ( $taxonomy_list as $single_taxonomy ) {                        
                        $taxonomy_arr = explode( ':', $single_taxonomy );                        
                        $taxonomy = isset($taxonomy_arr[1]) ? $taxonomy_arr[0] : 'tag';
                        $taxonomy_slug = isset($taxonomy_arr[1]) ? $taxonomy_arr[1] : $taxonomy_arr[0];
                        if ( $taxonomy == "tag" ) {
                                $query_args['tag'] = $taxonomy_slug;
                        } else {
                                $query_args['tax_query'][] = array(
                                        array(
                                                'taxonomy' => $taxonomy,
                                                'field'    => 'slug',
                                                'terms'    => explode( ',', $taxonomy_slug )
                                        )
                                );			
                        }
                       
                }                
        }

        if ( $args['post_format_filter'] != "" ) {
                $post_format_arr = explode( ',', $args['post_format_filter'] );
                $query_args['tax_query'][] = array(
                        array(
                                'taxonomy' => 'post_format',
                                'field'    => 'slug',
                                'terms'    => $post_format_arr
                        )
                );			
        }
       
        $query = new WP_Query( $query_args );
        
        if( $query->have_posts() ) {
            $posts_data = array();
            while( $query->have_posts() ): $query->the_post();
                    $posts_data[] = $query->post;
            endwhile;
	    wp_reset_postdata();
            return $posts_data;
        }else{
            return null;
        }
    }
}

//post data
if ( ! function_exists( 'bold_timeline_post_data' ) ) {
    function bold_timeline_post_data( $post ){
            $output = array();
            
            if ( !$post ){
                return $output;
            }
            
            //title output
            $output['title'] = $post->post_title;

            //date output
            $post_date_format = get_option( 'date_format' ) . ' ' . get_option( 'time_format' );
            $post_date_output = get_the_date( $post_date_format, $post->ID );
            $output['date'] = $post_date_output;

            //categories output                        
            $post_cats_output = '';
            $post_categories = wp_get_post_categories( $post->ID ); 
            $cats = array();
            foreach($post_categories as $c){
                 array_push( $cats, get_category( $c )->slug );                            
            }            
            if ( count($cats) > 0  ){
                $post_cats_output = implode(', ',$cats);
            }
            $output['cats'] = $post_cats_output;

            //comments output
            $post_comments_output = '';
            $comments_number = get_comments_number($post->ID);
            if ( $comments_number > 0 ){
                $post_comments_output = $comments_number == 1 ? esc_html__( 'One comment', 'bold-timeline' ) : number_format_i18n( $comments_number ) . ' ' .  esc_html__( 'comments', 'bold-timeline' );
            } 
            $output['comments'] = $post_comments_output;

            //excerpt output
            $output['excerpt'] = $post->post_excerpt;

            // featured image output
            $featured_img_id                = get_post_thumbnail_id($post->ID); 
            $post_featured_image_output     = $featured_img_id != '' ? $featured_img_id : '';
            $output['featured_image'] = $post_featured_image_output;

            //permalink output
            $output['permalink'] = get_permalink($post->ID);

            return $output;
    }
}


/* post date output */
if ( ! function_exists( 'bold_timeline_date_output' ) ) {
    function bold_timeline_date_output( $item, $permalink = '', $class = '', $label = '', $separator = '' ){
        if ( $item == '' ){
            return '';
        } 
        $class      = $class == "" ? '' : " class=".$class."";
        $label      = $label == '' ? '' : $label;
        $separator  = $separator == '' ? Bold_Timeline::$separator : $separator;

        $output = "<span".esc_attr($class).">" . $label;
        $output .= "<a href='". esc_url( $permalink )."'>" . $item . "</a>";
        $output .= $separator . "</span>";

        return $output;
    }
}

/* post categories output */
if ( ! function_exists( 'bold_timeline_categories_output' ) ) {
    function bold_timeline_categories_output( $items, $permalink = '', $class = '', $label = '', $separator = '' ){
        if ( $items == '' ){
            return '';
        }    
        $class      = $class == "" ? '' : " class=".$class."";
        $label      = $label == '' ? '' : $label;
        $separator  = $separator == '' ? Bold_Timeline::$separator : $separator;

        $output = "<span".esc_attr($class).">" . $label;
            $cats = explode(",", $items);
            $lastCat = end($cats);
            foreach ( $cats as $cat ){
                $catObj  = get_category_by_slug($cat); 
                if ( $catObj ) {
                    $catObjLink  = isset($catObj->term_id) ? get_category_link( $catObj->term_id ) : '#';            
                    $output .= "<a href='". esc_url( $catObjLink ) ."' rel='category tag'>" . $catObj->name . "</a>";
                    if ( $cat != $lastCat ){
                        $output .= "";
                    }
                }
            }  
        $output .= $separator . "</span>";
        
        return $output;
    }
}

/* post comments output */
if ( ! function_exists( 'bold_timeline_comments_output' ) ) {
    function bold_timeline_comments_output( $item, $permalink = '', $class = '', $label = '', $separator = '' ){
        if ( $item == '' ){
            return '';
        }    
        $class      = $class == "" ? '' : " class=".$class."";
        $label      = $label == '' ? '' : $label;
        $separator  = $separator == '' ? Bold_Timeline::$separator : $separator;

        $output = "<span".esc_attr($class).">" . $label;
           $output .= "<a href='". esc_url( $permalink )."#comments'>" . $item . "</a>";
        $output .= $separator . "</span>";

        return $output;
    }
}