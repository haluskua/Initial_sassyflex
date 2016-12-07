<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flexysass
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'flexsass' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		<div class="outerclass">
			<div id="searchbar">
				<div id="searchspace">
					<input type="search" class="search-field" placeholder="Search …" value="" name="s">
				</div>
				<div id="carticons">
					<div>
						<img src="http://placehold.it/30x30" alt="">
					</div>
					<div>
						<img src="http://placehold.it/30x30" alt="">	
					</div>
				</div>
			</div>
		</div>

		<div class="rowclass">
			<div id="header-3section">
				<div id="section1">
					<div id="smicons">
						<div>
							<img src="http://placehold.it/30x30" alt="">
						</div>
						<div>
							<img src="http://placehold.it/30x30" alt="">	
						</div>
					</div>
				</div>
				<div class="site-branding">
					<div id="sbcontainer">			
						<?php
						if ( is_front_page() && is_home() ) : ?>

						<div id="whlf"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						</div>

						<div id="mitch"><small>Mitchell Mconnel</small>
						</div>

						<div id="bianka">
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
							endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php
							endif; ?>
						</div>
					</div>


					<div id="nav-container">
						<nav id="site-navigation" class="main-navigation" role="navigation">

							<hr>
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'flexsass' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							<hr> 
						</nav><!-- #site-navigation -->
				
					</div>
				</div><!-- .site-branding -->	
			</div>
		</div>		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
