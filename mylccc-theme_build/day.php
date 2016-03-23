<?php
/**
 * Template Name: Day
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="small-12 medium-12 large-12 columns contentdiv">
	<div class="small-12 medium-12 large-12 columns nopadding">
		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php $myvar = get_query_var('d');
						$date=strtotime($myvar);
						$event_month=date("F",$date);
						$event_day=date("j",$date);
						$event_year=date("Y",$date);
			?>	
			<div class="small-12 medium-12 large-12 columns">
			<h1><?php echo $event_month.' '.$event_day.', '.$event_year.' Events'; ?></h1>
			</div>		
				<div class="small-12 medium-12 large-12 columns pagediv">
										<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'calendarday' );
					endwhile; // End of the loop.
						?>
			</div>
			<div class="small-12 medium-12 large-12 columns events-list">	
						
										<?php 
												$args = array(
														'post_type' => 'lccc_event',
														'meta_key' => 'event_start_date',
														'meta_value' => $myvar,
														'compare' => 'BETWEEN',
														'type' => 'DATE'
													);
												query_posts( $args );
												// The Query
											$the_query = new WP_Query( $args );
												// The Loop
												if ( $the_query->have_posts() ) {
																while ( $the_query->have_posts() ) {
																	?>
																	<div class="small-12 medium-12 large-12 columns todays-event">
																	<?php	
																			$the_query->the_post();
																			$eventdate = event_meta_box_get_meta('event_meta_box_event_start_date_and_time_');	
																			$date=strtotime($eventdate);
																			$today_event_month=date("m",$date);
																			$today_event_day=date("j",$date);
																			$time=date("h:i A",$date);
																			?><a href="<?php echo get_the_permalink();?>"><?php the_title('<h2 class="event-title">','</h2>');?></a><?php
																			echo '<p class="event-time">'.$time.'</p>';
																			the_content('<p>','</p>');
																	?>
																	</div>	
																	<?php
																	}
												} else {
																	// no posts found
												}
											?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

</div>

</div>	
<?php
get_footer();
