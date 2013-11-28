<div id="side-nav-wrap">
	
	<button type="button" class="close side-nav-close">&times;</button>
 
	<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'side-nav', 'theme_location' => 'side_menu', 'fallback_cb' => false ) );  ?>

	<div class="side-nav-logo">
	
	<div class="social-links-wrap">
		<?php wp_nav_menu(array( 'container' => 'ul', 'container_id' => 'social-links', 'theme_location' => 'social_links_menu', 'fallback_cb' => false ) ); ?>
	</div>
	
	<div class="logo"></div>
		
	</div>

</div>