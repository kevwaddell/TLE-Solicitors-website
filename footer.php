		<!-- FOOTER START -->
		<section class="footer-info">
		
			<footer class="container">
				
				<div class="row">
					
					<div id="footer-nav" class="col-sm-6 col-md-6">
						<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'bottom-nav', 'container_class' => 'row', 'theme_location' => 'footer_menu', 'fallback_cb' => false ) ); ?>
					</div>
					
					<div id="quick-links-nav" class="col-sm-5 col-md-5">
						<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'quick-links', 'theme_location' => 'quick_links_menu', 'fallback_cb' => false ) ); ?>
					</div>
					
					<div id="standards-logos">
						<?php holder( array( 'height' => '75', 'width' => '175', 'theme' => 'gray' ) ); ?>
						<?php holder( array( 'height' => '75', 'width' => '175', 'theme' => 'gray' ) ); ?>
					</div>
					
				</div>
				
				<div class="footer-rule"></div>
				
				<div class="row">
					
					<div id="footer-copyright" class="col-sm-10 col-md-10">
						<div class="footer-copyright-inner">
							<p>TLW solicitors is a trading name of TLW LLP a limited liability partnership registered in England (Registration OC314139).</p>
							<p>TLW LLP are a firm of solicitors authorised and regulated by the Solicitors Regulation Authority.</p>
							<p>TLW LLP has its registered office at 9 Hedley Court, Orion Business, North Shields, NE29 7ST. VAT registration no. 746973089.</p>
							<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
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
				<li class="tel-icon with-div disabled"><div class="in-block">0800 169 5925</div><button><span class="glyphicon glyphicon-phone-alt"></span></button></li>
				<li class="email-icon"><a href="mailto:kwaddell@tlwsolicitors.co.uk" title="Email TLW Solicitors"><span class="glyphicon glyphicon-send"></span></a></li>
				<?php if (is_single() || is_page()) { ?>
				<li class="print-icon"><a href="javascript:window.print()" title="Print page"><span class="glyphicon glyphicon-print"></span></a></li>
				<?php } ?>
				<li class="search-icon with-div disabled"><div class="in-block"><?php get_search_form(); ?></div><button><span class="glyphicon glyphicon-search"></span></button></li>
			</ul>
		</div>
		
		<?php 
		$make_a_claim_page = get_page_by_title("Make a Claim");

		if ($post->ID != $make_a_claim_page->ID) { ?>
		
		<div id="claim-form-btn" class="side-form-closed btn-visible">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 col-lg-3 col-lg-offset-9">
						<button class="inactive">Start your claim today <span class="glyphicon glyphicon-chevron-right"></span></button>
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