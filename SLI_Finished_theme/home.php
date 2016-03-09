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

get_header(); ?>

		<div class="small-12 medium-12 large-12 columns maincontent">
		<div class="medium-2 large-2 columns show-for-large-up leftwrapper" data-equalizer-watch >
						<?php get_sidebar(); ?>
	</div>	
			<div class="small-12 medium-10 large-10 columns contentwrapper" data-equalizer-watch >
						<div id="content" class="site-content">
									<div id="primary" class="content-area">
													<main id="main" class="site-main" role="main">

		<?php 
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$query = new WP_Query('pagename=homepage&posts_per_page=1&paged=' . $paged);?>
															<?php	if ( $query-> have_posts() ) : ?>
																						<?php /* Start the Loop */ ?>
																						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
																							<?php
																								/* Include the Post-Format-specific template for the content.
																									* If you want to override this in a child theme, then include a file
																									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
																									*/
																												get_template_part( 'template-parts/content', 'home' );
																							?>
																						<?php endwhile; ?>
																					<?php else : ?>
																						<?php get_template_part( 'content', 'none' ); ?>

															<?php endif; ?>	

													</main><!-- #main -->
									</div><!-- #primary -->
						</div><!-- #content -->
</div><!-- #content -->
		
			<?php if ( is_active_sidebar( 'mobilesidebar' ) ) : ?>
			<div class="small-12 columns hide-for-large-up">
						<ul id="sidebar">
								<?php dynamic_sidebar( 'mobilesidebar' ); ?>
						</ul>
			</div>
			<?php endif; ?>			
				</div><!-- maincontent -->
	
<?php get_footer(); ?>
