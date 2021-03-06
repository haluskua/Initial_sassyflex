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
						<img src="http://placehold.it/30x30" alt="shopping cart">
					</div>
					<div>
						<img src="http://placehold.it/30x30" alt="payment">	
					</div>
				</div>
			</div>
		</div>

	<div class="rowclass">
		<div id="header-3section">
			<div id="section1">
				<div id="smicons">
					<div>
						<img src="http://placehold.it/30x30" alt="shopping cart">
					</div>
					<div>
						<img src="http://placehold.it/30x30" alt="payment">	
					</div>
				</div>
			</div>
			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
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

			<div id="section3">
				Michelle Mconnel
			</div>

			<div id="section4">
				MENU
			</div>
		
		
		</div><!-- .site-branding -->
	</div>		
		<nav id="site-navigation" class="main-navigation" role="navigation">

			<hr> <br>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'flexsass' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			<hr> <br>
		</nav><!-- #site-navigation -->
			
	</header><!-- #masthead -->

	<div id="content" class="site-content">
