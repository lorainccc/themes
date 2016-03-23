<?php
/**
 * Template Name: Calender
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
	<?php function todayPosts($month, $currentDay, $year){
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
										$todaysevents .= '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
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
     $calendar = "<table class='calendar'>";
     $calendar .= "<caption>$monthName $year</caption>";
     $calendar .= "<tr>";
     // Create the calendar headers
     foreach($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
     } 
     // Create the rest of the calendar
     // Initiate the day counter, starting with the 1st.
     $currentDay = 1;
     $calendar .= "</tr><tr>";
     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.
     if ($dayOfWeek > 0) { 
          $calendar .= "<td colspan='$dayOfWeek' class='not-month'>&nbsp;</td>"; 
     }
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {
          // Seventh column (Saturday) reached. Start a new row.
          if ($dayOfWeek == 7) {
               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";
          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          
          $date = "$year-$month-$currentDayRel";
          
          if ($date == date("Y-m-d")){
           $calendar .= "<td class='day today' rel='$date'><span class='today-date'><a class='datelink-currentday' href='/day/?d=$date'>$currentDay</a></span><span class='event_entries'>".todayPosts($month,$currentDay,$year)."</span></td>";
          }
          else{
           $calendar .= "<td class='day' rel='$date'><span class='day-date'><a class='datelink' href='/day/?d=$date'>$currentDay</a></span><span class='event_entries'>".todayPosts($month,$currentDay,$year)."</span></td>";
          }
   
          // Increment counters
 
          $currentDay++;
          $dayOfWeek++;
     }
     
     
     // Complete the row of the last week in month, if necessary
     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays' class='not-month'>&nbsp;</td>"; 
     }
     
     $calendar .= "</tr>";
     $calendar .= "</table>";
     return $calendar;
}
function build_previousMonth($month,$year,$monthString){
 
 $prevMonth = $month - 1;
  
  if ($prevMonth == 0) {
   $prevMonth = 12;
  }
  
 if ($prevMonth == 12){  
  $prevYear = $year - 1;
 } else {
  $prevYear = $year;
 }
 
 $dateObj = DateTime::createFromFormat('!m', $prevMonth);
 $monthName = $dateObj->format('F'); 
 
 return "<div style='width: 33%; display:inline-block;'><a href='?m=" . $prevMonth . "&y=". $prevYear ."'><- " . $monthName . "</a></div>";
}
function build_nextMonth($month,$year,$monthString){
 
 $nextMonth = $month + 1;
  
  if ($nextMonth == 13) {
   $nextMonth = 1;
  }
 
 if ($nextMonth == 1){  
  $nextYear = $year + 1;
 } else {
  $nextYear = $year;
 }
 
 $dateObj = DateTime::createFromFormat('!m', $nextMonth);
 $monthName = $dateObj->format('F'); 
 
 return "<div style='width: 33%; display:inline-block;'>&nbsp;</div><div style='width: 33%; display:inline-block; text-align:right;'><a href='?m=" . $nextMonth . "&y=". $nextYear ."'>" . $monthName . " -></a></div>";
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
 echo build_previousMonth($month, $year, $monthString);
 echo build_nextMonth($month,$year,$monthString);
 echo build_calendar($month,$year,$dateArray);
?>
</div>
</div>	
<?php 
get_footer();
?>