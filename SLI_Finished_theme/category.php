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
							<div class="medium-2 large-2 columns citieslistsidebar show-for-medium-up" data-equalizer-watch >
									<h2 class="archive-title">Cities</h2>
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
  'title_li' => $title,
	'exclude'			 => 10
);
?>
<ul class="citieslist">
<?php
wp_list_categories($args);
?>
</ul>
				
				</div>
							<div class="small-12 medium-10 large-10 columns show-for-medium-up" data-equalizer-watch>
			<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				<h1 class="cities-category-title"><?php printf( __( '%s', 'slilccc' ), single_cat_title( '', false ) ); ?></h1>
		<?php 
		$newest_post_query = new WP_Query( 
					array( 
					'cat' => get_query_var('cat'),
					'post_type' => 'landmarks',
						'paged' => get_query_var('paged')
					) 			
				);
?>
															<?php	if ( $newest_post_query-> have_posts() ) : ?>
																						<?php /* Start the Loop */ ?>
																						<?php while ( $newest_post_query->have_posts() ) : $newest_post_query->the_post(); ?>
																							<?php
																								/* Include the Post-Format-specific template for the content.
																									* If you want to override this in a child theme, then include a file
																									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
																									*/
																												get_template_part( 'template-parts/content', 'landmarks' );
																							?>
																						<?php endwhile; ?>
																					<?php else : ?>
																						<?php get_template_part( 'content', 'none' ); ?>

															<?php endif; ?>
		</div><!-- #content -->
	</section><!-- #primary -->
				</div>
											<div class="small-12 columns show-for-small-only" data-equalizer-watch>
			<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
			<h1 class="cities-category-title"><?php printf( __( '%s', 'slilccc' ), single_cat_title( '', false ) ); ?></h1>
		<?php 
		$newest_post_query = new WP_Query( 
					array( 
					'cat' => get_query_var('cat'),
					'post_type' => 'landmarks',
						'paged' => get_query_var('paged')
					) 			
				);
?>
															<?php	if ( $newest_post_query-> have_posts() ) : ?>
																						<?php /* Start the Loop */ ?>
																						<?php while ( $newest_post_query->have_posts() ) : $newest_post_query->the_post(); ?>
																							<?php
																								/* Include the Post-Format-specific template for the content.
																									* If you want to override this in a child theme, then include a file
																									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
																									*/
																												get_template_part( 'template-parts/content', 'landmarks' );
																							?>
																						<?php endwhile; ?>
																					<?php else : ?>
																						<?php get_template_part( 'content', 'none' ); ?>

															<?php endif; ?>
			
		</div><!-- #content -->
	</section><!-- #primary -->
				</div>
</div><!-- #contentwrapper -->
		
			<?php if ( is_active_sidebar( 'mobilesidebar' ) ) : ?>
			<div class="small-12 columns show-for-small-only">
						<ul id="sidebar">
								<?php dynamic_sidebar( 'mobilesidebar' ); ?>
						</ul>
			</div>
			<?php endif; ?>			
				</div><!-- maincontent -->


<?php
get_footer();
?>