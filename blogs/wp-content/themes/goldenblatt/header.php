<!DOCTYPE html>
<html>
	<head>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css?family=Oswald|Playfair+Display" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
		<style>
			::-webkit-scrollbar {
				width: 0;  /* remove scrollbar space */
				background: transparent;  /* optional: just make scrollbar invisible */
			}
			body{
	 font-family: 'Montserrat', sans-serif !important;
}
			.desk{
				display:block
			}
			.mob{
				display:none;
			}
			header.header{
	background-color: transparent;
	position: fixed;
	width:100%;
	z-index:5;
	transition: background-color 1s ease-in-out;
	padding-right: 5%;
	padding-left: 5%;
}
header.scrolled{
	background-color:#ffffff;
	opacity:0.5;
}
header nav a{
	color: rgba(255,255,255,.5) !important;
	transition: color 1s ease-in-out;
}
header nav a.active{
	color: rgba(255, 255, 255,1) !important;
}
header nav a:hover{
	color: rgba(255, 255, 255,0.75) !important;
}
header.scrolled nav a{
	color:#000000 !important;
}
.sticky-container {
    /* background-color: #333; */
    padding: 0px;
    margin: 0px;
    position: fixed;
    right: -119px;
    bottom: 120px;
    width: 200px;
    z-index: 1000;
}
.sticky li {
    list-style-type: none;
    background-color: transparent;
    color: #efefef;
    height: 43px;
    padding: 0px;
    margin: 0px 0px 1px 0px;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    cursor: pointer;
    /* -webkit-filter: grayscale(100%); */
}

.sticky li:hover {
    margin-left: -7px;
}
			.logo{
	width:50%;
}
			@media(max-width:678px){
				.desk{
					display:none;
				}
				.mob{
					display:block;
				}
			}
		</style>
	</head>
	<body>
		<div class="desk">
			<div class="header">
				<header class="header">
					<nav id="navbr" class="navbar navbar-expand-lg navbar-dark">
						<a class="navbar-brand" href="">
							<img class="logo" src="https://gcproductions.in/Baeru/blogs/wp-content/uploads/2023/05/Baeru_Logo-1.png" alt="logo">
						</a>				
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="https://gcproductions.in/Baeru/index.html">HOME <span class="sr-only">(current)</span></a>
								</li> 
								<li class="nav-item">
									<a class="nav-link" href="https://gcproductions.in/Baeru/blogs/our-team">TEAM</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="https://gcproductions.in/Baeru/blogs">BLOGS</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="https://gcproductions.in/Baeru/career.html">CAREER</a>
								</li>
								 <li class="nav-item">
									<a class="nav-link" href="https://gcproductions.in/Baeru/contact.html">CONTACT US</a>
								</li>	
							</ul>					
						</div>
					</nav>
				</header>					
				<script>
					document.addEventListener('scroll', ()=>{
						const header = document.querySelector('header');

						if(window.scrollY > 0){
							header.classList.add('scrolled');
						}
						else{
							header.classList.remove('scrolled');
						}
					})
					const onScrollStop = callback => {
					let isScrolling;
					window.addEventListener(
						'scroll',
						e => {
						clearTimeout(isScrolling);
						isScrolling = setTimeout(() => {
							callback();
						}, 150);
						},
						false
					);
					};
					onScrollStop(() => {
					//   console.log('The user has stopped scrolling');
					const header = document.querySelector('header');
					header.classList.remove('scrolled');

					});					
				</script>
			</div>		
		</div>
		<div class="mob">
			<nav id="navbr_mob" class="navbar navbar-expand-lg navbar-light bg-light" style="position: sticky; width:100%; z-index:5;transition: top 0.3s;padding-right: 5%; padding-left: 5%;">
				<a class="navbar-brand" href="">BAERU COASTAL</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
									<a class="nav-link" href="https://gcproductions.in/Baeru/index.html">HOME <span class="sr-only">(current)</span></a>
								</li> 
								<li class="nav-item">
									<a class="nav-link" href="https://gcproductions.in/Baeru/blogs/our-team">TEAM</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="https://gcproductions.in/Baeru/blogs">BLOGS</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="https://gcproductions.in/Baeru/career.html">CAREER</a>
								</li>
								 <li class="nav-item">
									<a class="nav-link" href="https://gcproductions.in/Baeru/contact.html">CONTACT US</a>
								</li>	
					</ul>
				</div>
					<script>
								$('.navbar-nav>li>a').on('click', function(){
										$('.navbar-collapse').collapse('hide');
									});
					</script>						
			</nav>
		</div>
			
			<div class="sticky-container">
				<ul class="sticky">
					<li><a href="https://www.facebook.com/baeruenvironment" target="_blank">
						<img width="32" height="32" title="" alt="facebook" src="https://gcproductions.in/Baeru/blogs/wp-content/uploads/2023/05/fb.png" />
						<!-- <p>Facebook</p>  -->
						</a>
					  </li>
					  <li><a href="https://www.instagram.com/baeru_environment/" target="_blank">
						<img width="32" height="32" title="" alt="instagram" src="https://gcproductions.in/Baeru/blogs/wp-content/uploads/2023/05/insta.png" />
						<!-- <p>Instagram</p> -->
					</a>
					  </li>
					  <li><a href="https://www.linkedin.com/company/baeru/" target="_blank">
						<img width="32" height="32" title="" alt="linkeden" src="https://gcproductions.in/Baeru/blogs/wp-content/uploads/2023/05/linkden.png" />
						<!-- <p>Linkedin</p> -->
					 </a>
					  </li>
					  <li><a href="https://twitter.com/BaeruCoastClear" target="_blank">
						<img width="35" height="35" title="" alt="twitter" src="https://gcproductions.in/Baeru/blogs/wp-content/uploads/2023/05/twiter.png" />
						<!-- <p>Twitter</p> -->
					</a>
					  </li>
				</ul>
			</div>		
	</body>
