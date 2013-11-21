<?php 
$end_date_raw = get_field('end_date');
$end_date_convert = strtotime($end_date_raw);
$end_date = date('l jS F, Y', $end_date_convert);
$images = get_field("images");
$content = get_field("content");
?>	