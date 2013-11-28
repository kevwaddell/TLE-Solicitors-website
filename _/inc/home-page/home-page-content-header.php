<header class="header" role="banner">
			
		<div class="container">
		
			<div class="row">
			
				<div id="logo" class="col-sm-3 col-md-3">
					<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				</div>
				
				<?php if (!$is_iphone) : ?>
				<div id="top-nav" class="col-sm-9 col-md-9 hidden-xs hidden-sm">
					<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'main-nav', 'theme_location' => 'main_menu', 'fallback_cb' => false ) ); ?>
				</div>
				<?php endif;  ?>
				
			</div>
		
		</div>
	
</header>
