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
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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

		<div class="rowend">
			<div class="space-around">
				<div id="fbi">
					<img src="http://placehold.it/30x30" alt="">
				</div>
				<div id="ii">
					<img src="http://placehold.it/30x30" alt="">	
				</div>
			</div>
		</div> <!-- .rowcenterdiv -->

					<?php
					if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1><p></p>
					
					
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>	

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'sassyflex' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->		

			
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
