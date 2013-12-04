<aside id="right-sidebar" class="sidebar">

	<?php 
	$topics_args = array(
	'type'                     => 'post',
	'taxonomy'                 => 'category'
	);  
	
	$topics = get_categories( $topics_args );
	//echo '<pre>';print_r($topics);echo '</pre>';
	$freephone_box_active = get_field('sb_freephone_active', 'option');
	$images = get_field("images");
	 ?>
	 
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-freephone.php'); ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-gallery.php'); ?
	 	
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-items.php'); ?>
		 
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-topics.php'); ?>

	<div class="hidden-xs hidden-sm">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) : ?>
<?php endif; ?>
	</div>
	
</aside>