<?php

   //LCCC Custom Breadcrumb Display Code
  if (function_exists('lccc_breadcrumb')){
    if (is_home() || is_front_page()) {
     echo lccc_breadcrumb() . get_bloginfo('name') ;
    } elseif ( is_category() ) {
    	echo "<a href='" . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> > " . single_cat_title() ; 
    }elseif ( is_archive() ) {
	echo "<a href='" . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> > " . single_cat_title( '', false ) ;
    } elseif ( is_tax() ) {
        echo "<a href='" . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> > " . single_cat_title( '', false ) ;	
    }elseif ( is_page() && $post->post_parent > 0 ) {  
 echo "<a href='" . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> > ";	
     }elseif ( is_single() ) {
	echo "<a href='" . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> > " . get_the_term_list( $post->ID, 'event_categories','', ' , ' , '') . " > " . get_the_title()  ;		
    }else {
    	echo "<a href='" . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> > " . get_the_title() ;
    };
   };
  ?>