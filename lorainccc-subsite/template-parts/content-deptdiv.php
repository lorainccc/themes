<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lorainccc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

 <?php

  $contactargs = array(
    'post_type' => 'lc_contact_info',
				'post_status' => 'publish',
  		'posts_per_page' => 1,
  );

  $contactinfo = new WP_Query($contactargs);
					if ( $contactinfo->have_posts() ) :
        while ( $contactinfo->have_posts() ) : $contactinfo->the_post();

  $post_id = get_the_ID();
  $dept_extension = get_post_meta( $post_id, 'lc_dept_extension_field', true );
  $dept_email = get_post_meta( $post_id, 'lc_dept_email_field', true );
  $dept_faxnumber = get_post_meta( $post_id, 'lc_dept_fax_number_field', true );
  $dept_roomnumber = get_post_meta( $post_id, 'lc_dept_room_number_field', true );
  $dept_office_hours = get_post_meta( $post_id, 'lc_dept_office_hours_field', true );
 
 ?>
  <div class="row">
   <div class="columns small-12 medium-8 large-8 callout">
    <h2>Contact Information</h2>
    <div class="row">
     <div class="small-12 medium-6 large-6 columns callout-contact-info">
      <p class="tel">Direct Phone: (440) 366-<?php echo $dept_extension; ?></p>
      <?php if ($dept_faxnumber !== '') { ?>
      <p class="tel">Fax Number: (440) 366-<?php echo $dept_faxnumber; ?></p>
      <?php } else { ?>
       <p class="building">Building and Room: (440) 366-<?php echo $dept_roomnumber; ?></p>
      <?php } ?>
      <?php if ($dept_faxnumber !== '') { ?>
      <p class="email">Email: <?php echo $dept_email; ?></p>
      <?php } ?>
     </div>
     <div class="small-12 medium-6 large-6 columns callout-contact-info">
      <p class="tel">Toll Free: 1-800-995-5222 ext <?php echo $dept_extension; ?></p>
      <?php if ($dept_faxnumber !== '') { ?>
      <p class="building">Building and Room: <?php echo $dept_roomnumber; ?></p>
      <?php } else { ?>
      <p class="email">Email: <?php echo $dept_email; ?></p>
      <?php } ?>
     </div>
     <div class="small-12 medium-12 large-12 columns callout-contact-info">
      <p class="hours">Office Hours: <?php echo $dept_office_hours; ?></p>
     </div>
    </div>
   </div>
		</div>

 <?php
        endwhile;
					endif;
 wp_reset_query();
 ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lorainccc' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>

			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'lorainccc' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
	<?php endif; ?>
</article><!-- #post-## -->
