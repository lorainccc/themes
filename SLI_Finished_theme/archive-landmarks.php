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
		<div class="medium-2 large-2 columns show-for-large-up leftwrapper" data-equalizer-watch >
						<?php get_sidebar(); ?>
	</div>	
			<div class="small-12 medium-10 large-10 columns contentwrapper" data-equalizer-watch >
				
<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Cities: %s', 'slilccc' ), single_cat_title( '', false ) ); ?></h1>
			</header><!-- .archive-header -->
<?php
//list terms in a given taxonomy using wp_list_categories  (also useful as a widget)
$orderby = 'name';
$show_count = 0; // 1 for yes, 0 for no
$pad_counts = 0; // 1 for yes, 0 for no
$hierarchical = 1; // 1 for yes, 0 for no
$title = '';

$args = array(
  'orderby' => $orderby,
  'show_count' => $show_count,
  'pad_counts' => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li' => $title
);
?>
<ul>
<?php
wp_list_categories($args);
?>
</ul>
			
			<?php
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
	
<?php get_footer();?>
