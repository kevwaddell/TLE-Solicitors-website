		<!-- FOOTER START -->
		
		 <?php 
		 $copyright_notice = get_field('copyright_notice', 'option');
		 $freephone_number = get_field('freephone_tel', 'option');
		 $contact_email = get_field('contact_email', 'option');
		 $standards_logos = get_field('standards_logos', 'option');
		 ?>

		<section class="footer-info">
		
			<footer class="container">
				
				<div class="row">
					
					<div id="footer-nav" class="col-sm-6 col-md-6 col-lg-6">
						<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'bottom-nav', 'container_class' => 'row', 'theme_location' => 'footer_menu', 'fallback_cb' => false ) ); ?>
					</div>
					
					<div id="quick-links-nav" class="col-sm-6 col-md-6 col-lg-5">
						<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'quick-links', 'theme_location' => 'quick_links_menu', 'fallback_cb' => false ) ); ?>
					</div>
					
					<?php if ($standards_logos) { ?>
					<div id="standards-logos">
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
					
					<div id="footer-copyright" class="col-sm-10 col-md-10">
						<div class="footer-copyright-inner">
							<?php echo $copyright_notice; ?>
							<?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
						</div>
					</div>
					
					<div id="social-icons" class="col-sm-2 col-md-2">
						<?php wp_nav_menu(array( 'container' => 'ul', 'container_id' => 'social-links', 'theme_location' => 'social_links_menu', 'fallback_cb' => false ) ); ?>
					</div>
					
				</div>
				
			</footer>
			
		</section>
		
		<div id="side-icon-links" class="<?php echo ( is_single() || is_page() ) ? "with-print":"without-print"; ?> icons-visible">
			<ul>
				<li class="tel-icon with-div disabled"><div class="in-block"><?php echo $freephone_number; ?></div><button><span class="glyphicon glyphicon-phone-alt"></span></button></li>
				<li class="email-icon"><a href="mailto:<?php echo $contact_email; ?>" title="Email TLW Solicitors"><span class="glyphicon glyphicon-send"></span></a></li>
				<?php if (is_single() || is_page()) { ?>
				<li class="print-icon"><a href="javascript:window.print()" title="Print page"><span class="glyphicon glyphicon-print"></span></a></li>
				<?php } ?>
				<li class="search-icon with-div disabled"><div class="in-block"><?php get_search_form(); ?></div><button><span class="glyphicon glyphicon-search"></span></button></li>
			</ul>
		</div>
		
		<?php 
		global $post;

		if (has_sub_field("content", $post->ID)) {
		
			$remove_global_claim_form = get_sub_field('remove_gb_claim_fm', $post->ID);
		
		}
		
		if (has_sub_field("sidebar", $post->ID)) {
		
			$remove_global_claim_form = get_sub_field('remove_claim_form', $post->ID);
		
		}


		if (!$remove_global_claim_form) { ?>
		
		<div id="claim-form-btn" class="side-form-closed btn-visible">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 col-lg-3 col-lg-offset-9">
						<button class="inactive">Start your claim today</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php }  ?>
		
		</div>
		<!-- PAGE WRAP END -->
		
		<?php wp_footer(); ?>

	</body>
</html>