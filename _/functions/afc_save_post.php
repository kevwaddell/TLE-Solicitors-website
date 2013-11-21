<?php
 
function my_acf_save_post( $post_id )
{
	global $current_screen;
	// vars
	
	if ($current_screen->id == 'tlw_testimonial_cpt') {
		
		//echo '<pre>';print_r($_POST['fields']);echo '</pre>';	
		
		 $name = $_POST['fields']['field_527cfb5d69852'];
		 $name_split = explode(" ", $name);
		 $name_join = implode("-", $name_split);
		 $name_slug = strtolower($name_join);
		 
		 $location = $_POST['fields']['field_527cfb8169853'];
		 $location_split = explode(" ", $location);
		 $location_join = implode("-", $location_split);
		 $location_slug = strtolower($location_join);
		 
		 $slug = $name_slug."-".$location_slug;
		 $title = $name." - ".$location;
		 
		//echo '<pre>';print_r($slug);echo '</pre>';
		//echo '<pre>';print_r($title);echo '</pre>';
		
		wp_update_post( array( 'ID' => $post_id, 'post_title' => $title, 'post_name' => $slug) );
		 
	}
	
	
	if ($current_screen->id == 'tlw_jobs_cpt') {
		
		//echo '<pre>';print_r($_POST['fields']);echo '</pre>';	
		
		 $position = $_POST['fields'][field_5252c9d9bc032];
		 $position_split = explode(" ", $position);
		 $position_join = implode("-", $position_split);
		 $position_slug = strtolower($position_join);
		 
		 $publish_date = $_POST['fields'][field_5252ca45bc033];
		 $slug = $position_slug.'-'.$publish_date;
		 
		//echo '<pre>';print_r($slug);echo '</pre>';
		//echo '<pre>';print_r($title);echo '</pre>';
		
		wp_update_post( array( 'ID' => $post_id, 'post_title' => $position, 'post_name' => $slug) );
		 
	}
	
	
	
}
 
// run before ACF saves the $_POST['fields'] data
add_action('acf/save_post', 'my_acf_save_post', 1);
 
?>