<aside id="right-sidebar" class="sidebar">

	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-freephone.php'); ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-gallery.php'); ?>
	 	
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-items.php'); ?>
		 
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-topics.php'); ?>

	<div class="hidden-xs hidden-sm">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) : ?>
<?php endif; ?>
	</div>
	
</aside>