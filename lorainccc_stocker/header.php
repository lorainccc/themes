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

	<header id="masthead" class="site-header" role="banner">
		  <div class="row show-for-medium">
    <div class="large-6 medium-6 columns"><a href="<?php echo esc_url( home_url( '' ) ); ?>"><img src="http://sites.lorainccc.edu/stocker/wp-content/uploads/sites/4/2016/07/Stocker-Arts-Ctr-header-logo.png" height="80" width="340" alt="Lorain County Community College Logo" /></a>  </div>
    <div class="large-6 medium-6 columns">
      <ul id="header-menu" class="menu align-right">
        <li><a href="http://www.lorainccc.edu/" class="ql-icon ql-3" target="_blank">LCCC Home</a></li>
        <li><a href="https://tickets.lorainccc.edu/public/" class="ql-icon ql-4">Buy Tickets</a></li>
      </ul>
      <!-- This should be similar to what is generated when using Wordpress searchform.php -->
      <form role="search" method="get" class="search-form" action="">
        <label>
          <input type="search" placeholder="Search" name="s" class="float-right"/>
        </label>
      </form>
    </div>
  </div>
<div class="medium-blue-bg show-for-medium">
    <div class="row">
      <div class="large-12 columns">
        <nav class="menu-centered">
									<?php
          wp_nav_menu(array(
											'container' => false,
											'menu' => __( 'Primary', 'textdomain' ),
											'menu_class' => 'dropdown menu',
											'theme_location' => 'stocker-primary',
											'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
											//Recommend setting this to false, but if you need a fallback...
											'fallback_cb' => 'lc_topbar_menu_fallback',
											'walker' => new lc_top_bar_menu_walker,
												));
											?>
        </nav>
      </div>
    </div>
  </div>
  <div class="row show-for-small-only mobile-nav-bar">
    <div class="small-8 columns"> <a href="/stocker"><img style="margin-top: -1.3rem;" src="http://sites.lorainccc.edu/stocker/wp-content/uploads/sites/4/2016/07/Stocker-Arts-Ctr-logo.svg" alt="LCCC Stocker Logo"/></a> </div>
    <div class="small-2 columns clearfix"> <span data-responsive-toggle="mobile-search" data-hide-for="medium"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/magnifying-glass.svg" height="25" width="25" alt="" class="float-right" data-toggle/></span> </div>
    <div class="small-2 columns"> <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      </span> </div>
  </div>
  <div id="mobile-search" class="show-for-small-only">
    <div class="row">
      <div class="small-12 columns">
        <form role="search" method="get" class="search-form" action="">
          <label>
            <input type="search" placeholder="Search" name="s" />
          </label>
        </form>
      </div>
    </div>
  </div>
  <div id="responsive-menu" class="show-for-small-only">
    <ul class="vertical menu" data-drilldown data-parent-link="true">

					<?php 	wp_nav_menu(array(
													'container' => false,
													'menu' => __( 'Drill Menu', 'textdomain' ),
													'menu_class' => 'vertical menu',
			'theme_location' => 'stocker-mobile-primary',
													'menu_id' => 'mobile-primary-menu',
														//Recommend setting this to false, but if you need a fallback...
													'fallback_cb' => 'lc_drill_menu_fallback',
													'walker' => new lc_drill_menu_walker(),
												));
					?>

    </ul>
  </div>

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">