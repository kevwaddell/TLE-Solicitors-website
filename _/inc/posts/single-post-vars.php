<?php 
$post_date = get_the_date('l - jS F - Y');
$topics = get_the_category_list(' ');
$subjects = get_the_tag_list('<strong>Subjects:</strong> ', ' ');
$images = get_field("images");
$content = get_field("content");
	
//echo '<pre>';print_r($images);echo '</pre>';
?>	
