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
    <div class="large-6 medium-6 columns"> <img src="images/LCCC-Logo.png" height="70" width="325" alt="Lorain County Community College Logo" /> </div>
    <div class="large-6 medium-6 columns">
      <ul id="header-menu" class="menu align-right">
        <li><a href="#" class="ql-icon ql-1">A-Z Index</a></li>
        <li><a href="#" class="ql-icon ql-2">Faculty/Staff</a></li>
        <li><a href="#" class="ql-icon ql-3">Canvas</a></li>
        <li><a href="#" class="ql-icon ql-4">My Campus</a></li>
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
          <ul class="menu dropdown" data-dropdown-menu>
            <li><a href="#">Getting Started</a></li>
            <li class="divider"></li>
            <li><a href="#">Programs and Careers</a></li>
            <li class="divider"></li>
            <li><a href="#">Student Resources</a>
              <ul class="menu nested">
                <li><a href="#">SubNav Menu 1</a></li>
                <li><a href="#">SubNav Menu 1</a></li>
                <li><a href="#">SubNav Menu 1</a></li>
                <li><a href="#">SubNav Menu 1</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li><a href="#">Campus Life</a></li>
            <li class="divider"></li>
            <li><a href="#">Services for Business</a></li>
            <li class="divider"></li>
            <li><a href="#">Service for Community</a></li>
            <li class="divider"></li>
            <li><a href="#">About</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="row show-for-small-only mobile-nav-bar">
    <div class="small-8 columns"> <a href="/"><img src="images/icons/lccclogo_white.svg" alt="" width="165" height="31.875" /></a> </div>
    <div class="small-2 columns clearfix"> <span data-responsive-toggle="mobile-search" data-hide-for="medium"><img src="images/icons/magnifying-glass.svg" height="25" width="25" alt="" class="float-right" data-toggle/></span> </div>
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
      <li><a href="test-1.html">Link 1</a></li>
      <li><a href="test-2.html">Link 2</a>
        <ul class="vertical menu">
          <li><a href="test-2-1.html">SubNav Link 2-1</a></li>
          <li><a href="test-2-2.html">SubNav Link 2-2</a></li>
          <li><a href="test-2-3.html">SubNav Link 2-3</a></li>
          <li><a href="test-2-4.html">SubNav Link 2-4</a></li>
        </ul>
      </li>
      <li><a href="test-3.html">Link 3</a>
        <ul class="vertical menu">
          <li><a href="test-3-1.html">SubNav Link 3-1</a></li>
          <li><a href="test-3-2.html">SubNav Link 3-2</a></li>
          <li><a href="test-3-3.html">SubNav Link 3-3</a></li>
          <li><a href="test-3-4.html">SubNav Link 3-4</a></li>
        </ul>
      </li>
      <li><a href="test-4.html">Link 4</a>
        <ul class="vertical menu">
          <li><a href="test-4-1.html">SubNav Link 4-1</a></li>
          <li><a href="test-4-2.html">SubNav Link 4-2</a></li>
          <li><a href="test-4-3.html">SubNav Link 4-3</a></li>
          <li><a href="test-4-4.html">SubNav Link 4-4</a></li>
        </ul>
      </li>
      <li><a href="test-5.html">Link 5</a>
        <ul class="vertical menu">
          <li><a href="test-5-1.html">SubNav Link 5-1</a></li>
          <li><a href="test-5-2.html">SubNav Link 5-2</a></li>
          <li><a href="test-5-3.html">SubNav Link 5-3</a></li>
          <li><a href="test-5-4.html">SubNav Link 5-4</a></li>
        </ul>
      </li>
    </ul>
  </div>
		
	
	</header><!-- #masthead -->

	<div id="content" class="site-content">