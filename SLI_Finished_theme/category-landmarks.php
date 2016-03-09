<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
		<div class="small-12 medium-12 large-12 columns maincontent">
		<div class="medium-2 large-2 columns show-for-medium-up leftwrapper" data-equalizer-watch >
						<?php get_sidebar(); ?>
	</div>	
			<div class="small-12 medium-10 large-10 columns contentwrapper" data-equalizer-watch >
			<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'slilccc' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', 'landmarks' );
					endwhile;
					// Previous/next page navigation.
					slilccc_paging_nav();
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );
				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->
</div><!-- #contentwrapper -->
		
			<?php if ( is_active_sidebar( 'mobilesidebar' ) ) : ?>
			<div class="small-12 columns hide-for-large-up">
						<ul id="sidebar">
								<?php dynamic_sidebar( 'mobilesidebar' ); ?>
						</ul>
			</div>
			<?php endif; ?>			
				</div><!-- maincontent -->


<?php
get_footer();
?>