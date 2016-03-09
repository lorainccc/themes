<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

		<div class="small-12 medium-12 large-12 columns maincontent">
		<div class="medium-2 large-2 columns show-for-medium-up leftwrapper" data-equalizer-watch >
						<?php get_sidebar(); ?>
	</div>	
			<div class="small-12 medium-10 large-10 columns contentwrapper" data-equalizer-watch >
				<div class="landmarkimage">
				<?php
					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {
								the_post_thumbnail();
								} 
						?>
				</div>
						<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'singlelandmark' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next:', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous:', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
						</div><!-- #content -->
</div><!-- #content -->
	<?php if ( is_active_sidebar( 'mobilesidebar' ) ) : ?>
			<div class="small-12 columns show-for-small-only">
						<ul id="sidebar">
								<?php dynamic_sidebar( 'mobilesidebar' ); ?>
						</ul>
			</div>
			<?php endif; ?>			
				</div><!-- maincontent -->




<?php get_footer(); ?>
