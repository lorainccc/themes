<?php
/**
 * Template Name: Calender List View
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
<div class="small-12 medium-12 large-12 columns contentdiv">
			<div class="small-12 medium-12 large-12 columns pagediv">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'eventscalendar' );
					endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
	<div class="small-12 medium-12 large-12 columns">
	<?php 
			
				$displaycount =1;
				$startday = '';
				$startdate = '';
				$today = getdate();		
				$currentDay = $today['mday'];
				$lastdaydisplayed = '';
				$startdaylastweek = $currentDay - 8;
				$currentmonthdisplayed = '';
				$currentyeardisplayed = '';
	function todayPosts($month, $currentDay, $year){
				global $post;
				$todaysevents = '';
				$temp = strLen($currentDay);
				$twoDay = '';
	   $nextTwoDay = '';
				if ($temp < 2){
					$twoDay = '0' . $currentDay;
				}else{
					$twoDay = $currentDay;
				}
			 $nextDay = $currentDay + 1;
				if ($temp < 2){
					$nextTwoDay = '0' . $currentDay;
				}else{
					$nextTwoDay = $currentDay;
				}
				$args = array(
						'post_type' => 'lccc_event',
						'meta_key' => 'event_start_date',
						'meta_value' => $year . '-' . $month . '-' . $twoDay,
					'meta_value_num' => time(),
						'orderby' =>'meta_value_num',
						'compare' => 'BETWEEN',
						'type' => 'DATE'
					);
				query_posts( $args );
				// The Query
			$the_query = new WP_Query( $args );
				// The Loop
				if ( $the_query->have_posts() ) {
										$todaysevents .= '<ul class="todayseventslist">';
										while ( $the_query->have_posts() ) {
										$the_query->the_post();
										$eventdate = event_meta_box_get_meta('event_meta_box_event_start_date_and_time_');	
										$date=strtotime($eventdate);
										$today_event_month=date("m",$date);
										$today_event_day=date("j",$date);	
										$starttime =  get_post_meta($post->ID, 'event_start_time', true);	
										$todaysevents .= '<li><div class="small-12 medium-2 large-2 columns"><p class="event-time">'.$starttime.'</p></div><div class="small-12 medium-10 large-10 columns"><div class="small-12 medium-12 large-12 columns"><a href="'.get_the_permalink().'"><h5 class="event-title">'.get_the_title().'</h5></a></div><div class="small-12 medium-12 large-12 columns">'.get_the_excerpt().'</div></div></li>';
									}
									$todaysevents .= '</ul>';
								} else {
									// no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();
		return $todaysevents;
}
?>
<?php
function build_calendar($month,$year,$dateArray) {
					global $startday;
					global $lastdaydisplayed;
					global $displaycount;
					global $currentmonthdisplayed;
					global $currentyeardisplayed;
     // Create array containing abbreviations of days of week.
     $daysOfWeek = array('Sun','Mon','Tues','Wed','Thurs','Fri','Sat');
     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);
     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);
     // What is the name of the month in question?
     $monthName = $dateComponents['month'];
     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];
     // Get today's date and extract the day of the month to start on.
	    $today = getdate();		
					$currentDay = $today['mday'];
					// Create the table tag opener and day headers
     $calendar = "<h3 class='calendar-list-header'>Week Of $monthName $currentDay, $year</h3><br />";
					$calendar .= "<ul class='calendarlist'>";
     //$calendar .= "<caption>$monthName $year</caption>";
     //$calendar .= "<li>";
     // Create the calendar headers
     //foreach($daysOfWeek as $day) {
     //     $calendar .= "<th class='header'>$day</th>";
     //} 
     // Create the rest of the calendar
    
     // Initiate the day counter, starting with the 1st.
					//$currentDay = 1;
	
					//$calendar .= "<li>";
     
					// The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.
     //if ($dayOfWeek > 0) { 
     //     $calendar .= "<div colspan='$dayOfWeek' class='not-month'>&nbsp;</div>"; 
     //}
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {
          // Seventh column (Saturday) reached. Start a new row.
          if ($dayOfWeek == 7) {
               $dayOfWeek = 0;

															//$calendar .= "</li><li>";
          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          
          $date = "$year-$month-$currentDayRel";
          
          if ($date == date("Y-m-d")){
           $calendar .= "<li class='day today' rel='$date'><div class='daycontainer'><span class='today-date'><a class='datelink-currentday' href='/day/?d=$date'>$monthName $currentDay, $year</a></span><span class='event_entries'>".todayPosts($month,$currentDay,$year)."</span></div></li>";
          }
          else{
           $calendar .= "<li class='day' rel='$date'><div class='daycontainer'><span class='day-date'><a class='datelink' href='/day/?d=$date'>$monthName $currentDay, $year</a></span><span class='event_entries'>".todayPosts($month,$currentDay,$year)."</span></div></li>";
          }
										$currentmonthdisplayed = $month;
										$currentyeardisplayed = $year; 
										$lastdaydisplayed = $currentDay;
          // Increment counters
          $currentDay++;
										$startday = $currentDay; 
          $dayOfWeek++;
										$displaycount++;
     }
     
     
     // Complete the row of the last week in month, if necessary
     //if ($dayOfWeek != 7) { 
     //     $remainingDays = 7 - $dayOfWeek;
     //     $calendar .= "<div colspan='$remainingDays' class='not-month'>&nbsp;</div>"; 
     //}
     
     //$calendar .= "</li>";

					$calendar .= "</ul>";
     return $calendar;
}
function add_to_list($month,$year,$dateArray) {
					global $startday;
					global $lastdaydisplayed;
					global $displaycount;
					global $currentmonthdisplayed;
					global $currentyeardisplayed;
					$daysinnemonth = 8 - $displaycount;
     // Create array containing abbreviations of days of week.
     $daysOfWeek = array('Sun','Mon','Tues','Wed','Thurs','Fri','Sat');
     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);
     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);
     // What is the name of the month in question?
     $monthName = $dateComponents['month'];
     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];
     // Create the table tag opener and day headers
     $calendar = "<h4  class='calendar-month-subheader'>$monthName $year</h3>";
					$calendar .= "<ul class='calendarlist'>";
     //$calendar .= "<caption>$monthName $year</caption>";
     //$calendar .= "<li>";
     // Create the calendar headers
     //foreach($daysOfWeek as $day) {
     //     $calendar .= "<th class='header'>$day</th>";
     //} 
     // Create the rest of the calendar
     // Get today's date and extract the day of the month to start on.
	    //$today = getdate();		
					//$currentDay = $today['mday'];
	
     // Initiate the day counter, starting with the 1st.
					$currentDay = 1;
				
					//$calendar .= "<li>";
     
					// The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.
     //if ($dayOfWeek > 0) { 
     //     $calendar .= "<div colspan='$dayOfWeek' class='not-month'>&nbsp;</div>"; 
     //}
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $daysinnemonth) {
          // Seventh column (Saturday) reached. Start a new row.
          if ($dayOfWeek == 7) {
               $dayOfWeek = 0;

															//$calendar .= "</li><li>";
          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          
          $date = "$year-$month-$currentDayRel";
          
           if ($date == date("Y-m-d")){
           $calendar .= "<li class='day today' rel='$date'><div class='daycontainer'><span class='today-date'><a class='datelink-currentday' href='/day/?d=$date'>$monthName $currentDay, $year</a></span><span class='event_entries'>".todayPosts($month,$currentDay,$year)."</span></div></li>";
          }
          else{
           $calendar .= "<li class='day' rel='$date'><div class='daycontainer'><span class='day-date'><a class='datelink' href='/day/?d=$date'>$monthName $currentDay, $year</a></span><span class='event_entries'>".todayPosts($month,$currentDay,$year)."</span></div></li>";
          }
						$lastdaydisplayed = $date;
						$currentmonthdisplayed = $month;
						$currentyeardisplayed = $year; 
          // Increment counters
          $currentDay++;
										if ($currentDay == $numberDays && $month == 12){
												$year ++;
										}
											$startday = $currentDay; 
          $dayOfWeek++;
										$displaycount++;
     }
     
     
     // Complete the row of the last week in month, if necessary
     //if ($dayOfWeek != 7) { 
     //     $remainingDays = 7 - $dayOfWeek;
     //     $calendar .= "<div colspan='$remainingDays' class='not-month'>&nbsp;</div>"; 
     //}
     
     //$calendar .= "</li>";

					$calendar .= "</ul>";
     return $calendar;
}

function build_prevWeek($currentmonthdisplayed,$year,$monthString){
 global $lastdaydisplayed;
	global $currentmonthdisplayed;
	global $startday;
	global $startdate;
	global $currentyeardisplayed;
	$firstDayOfMonth = mktime(0,0,0,$month,1,$year);
	$numberDays = date('t',$firstDayOfMonth);
	$startdate = '';
	$today = getdate();		
	$currentDay = $today['mday'];
	$startday = $startday-14;
	if($startday < 0){
				$startday = $numberDays + $startday;
				$currentmonthdisplayed = $currentmonthdisplayed - 1;	
							if($currentmonthdisplayed == 0){
										$currentmonthdisplayed = 12;
										$currentyeardisplayed = $currentyeardisplayed - 1;	
										$startdate = "$currentyeardisplayed-$currentmonthdisplayed-$startday";	
				}else{
										$startdate = "$currentyeardisplayed-$currentmonthdisplayed-$startday";	
				}
	}else{
	echo $startday;
	}
 return "<div style='display:inline-block;'>&nbsp;</div><div style='text-align:center;'><a href='/week/?d=$startdate'><- Previous 7 Days</a></div>";
}
function build_nextWeek($currentmonthdisplayed,$year,$monthString){
 global $lastdaydisplayed;
	global $currentmonthdisplayed;
 return "<div style='display:inline-block;'>&nbsp;</div><div style='text-align:center;'><a href='/week/?d=$lastdaydisplayed'>Next 7 Days -></a></div>";
}
?> 

<?php
   parse_str($_SERVER['QUERY_STRING']);  
 
   if ($m == ""){
    
    $dateComponents = getdate();
    $month = $dateComponents['mon'];
    $year = $dateComponents['year'];
   } else {
   
     $month = $m;
     $year = $y;
   
   }
$monthString = array();
$dateArray = array();

 echo build_calendar($month,$year,$dateArray);
	if ($displaycount<8){
	$nxtmonth = $month+1;
	if ($nxtmonth == 13){
		$nxtmonth = 1;
		$startyear ++;
	}		
	echo add_to_list($nxtmonth,$year,$dateArray);
	}
?>
<ul class="small-block-grid-1 small-block-grid-3 large-block-grid-3">		
						<li><?php	echo build_prevWeek($currentmonthdisplayed,$year,$monthString);	?></li>
							<li><div style='display:inline-block;'>&nbsp;</div><div style='text-align:center;'><a href="/list">Today</a></div></li>
						<li><?php	echo build_nextWeek($currentmonthdisplayed,$year,$monthString);	?></li>
</ul>
</div>
</div>	
<?php 
get_footer();
?>