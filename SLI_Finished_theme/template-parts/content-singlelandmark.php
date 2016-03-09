<?php
/**
 * @package LCCC Framework
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
			<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="landmarkentry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->
		<div class="small-12 medium-4 large-4 columns">
		<?php echo get_post_meta($post->ID, 'address_line_1', true); ?>
					<?php echo get_post_meta($post->ID, 'address_line_2', true); ?>
					<?php echo get_post_meta($post->ID, 'city', true); ?>
					<?php echo get_post_meta($post->ID, 'state', true); ?>
		<?php echo get_post_meta($post->ID, 'zip_code', true); ?>
					<?php echo get_post_meta($post->ID, 'phone_number', true); ?>
			<?php echo get_post_meta($post->ID, 'email', true); ?>
			<a class="landmarkweblink" href="<?php echo get_post_meta($post->ID, 'web_link', true); ?>"><?php echo get_post_meta($post->ID, 'web_link', true); ?></a>
		</div>
		<div class="small-12 medium-8 large-8 columns">
				<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lccc-framework' ), array( 'span' => array() ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lccc-framework' ),
				'after'  => '</div>',
			) );
		?>
		</div>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php lccc_framework_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->