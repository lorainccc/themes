<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Framework
 */
get_header(); 
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
  <div class="home-hero">
    <div class="row">
				&nbsp;
		</div>
  </div>
  <section class="cta-icons">
    <div class="row icon-container">
					<?php if ( is_active_sidebar( 'cta-icons-sidebar' ) ) { ?>
								<ul id="sidebar" style="position: relative;">
											<?php dynamic_sidebar( 'cta-icons-sidebar' ); ?>
								</ul>
					<?php } ?>
    </div>
  </section>
  <section class="row">
   	<?php if ( is_active_sidebar( 'lccc-spotlights-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-spotlights-sidebar' ); ?>
				<?php } ?>
  </section>
  <div class="column row">
    <hr />
  </div>
  <section class="row link-box-row">
<?php if ( is_active_sidebar( 'lccc-highlights-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-highlights-sidebar' ); ?>
				<?php } ?>
  </section>
  <div class="column row">
    <hr />
  </div>
  <section class="row news-feed" id="home-news">
    <div class="large-8 medium-8 columns home-left">
<?php if ( is_active_sidebar( 'lccc-announcements-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-announcements-sidebar' ); ?>
				<?php } ?>
    </div>
    <aside class="large-4 medium-4 columns">
<?php if ( is_active_sidebar( 'lccc-events-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-events-sidebar' ); ?>
				<?php } ?>
    </aside>
  </section>
			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
