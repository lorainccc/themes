<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyLCCC_Theme
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

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mylccc-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">			
		<div class="row show-for-medium-up header-row">
		<div class="medium-8 large-9 columns site-branding">
			<?php
			$url = home_url();
			?>
			<a href="<?php echo esc_url( $url ); ?>">
			<img src="<?php echo get_bloginfo('stylesheet_directory');?>/images/MyLCCC-Logo.png" alt="MyLCCC Logo">
			</a>
			</div><!-- .site-branding -->
					<div class="medium-4 large-3 columns header-social-links show-for-medium-up">
												<ul class="medium-block-grid-5 large-block-grid-5 social-icons-header">
																				<li><a href="https://twitter.com/lorainccc"><i class="fi-social-twitter"></i></a></li>
																				<li><a href="https://www.facebook.com/lorainccc"><i class="fi-social-facebook"></i></a></li>
																				<li><a href="https://www.youtube.com/user/lcccwebvideo"><i class="fi-social-youtube"></i></a></li>
																				<li><a href="https://www.linkedin.com/company/lorain-county-community-college"><i class="fi-social-linkedin"></i></a></li>
																			<li><a href="https://www.instagram.com/lorainccc/"><i class="fi-social-instagram"></i></a></li>
																	</ul>
					</div>
			</div>
	  <div class="contain-to-grid sticky">
	<nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
            <li class="name show-for-small-only">
                 <h1><a href="#"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/images/mobile-MyLCCC-Name.png"></a></h1>
            </li>
            <!-- Mobile Menu Toggle -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
            </li>
        </ul>
    <section class="top-bar-section"> <!-- Right Nav Section -->
    	<ul class="left">
						<li>
    	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
     </li>	
					</ul>
					 <ul class="left"> <li></li> 
           </ul>
     </section>
    </nav>
    </div>
		
	</header><!-- #masthead -->
	<div class="row main">
	<div id="content" class="site-content">
