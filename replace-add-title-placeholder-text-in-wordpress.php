<?php

function yourtextdomain_change_mentor_title_text( $title ){
	$screen = get_current_screen();
  
	if  ( 'custom-post-name' == $screen->post_type ) {
		 $title = 'Title Placeholder Type Here';
	}
  
	return $title;
}
  
add_filter( 'enter_title_here', 'yourtextdomain_change_mentor_title_text' );