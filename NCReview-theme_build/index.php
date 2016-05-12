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
							<!-- Art and Photgraphy Post Code Starts here -->
									<?php $homequery = new WP_Query( array( 'pagename' => 'homepage') );?>
									<?php if ( $homequery->have_posts() ) : ?>
											<!-- pagination here -->
											<!-- the loop -->
											<?php while ( $homequery->have_posts() ) : $homequery->the_post();?>
																	<div class="small-12 medium-12 large-12 columns home-page-content">
																	<p><?php the_content(); ?></p>	
																	</div>
											<?php endwhile;?>
									<?php endif; ?>
									
									<!-- Art and Photgraphy Post Code Starts here -->
									<?php $apquery = new WP_Query( array( 'category_name' => 'art-photography', 'tag' => 'current-issue', ) );?>
									<?php if ( $apquery->have_posts() ) : ?>
											<!-- pagination here -->
											<!-- the loop -->
											<?php while ( $apquery->have_posts() ) : $apquery->the_post();?>
												<div class="small-12 medium-12 large-12 columns arts-n-photo"> 
												<?php $galleryArray = get_post_gallery_ids($post->ID);
													if (!empty($galleryArray)){
													?>
													<div class="small-12 columns medium-5 large-5 columns left-postimage">	
												<ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 mini-photogallery" data-clearing>
												<?php foreach ($galleryArray as $id) { ?>
												<li><a href="<?php echo wp_get_attachment_url( $id ); ?>"><img src="<?php echo wp_get_attachment_url( $id ); ?>"></a></li>		
															<?php } ?>
																	</ul>
													</div>
													<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
														<p><?php the_excerpt(); ?></p> 
														<a href="category/art-photography/" class="button expand">See More Art and Photography</a>
										</div>
													<?php } elseif ( has_post_thumbnail() ) { ?>
    						<div class="small-12 columns medium-5 large-5 columns left-postimage">
														<?php the_post_thumbnail();?> 
										</div>
										<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
														<p><?php the_excerpt(); ?></p> 
														<a href="category/art-photography/" class="button expand">See More Art and Photography</a>
										</div>
										<?php } else { ?>
												<?php the_category(); ?>
												<h2><?php the_title(); ?></h2>
											<p><?php the_excerpt(); ?></p>	
										<a href="category/art-photography/" class="button expand">See More Art and Photography</a>
										<?php } ?>
												</div>
											<?php endwhile; ?>
											<!-- end of the loop -->
											<!-- pagination here -->
											<?php wp_reset_postdata(); ?>
										<?php endif; ?>
										<!-- Art and Photgraphy Post Code Ends here -->
									
											<!-- Fiction Post Code Starts here -->
									<?php $fictquery = new WP_Query( array( 'category_name' => 'fiction', 'tag' => 'current-issue', ) );?>
									<?php if ( $fictquery->have_posts() ) : ?>
											<!-- pagination here -->
											<!-- the loop -->
											<?php while ( $fictquery->have_posts() ) : $fictquery->the_post();?>
										<div class="small-12 medium-12 large-12 columns fiction">										
												<?php 
													$galleryArray = get_post_gallery_ids($post->ID);
													if (!empty($galleryArray)){
													?>
													<div class="small-12 columns medium-5 large-5 columns left-postimage">	
												<ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 mini-photogallery" data-clearing>
												<?php foreach ($galleryArray as $id) { ?>
																			<li><a href="<?php echo wp_get_attachment_url( $id ); ?>"><img src="<?php echo wp_get_attachment_url( $id ); ?>"></a></li>
															<?php } ?>
																	</ul>
													</div>
													<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
																			<h4 class="author-title">By <?php the_field('author'); ?></h4>
														<p><?php the_excerpt(); ?></p> 
														<a href="category/art-photography/" class="button expand">See More Art and Photography</a>
										</div>
													<?php } elseif ( has_post_thumbnail() ) { ?>
										<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
																<h4 class="author-title">By <?php the_field('author'); ?></h4>
														<p><?php the_excerpt(); ?></p> 
															<a href="category/fiction/" class="button expand">See More Fiction</a>
										</div>
										<div class="small-12 columns medium-5 large-5 columns right-postimage">
														<?php the_post_thumbnail();?> 
										</div>		
										<?php } else { ?>
												<?php the_category(); ?>
												<h2><?php the_title(); ?></h2>
																<h3 class="author-title">By <?php the_field('author'); ?></h3>
											<p><?php the_excerpt(); ?></p>	
												<a href="category/fiction/" class="button expand">See More Fiction</a>
										<?php } ?>
									
						</div>			
											<?php endwhile; ?>
											<!-- end of the loop -->
											<!-- pagination here -->
											<?php wp_reset_postdata(); ?>
										<?php endif; ?>
										<!-- Fiction Post Code Ends here -->	
									
										<!-- News and Notes Post Code Starts here -->
								<?php $nanquery = new WP_Query( array( 'category_name' => 'news-and-notes', 'tag' => 'current-issue', ) );?>
									<?php if ( $nanquery->have_posts() ) : ?>
											<!-- pagination here -->
											<!-- the loop -->
											<?php while ( $nanquery->have_posts() ) : $nanquery->the_post();?>
										<div class="small-12 medium-12 large-12 columns news-n-notes">										
												<?php 
													$galleryArray = get_post_gallery_ids($post->ID);
													if (!empty($galleryArray)){
													?>
													<div class="small-12 columns medium-5 large-5 columns left-postimage">	
												<ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 mini-photogallery" data-clearing>
												<?php foreach ($galleryArray as $id) { ?>
																			<li><a href="<?php echo wp_get_attachment_url( $id ); ?>"><img src="<?php echo wp_get_attachment_url( $id ); ?>"></a></li>
															<?php } ?>
																	</ul>
													</div>
													<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
																			<h4 class="author-title">By <?php the_field('author'); ?></h4>
														<p><?php the_excerpt(); ?></p> 
														<a href="category/art-photography/" class="button expand">See More Art and Photography</a>
										</div>
													<?php } elseif ( has_post_thumbnail() ) { ?>
										<div class="small-12 columns medium-5 large-5 columns left-postimage">
														<?php the_post_thumbnail();?> 
										</div>	
											<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
																	<h4 class="author-title">By <?php the_field('author'); ?></h4>
														<p><?php the_excerpt(); ?></p> 
															<a href="category/fiction/" class="button expand">See More Fiction</a>
										</div>
									
										<?php } else { ?>
												<?php the_category(); ?>
												<h2><?php the_title(); ?></h2>
																<h3 class="author-title">By <?php the_field('author'); ?></h3>
											<p><?php the_excerpt(); ?></p>	
												<a href="category/fiction/" class="button expand">See More Fiction</a>
										<?php } ?>
									
						</div>			
											<?php endwhile; ?>
											<!-- end of the loop -->
											<!-- pagination here -->
											<?php wp_reset_postdata(); ?>
										<?php endif; ?>
										<!-- News and Notes Post Code Ends here -->	
									
													<!-- Non-Fiction Post Code Starts here -->
								<?php $nonfquery = new WP_Query( array( 'category_name' => 'non-fiction', 'tag' => 'current-issue', ) );?>
									<?php if ( $nonfquery->have_posts() ) : ?>
											<!-- pagination here -->
											<!-- the loop -->
											<?php while ( $nonfquery->have_posts() ) : $nonfquery->the_post();?>
										<div class="small-12 medium-12 large-12 columns non-fiction">										
												<?php 
													$galleryArray = get_post_gallery_ids($post->ID);
													if (!empty($galleryArray)){
													?>
													<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
														<h4 class="author-title">By <?php the_field('author'); ?></h4>
														<p><?php the_excerpt(); ?></p> 
														<a href="category/art-photography/" class="button expand">See More Art and Photography</a>
										</div>
											<div class="small-12 columns medium-5 large-5 columns right-postimage">	
												<ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 mini-photogallery" data-clearing>
												<?php foreach ($galleryArray as $id) { ?>
																			<li><a href="<?php echo wp_get_attachment_url( $id ); ?>"><img src="<?php echo wp_get_attachment_url( $id ); ?>"></a></li>
															<?php } ?>
																	</ul>
													</div>
								
													<?php } elseif ( has_post_thumbnail() ) { ?>
										<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
																<h4 class="author-title">By <?php the_field('author'); ?></h4>
														<p><?php the_excerpt(); ?></p> 
															<a href="category/fiction/" class="button expand">See More Fiction</a>
										</div>
										<div class="small-12 columns medium-5 large-5 columns right-postimage">
														<?php the_post_thumbnail();?> 
										</div>		
										<?php } else { ?>
												<?php the_category(); ?>
												<h2><?php the_title(); ?></h2>
											<h3 class="author-title">By <?php the_field('author'); ?></h3>
											<p><?php the_excerpt(); ?></p>	
												<a href="category/fiction/" class="button expand">See More Fiction</a>
										<?php } ?>
									
						</div>			
											<?php endwhile; ?>
											<!-- end of the loop -->
											<!-- pagination here -->
											<?php wp_reset_postdata(); ?>
										<?php endif; ?>
										<!-- Non-Fiction Post Code Ends here -->	
									
														<!-- Poetry Post Code Starts here -->
								<?php $poetquery = new WP_Query( array( 'category_name' => 'poetry', 'tag' => 'current-issue', ) );?>
									<?php if ( $poetquery->have_posts() ) : ?>
											<!-- pagination here -->
											<!-- the loop -->
											<?php while ( $poetquery->have_posts() ) : $poetquery->the_post();?>
										<div class="small-12 medium-12 large-12 columns news-n-notes">										
												<?php 
													$galleryArray = get_post_gallery_ids($post->ID);
													if (!empty($galleryArray)){
													?>
													<div class="small-12 columns medium-5 large-5 columns left-postimage">	
												<ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 mini-photogallery" data-clearing>
												<?php foreach ($galleryArray as $id) { ?>
																			<li><a href="<?php echo wp_get_attachment_url( $id ); ?>"><img src="<?php echo wp_get_attachment_url( $id ); ?>"></a></li>
															<?php } ?>
																	</ul>
													</div>
													<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
																			<h4 class="author-title">By <?php the_field('author'); ?></h4>
														<p><?php the_excerpt(); ?></p> 
														<a href="category/art-photography/" class="button expand">See More Art and Photography</a>
										</div>
													<?php } elseif ( has_post_thumbnail() ) { ?>
										<div class="small-12 columns medium-5 large-5 columns left-postimage">
														<?php the_post_thumbnail();?> 
										</div>	
											<div class="small-12 columns medium-7 large-7 columns">
														<?php the_category(); ?>
														<h3><?php the_title(); ?></h3>
																	<h4 class="author-title">By <?php the_field('author'); ?></h4>
														<p><?php the_excerpt(); ?></p> 
															<a href="category/fiction/" class="button expand">See More Fiction</a>
										</div>
									
										<?php } else { ?>
												<?php the_category(); ?>
												<h2><?php the_title(); ?></h2>
																<h3 class="author-title">By <?php the_field('author'); ?></h3>
											<p><?php the_excerpt(); ?></p>	
												<a href="category/fiction/" class="button expand">See More Fiction</a>
										<?php } ?>
									
						</div>			
											<?php endwhile; ?>
											<!-- end of the loop -->
											<!-- pagination here -->
											<?php wp_reset_postdata(); ?>
										<?php endif; ?>
										<!-- Poetry Post Code Ends here -->	
									
								</main><!-- #main -->
					</div><!-- #primary -->
	</div>
	<div class="small-12 medium-4 large-4 columns sidebarcontainer">
				<?php get_sidebar(); ?>
	</div>
</div>	
<?php
get_footer();
?>