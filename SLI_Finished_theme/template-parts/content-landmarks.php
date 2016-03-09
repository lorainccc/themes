<?php
/**
 * @package LCCC Framework
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
	<header class="entry-header">
		<?php the_title( '<h3 class="cities-title">', '</h3>' ); ?>
	</header><!-- .entry-header -->
	</a>
	<footer class="entry-footer">
		<?php lccc_framework_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->