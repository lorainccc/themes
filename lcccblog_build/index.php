<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MyLCCC_Theme
 */
get_header(); ?>
<div class="small-12 medium-12 large-12 columns contentdiv">
	<div class="small-12 medium-8 large-8 columns nopadding content-container">
					<div id="primary" class="content-area">
								<main id="main" class="site-main" role="main">
									<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
								</main><!-- #main -->
					</div><!-- #primary -->
	<div class="small-12 medium-12 large-12 columns">
				<div class="show-for-medium-up">				
									<h4>Post Navigation</h4>
							<?php wpbeginner_numeric_posts_nav(); ?>
				</div>
				<div class="hide-for-medium-up">									
						<?php the_posts_navigation(); ?>
				</div>
		</div>
	</div>
	<div class="small-12 medium-4 large-4 columns sidebarcontainer">
				<?php get_sidebar(); ?>
	</div>
</div>	
<?php
get_footer();