</html>

<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php boldthemes_theme_data(); ?>>
<head>

<?php

	boldthemes_set_override();
	boldthemes_header_init();
	boldthemes_header_meta();

	$body_style = '';

	$page_background = boldthemes_get_option( 'page_background' );
	if ( $page_background ) {
		if ( is_numeric( $page_background ) ) {
			$page_background = wp_get_attachment_image_src( $page_background, 'full' );
			$page_background = $page_background[0];
		}
		$body_style = 'background-image:url(' . $page_background . ')';
	}

	$header_extra_class = ''; 

	if ( boldthemes_get_option( 'boxed_menu' ) ) {
		$header_extra_class .= 'gutter ';
	}

	wp_head(); ?>
	
</head>

<body <?php body_class(); ?> <?php if ( $body_style != '' ) echo  ' style="' . esc_attr( $body_style ) .'"'; ?>>
<?php 

echo wp_kses_post( boldthemes_preloader_html() ); ?>

<div class="btPageWrap" id="top">
	
	
	<div class="btContentWrap btClear">
		<?php 
		$hide_headline = boldthemes_get_option( 'hide_headline' );
		if ( ( ( !$hide_headline && !is_404() ) || is_search() ) ) {
			boldthemes_header_headline( array( 'breadcrumbs' => true ) ); 
		}
		?>
		<?php if ( BoldThemesFramework::$page_for_header_id != '' && ! is_search() ) { ?>
			<?php
				$content = get_post( BoldThemesFramework::$page_for_header_id );
				if ( !is_null( $content ) && $content != '' ) {
					$top_content = $content->post_content;
					if ( $top_content != '' ) {
						$top_content = do_shortcode($top_content);
						$top_content = preg_replace( '/data-edit_url="(.*?)"/s', 'data-edit_url="' . get_edit_post_link( BoldThemesFramework::$page_for_header_id, '' ) . '"', $top_content );
						echo '<div class = "btBlogHeaderContent">' . str_replace( ']]>', ']]&gt;', $top_content ) . '</div>';
					}
				}
				
			?>
		<?php } ?>
		<div class="btContentHolder">
			
			<div class="btContent">