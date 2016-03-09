<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LCCC Framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lccc-framework' ); ?></a>

<div class="small-12 medium-12 large-12 columns maindiv">
	<div class="row maincolumn">
			<div class="small-12 medium-12 larger-12 columns headerholder">
		<header id="masthead" class="site-header" role="banner">
				<div class="show-for-small-only">
														<nav class="top-bar" data-topbar role="navigation">
																			<ul class="title-area">
																						<li class="name show-for-small-only">
																											<h1><a href="#">LCCC Catalog</a></h1>

																						</li>
																						<!-- Mobile Menu Toggle -->
																						<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
																						</li>
																		</ul>
														<section class="top-bar-section"> <!-- Right Nav Section -->
															<ul class="right">
															<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu left', 'container' => '', 'walker' => new Embassy_Walker_Nav_Menu  ) ); ?>
																</ul>
															</section>
														</nav>
				</div>	
				<div class="site-branding">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
								</a>
						</div><!-- .site-branding -->
				<div class="small-12 medium-12 large-12 columns cutline">
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
		</header><!-- #masthead -->
	</div>