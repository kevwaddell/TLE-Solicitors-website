<?php include (STYLESHEETPATH . '/_/inc/sidebar/pages-vars.php'); ?>

<aside id="right-sidebar" class="sidebar">

	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-freephone.php'); ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-items.php'); ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-related-pages.php'); ?>	
	
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-downloads-cpt.php'); ?>		
	
	<?php include (STYLESHEETPATH . '/_/inc/sidebar/sidebar-practices.php'); ?>		
		
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Pages Sidebar') ) : ?>
	
	<?php endif; ?>
	
</aside>