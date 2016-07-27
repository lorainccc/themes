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
  <?php if ( is_active_sidebar( 'stocker-slider-sidebar' ) ) { ?>
			<div class="small-12 medium-12 large-12 columns slider-container nopadding">
						<?php dynamic_sidebar( 'stocker-slider-sidebar' ); ?>
			</div>
			<?php }else{ ?>
			<div class="home-hero">
    <div class="row">
				&nbsp;
			</div>
  </div>
  <?php } ?>
			<section class="row events-row">
<?php if ( is_active_sidebar( 'lccc-events-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-events-sidebar' ); ?>
				<?php } ?>
			</section>
  <div class="column row">
    <hr />
  </div>
			<section class="row">
   	<div class="small-12 medium-7 large-8 columns stocker-highlights">
					<?php
					$stockerhlargs=array(
					'post_type' => 'page',
					'post_status' => 'publish',
					'category_name' => 'stocker-highlight',
					);
					$newstockerhighlights = new WP_Query($stockerhlargs);
					if ( $newstockerhighlights->have_posts() ) :
							while ( $newstockerhighlights->have_posts() ) : $newstockerhighlights->the_post();
						?>		
				<div class="small-12 medium-12 large-12 columns stocker-highlight-container">
				   <div class="small-12 medium-6 large-6 columns highlight-image">
					<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
				   </div>
				<div class="small-12 medium-6 large-6 columns highlight-text">
													<div class="small-12 medium-12 large-12 columns highlight-header">
																<?php the_title('<h3>','</h3>');?>
													</div>
													<div class="small-12 medium-12 large-12 columns highlight-content">
															<?php the_excerpt('<p>','</p>');?>
													</div>
													<div class="small-12 medium-12 large-12 columns highlight-link">
																<a href="<?php echo esc_url( get_permalink() ); ?>" class="button">Learn More</a>
													</div>
									</div>					
					</div>
					<?php
						endwhile;
					endif;
					?>
				</div>
				<div class="small-12 medium-5 large-4 columns">
										<div class="small-12 medium-12 large-12 columns stocker-badges-container">
											<?php if ( is_active_sidebar( 'badges-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'badges-sidebar' ); ?>
												<?php } ?>								
										</div>
										<div class="small-12 medium-12 large-12 columns">
											<?php if ( is_active_sidebar( 'lccc-announcements-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'lccc-announcements-sidebar' ); ?>
												<?php } ?>				
										</div>					
				</div>				
  </section>		
			<?php if ( is_active_sidebar( 'sponsor-sidebar' ) ) { ?>
				  <div class="column row">
    <hr />
  </div>
		<div class="column row">
  <div class="small-12 medium-12 large-12 columns sponsors-row">
			<?php dynamic_sidebar( 'sponsor-sidebar' ); ?>
		</div> 
  </div>
			<?php } ?>			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
