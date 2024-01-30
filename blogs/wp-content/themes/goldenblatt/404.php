<?php 

get_header(); ?>

		<section class="btErrorPage gutter" style = "background-image: url(<?php echo esc_url( get_parent_theme_file_uri( 'gfx/plug.png' ) ) ;?>)">
			<div class="port">
				
				<?php echo wp_kses_post( boldthemes_get_heading_html( 
					array ( 
						'superheadline' => esc_html__( 'We are sorry, page not found.', 'goldenblatt' ), 
						'headline' => esc_html__( 'Error 404.', 'goldenblatt' ),
						'size' => 'huge'
						) 
					) )
				?>

				<div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>

				<?php
					echo wp_kses_post( boldthemes_get_button_html( 
						array (
							'url' => home_url( '/' ), 
							'text' => esc_html__( 'BACK TO HOME', 'goldenblatt' ), 
							'style' => 'filled',
							'color_scheme' => 'dark-accent-skin',
							'size' => 'medium'
						)
					) );
				?>

			</div>
		</section>

<?php get_footer();