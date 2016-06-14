<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Framework
 */

get_header(); 

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
  <div class="home-hero">
    <div class="row">
      <div class="large-5 medium-6 columns end float-right">
        <div class="white-panel">
          <div class="orbit" role="region" aria-label="[Label needed]" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
            <ul class="orbit-container">
              <!-- Uncomment out for Navigation arrows on the sides
              <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
              <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
              -->
              <li class="is-active orbit-slide">
                <div>
                  <h2>Lorem Ipsum dolar sit amet.</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at est et dui pretium viverra. Fusce mollis pretium dolor, ac rhoncus felis scelerisque in. Aliquam et dictum nisl. Sed eget feugiat ligula, id condimentum sapien. Sed nec libero quis turpis sollicitudin rhoncus. Suspendisse ac viverra lorem.</p>
                  <a class="button" href="#">Read More</a> </div>
              </li>
              <li class="orbit-slide">
                <div>
                  <h2>Lorem Ipsum dolar sit amet.</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at est et dui pretium viverra. Fusce mollis pretium dolor, ac rhoncus felis scelerisque in. Aliquam et dictum nisl. Sed eget feugiat ligula, id condimentum sapien. Sed nec libero quis turpis sollicitudin rhoncus. Suspendisse ac viverra lorem.</p>
                  <a class="button" href="#">Read More</a> </div>
              </li>
              <li class="orbit-slide">
                <div>
                  <h2>Lorem Ipsum dolar sit amet.</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at est et dui pretium viverra. Fusce mollis pretium dolor, ac rhoncus felis scelerisque in. Aliquam et dictum nisl. Sed eget feugiat ligula, id condimentum sapien. Sed nec libero quis turpis sollicitudin rhoncus. Suspendisse ac viverra lorem.</p>
                  <a class="button" href="#">Read More</a> </div>
              </li>
            </ul>
            <!-- Orbit bullet nav, with screen reader text -->
            <nav class="orbit-bullets float-right">
              <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
              <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
              <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="cta-icons">
    <div class="row">
      <div class="medium-3 columns text-center"> <a href="#" class="yellow-icon float-center"><img src="images/icons/icon-apply_white.svg" alt="" width="65" height="65" /></a>
        <div class="icon-label">Apply Now</div>
      </div>
      <div class="medium-3 columns text-center"> <a href="#" class="yellow-icon float-center"><img src="images/icons/icon-register_white.svg" alt="" width="65" height="65" /></a>
        <div class="icon-label">Register for Classes</div>
      </div>
      <div class="medium-3 columns text-center"> <a href="#" class="yellow-icon float-center"><img src="images/icons/icon-programscareers.svg" alt="" width="65" height="65" /></a>
        <div class="icon-label">Programs &amp; Careers</div>
      </div>
      <div class="medium-3 columns text-center"> <a href="#" class="yellow-icon float-center"><img src="images/icons/icon-money_white.svg" alt="" width="65" height="65" /></a>
        <div class="icon-label">Paying for College</div>
      </div>
    </div>
  </section>
  <section class="row">
    <div class="large-6 columns service-box">
      <div class="row" data-equalizer="business" data-equalize-on="medium">
        <div class="large-7 medium-4 columns service-box-image" data-equalizer-watch="business"> <img src="images/lgbox_servicesbusiness.jpg" alt="" /> </div>
        <div class="large-5 medium-8 columns service-box-copy text-center" data-equalizer-watch="business">
          <div class="service-box-container">
            <div class="service-box-header">
              <h2>Services for <span>Business</span></h2>
            </div>
            <div class="service-box-body">
              <p>LCCC provides business and individuals with a wide range of training and business support services.</p>
            </div>
            <a href="#" class="button">Learn More</a> </div>
        </div>
      </div>
      <div class="yellow-bottom-border"></div>
    </div>
    <div class="large-6 columns service-box">
      <div class="row" data-equalizer="community" data-equalize-on="medium">
        <div class="large-7 medium-4 columns service-box-image" data-equalizer-watch="community"> <img src="images/lgbox_servicescommunity.jpg" alt="" /> </div>
        <div class="large-5 medium-8 columns service-box-copy text-center" data-equalizer-watch="community">
          <div class="service-box-container">
            <div class="service-box-header">
              <h2>Services for <span>Community</span></h2>
            </div>
            <div class="service-box-body">
              <p>Community outreach events at LCCC and in the community provide a way for every member of the community to enjoy and experience their community college.</p>
            </div>
            <a href="#" class="button">Learn More</a> </div>
        </div>
      </div>
      <div class="yellow-bottom-border"></div>
    </div>
  </section>
  <div class="column row">
    <hr />
  </div>
  <section class="row link-box-row">
    <div class="large-3 medium-6 small-12 columns link-box text-center"> <a href="#" class="box-link"> <img src="images/hp_smsquares_radiology.jpg" alt="" />
      <div class="link-box-label green">University Partnership</div>
      </a> </div>
    <div class="large-3 medium-6 small-12 columns link-box text-center"> <a href="#" class="box-link"> <img src="images/hp_smsquares_stocker.jpg" alt="" />
      <div class="link-box-label purple">Stocker Arts Center</div>
      </a> </div>
    <div class="large-3 medium-6 small-12 columns link-box text-center"> <a href="#" class="box-link"> <img src="images/hp_smsquares_servicemen.jpg" alt="" />
      <div class="link-box-label teal">Lorem Ipsum Dolar</div>
      </a> </div>
    <div class="large-3 medium-6 small-12 columns link-box text-center"> <a href="#" class="box-link"> <img src="images/hp_smsquares_womensbasketball.jpg" alt="" />
      <div class="link-box-label orange">Lorem Ipsum Dolar</div>
      </a> </div>
  </section>
  <div class="column row">
    <hr />
  </div>
  <section class="row news-feed" id="home-news">
    <div class="large-8 medium-8 columns home-left">
      <h2>In the News</h2>
      <article>
        <div class="row">
          <div class="medium-3 columns featured-image text-center medium-text-left"> <img src="images/thumbnail_building.jpg" alt="" /> </div>
          <div class="medium-9 columns">
            <h3 class="post-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque orci</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque orci, finibus in purus nec, pretium blandit tellus. Praesent elementum egestas lorem, ac iaculis leo euismod nec. Nulla ipsum enim, mollis vitae odio lobortis, elementum dictum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque orci, finibus in purus nec, pretium blandit tellus. Praesent elementum egestas lorem, ac iaculis leo euismod nec. Nulla ipsum enim, mollis vitae odio lobortis, elementum dictum ex. Donec ut ipsum congue, Nulla ipsum enim, mollis vitae odio lobortis, elementum dictum ex. Donec ut ipsum congue. </p>
            <a href="#" class="read-more">Continue Reading</a> </div>
        </div>
      </article>
      <div class="column row">
        <hr />
      </div>
      <article>
        <div class="row">
          <div class="medium-3 columns featured-image text-center medium-text-left"> <img src="images/thumbnail_building.jpg" alt="" /> </div>
          <div class="medium-9 columns">
            <h3 class="post-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque orci</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque orci, finibus in purus nec, pretium blandit tellus. Praesent elementum egestas lorem, ac iaculis leo euismod nec. Nulla ipsum enim, mollis vitae odio lobortis, elementum dictum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque orci, finibus in purus nec, pretium blandit tellus. Praesent elementum egestas lorem, ac iaculis leo euismod nec. Nulla ipsum enim, mollis vitae odio lobortis, elementum dictum ex. Donec ut ipsum congue, Nulla ipsum enim, mollis vitae odio lobortis, elementum dictum ex. Donec ut ipsum congue. </p>
            <a href="#" class="read-more">Continue Reading</a> </div>
        </div>
      </article>
      <div class="column row">
        <hr />
      </div>
      <article>
        <div class="row">
          <div class="medium-3 columns featured-image text-center medium-text-left"> <img src="images/thumbnail_building.jpg" alt="" /> </div>
          <div class="medium-9 columns">
            <h3 class="post-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque orci</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque orci, finibus in purus nec, pretium blandit tellus. Praesent elementum egestas lorem, ac iaculis leo euismod nec. Nulla ipsum enim, mollis vitae odio lobortis, elementum dictum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque orci, finibus in purus nec, pretium blandit tellus. Praesent elementum egestas lorem, ac iaculis leo euismod nec. Nulla ipsum enim, mollis vitae odio lobortis, elementum dictum ex. Donec ut ipsum congue, Nulla ipsum enim, mollis vitae odio lobortis, elementum dictum ex. Donec ut ipsum congue. </p>
            <a href="#" class="read-more">Continue Reading</a> </div>
        </div>
      </article>
      <div class="row column text-center"><a href="#" class="button all-news">View All News</a> </div>
      
    </div>
    <aside class="large-4 medium-4 columns">
      <div class="aside-header text-center">
        <h3><img src="images/icons/lccc_white.svg" alt="" height="45" width="67.5" /> Events</h3>
      </div>
      <div class="recent-events">
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">Jan</span> <span class="day">24</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="event-divider"></div>
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">Feb</span> <span class="day">04</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="event-divider"></div>
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">May</span> <span class="day">11</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="event-divider"></div>
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">Jul</span> <span class="day">18</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="event-divider"></div>
        <div class="row event">
          <div class="large-2 medium-3 small-2 columns text-center">
            <div class="calendar-icon"> <span class="month">Oct</span> <span class="day">14</span> </div>
          </div>
          <div class="large-10 medium-9 small-10 columns">
            <h4>Lorem Ipsum Entrepreneurial</h4>
            <p>Lorem ipsum dolar sit amet, consectetur.</p>
            <a href="#" class="read-more">More Details</a> </div>
        </div>
        <div class="text-center"><a class="button" href="#">View All Events</a></div>
      </div>
    </aside>
  </section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
