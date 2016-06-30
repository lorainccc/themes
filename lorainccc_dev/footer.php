<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package LCCC Framework
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		  <div class="row text-center medium-text-left">
    <div class="large-3 medium-3 columns"> <img class="footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/lccclogo_white.svg" alt="" width="220" height="42.5"/>
      <h2>Connect with LCCC</h2>
      <ul class="menu footer-sm-links">
        <li><a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/facebook_white.svg" height="30" width="30" alt="" /></a></li>
        <li><a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/twitter_white.svg" height="30" width="30" alt="" /></a></li>
        <li><a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/linkedin_white.svg" height="30" width="30" alt="" /></a></li>
        <li><a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/pinterest_white.svg" height="30" width="30" alt="" /></a></li>
        <li><a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/instagram_white.svg" height="30" width="30" alt="" /></a></li>
      </ul>
      <a href="#" target="_blank" class="clearfix mobile-app-link"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/smartphone_yellow.svg" heigth="33" width="20" alt=""/>
      <h2>LCCC'S<br />
        Mobile App</h2>
      </a> </div>
    <div class="large-3 medium-3 columns">
      <h2>Contact LCCC</h2>
      <p>1005 N Abbe Rd<br />
        Elyria, OH 44035<br />
        1-800-995-LCCC<br />
        <a href="mailto:webmaster@lorainccc.edu">webmaster@lorainccc.edu</a> </p>
      <ul class="underline">
        <li><a href="#">Map and Directions</a></li>
        <li><a href="#">Contact LCCC</a></li>
        <li><a href="#">Visit LCCC</a></li>
      </ul>
    </div>
    <div class="large-3 medium-3 columns">
     <h2>Campus Locations</h2>
     <!-- lc_footer_campus_locations -->
									<?php
          wp_nav_menu(array(
											'container' => false,
											'menu' => __( 'Footer Campus Locations', 'textdomain' ),
											'menu_class' => 'menu row',
											'theme_location' => 'footer-campus-locations',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											//Recommend setting this to false, but if you need a fallback...
											'walker' => new lc_footer_campus_locations,
												));
											?>
    </div>
    <div class="large-3 medium-3 columns">
      <h2>Quick Links</h2>
      <?php wp_nav_menu( array( 'theme_location' => 'footer-quicklinks' ) ); ?>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
