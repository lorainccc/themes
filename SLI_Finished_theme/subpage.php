<?php
/**
Template Name: Subpage
 */
get_header(); ?>

<div class="small-12 medium-12 large-12 columns">
			<div class="small-12 medium-12 large-12 columns">
         <div id="yoastbreadcrumbs">
					<?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                    } ?>
                </div><!--closes yoastbreadcrumbs div -->
</div>
<div class="small-12 medium-12 large-12 columns contentrow">
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

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

</div>
<?php get_footer(); ?>