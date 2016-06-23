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
								<ul id="sidebar">
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
      <div class="aside-header text-center">
        <h3><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/lccc_white.svg" alt="" height="45" width="67.5" /> Events</h3>
      </div>
      <div class="recent-events">
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">Jan</span> <span class="day">24</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="event-divider"></div>
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">Feb</span> <span class="day">04</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="event-divider"></div>
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">May</span> <span class="day">11</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="event-divider"></div>
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">Jul</span> <span class="day">18</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="event-divider"></div>
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">Oct</span> <span class="day">14</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="text-center"><a class="button" href="#">View All Events</a></div>
      </div>
    </aside>
  </section>
			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
