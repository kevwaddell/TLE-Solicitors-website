		<?php 
		$home_screen_seen = $_COOKIE["home_screen"]; 
		$copyright_notice = get_field('copyright_notice', 'option');
		$freephone_number = get_field('freephone_tel', 'option');
		$contact_email = get_field('contact_email', 'option');
		$standards_logos = get_field('standards_logos', 'option');
		global $is_iphone;
		?>
		
		<!-- FOOTER START -->
		<section class="footer-info in-flow">
		
			<footer class="container">
				
				<div class="row">
					
					<div id="footer-nav" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 hidden-xs">
						<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'bottom-nav', 'container_class' => 'row', 'theme_location' => 'footer_menu', 'fallback_cb' => false ) ); ?>
					</div>
					
					<div id="quick-links-nav" class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
						<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'quick-links', 'theme_location' => 'quick_links_menu', 'fallback_cb' => false ) ); ?>
					</div>
					
					<?php if ($standards_logos) { ?>
					<div id="standards-logos" class="hidden-xs hidden-sm">
						<p>Members of:</p>
						
						<?php foreach ($standards_logos as $logo) { 
						$logo_id = 	$logo['logo'];
						$logo_src = wp_get_attachment_image_src($logo_id,'standards-logo');
						$logo_url = $logo_src[0];
						?>
						
						<?php if ($logo_id) { ?>
						<a href="<?php echo $logo['url']; ?>" target="_blank" title="<?php echo $logo['title']; ?>">
							<img src="<?php echo $logo_url; ?>" alt="<?php echo $logo['title']; ?>">
						</a>
						<?php } else {?>
							
						<a href="<?php echo $logo['url']; ?>" target="_blank" title="<?php echo $logo['title']; ?>"><?php echo $logo['title']; ?></a>
						
						<?php } ?>

						<?php } ?>
						
					</div>
					<?php } ?>
					
				</div>
				
				<div class="footer-rule"></div>
				
				<div class="row">
					
					<div id="footer-copyright" class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
						<div class="footer-copyright-inner">
							<?php echo $copyright_notice; ?>
							<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
						</div>
					</div>
					
					<div id="social-icons" class="col-sm-12 col-sm-12 col-md-2 col-lg-2">
						<?php wp_nav_menu(array( 'container' => 'ul', 'container_id' => 'social-links', 'theme_location' => 'social_links_menu', 'fallback_cb' => false ) ); ?>
					</div>
					
				</div>
				
			</footer>
			
		</section>
		
		<?php if (!$is_iphone) : ?>
		<div id="side-icon-links" class="without-print icons-hidden hidden-xs hidden-sm">
			<ul>
				<li class="tel-icon with-div disabled"><div class="in-block"><?php echo $freephone_number; ?></div><button><span class="glyphicon glyphicon-phone-alt"></span></button></li>
				<li class="email-icon"><a href="mailto:<?php echo $contact_email; ?>" title="Email TLW Solicitors"><span class="glyphicon glyphicon-envelope"></span></a></li>
				<li class="search-icon with-div disabled"><div class="in-block"><?php get_search_form(); ?></div><button><span class="glyphicon glyphicon-search"></span></button></li>
			</ul>
		</div>
		<?php endif;  ?>
		
		<?php if (!$is_iphone) : ?>
		<div id="claim-form-btn" class="btn-hidden hidden-xs hidden-sm">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 col-lg-3 col-lg-offset-9">
						<button class="inactive">Start your claim today</button>
					</div>
				</div>
			</div>
		</div>
		<?php endif;  ?>
		
		</div>
		<!-- PAGE WRAP END -->
		
		<?php if ($is_iphone) : ?>
		
		<button id="mobile-nav-btn" class="glyphicon glyphicon-th-list visible-xs visible-sm visible-md"><span class=""></span></button>
		
		<div id="mobile-nav" class="mobile-nav-closed visible-xs visible-sm visible-md">
			
			<div id="mobile-nav-wrap">
			
				<button type="button" class="close mobile-menu-nav-close">&times;</button>
	 
				<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'side-nav', 'theme_location' => 'side_menu', 'fallback_cb' => false ) );  ?>
			</div>
		
		</div>
		<?php else:  ?>
		
		<button id="mobile-nav-btn" class="glyphicon glyphicon-th-list visible-xs visible-sm"><span class=""></span></button>
		
		<div id="mobile-nav" class="mobile-nav-closed visible-xs visible-sm">
			
			<div id="mobile-nav-wrap">
			
				<button type="button" class="close mobile-menu-nav-close">&times;</button>
	 
				<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'side-nav', 'theme_location' => 'side_menu', 'fallback_cb' => false ) );  ?>
			</div>
		
		</div>
		
		<?php endif;  ?>
		
		<noscript>
		
		<?php $no_script_notice = get_field('no_script_notice', 'option'); ?>
		
			<div class="no-script-wrap">
				<div class="no-script-inner">
					<?php echo $no_script_notice; ?>
					<a href="/" title="refresh" class="btn btn-default btn-lg btn-block btn-danger"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
				</div>
			</div>
			
		</noscript>
		
		<?php wp_footer(); ?>

	</body>
</html>