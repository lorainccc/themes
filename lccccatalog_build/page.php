<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package LCCC Framework
 */

get_header(); ?>

		<div class="small-12 medium-12 large-12 columns maincontent">
		<div class="medium-3 large-3 columns show-for-medium-up leftwrapper">
						<?php get_sidebar(); ?>
	</div>	
			<div class="small-12 medium-9 large-9 columns contentwrapper">
				<div class=" small-12 medium-12 large-12 columns breadcrumbs">
				<div id="yoastbreadcrumbs">
					<?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                    } ?>
                </div><!--closes yoastbreadcrumbs div -->
				</div>
						<div id="content" class="site-content">
				<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
						</div><!-- #content -->
</div><!-- #content -->
				</div><!-- maincontent -->
<?php get_footer(); ?>
