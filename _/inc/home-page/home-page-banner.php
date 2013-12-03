<section id="page-banner-lrg">
		
	<div class="container">
	
		<div class="banner-img" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/_/img/banner-img-3.jpg);">
			<?php //holder( array( 'height' => '540', 'width' => '1140', 'theme' => 'lite-gray' , 'text'=>'Banner image') ); ?>
		</div>
		
		<div class="pattern-bg hidden-xs hidden-sm" style="right: 15px;"></div>	
		<div class="page-banner-corner hidden-xs"></div>
		
		<p class="tag">For Added TLC Think&hellip;</p>
		
		<div id="home-banner-btn" class="promo-wrap hidden-xs">
			<div class="promo-top">
				<p class="normal caps">Freephone:</p>
				<p class="italic"><span class="glyphicon glyphicon-earphone"></span> 0800 169 5925</p>
			</div>
			
			<div class="promo-bottom hidden-sm">
				<p>Our online contact form easily allows you to begin your free assessment.</p>
				
				<?php if (!$is_iphone) : ?>
				<button class="claim-btn btn btn-default btn-lg btn-block">Start now!</button>
				
				<?php else:  
				$make_a_claim_page = get_page_by_title('Make a Claim');	
				?>
				 
				<a href="<?php echo get_permalink($make_a_claim_page->ID);?>" class="claim-btn-link btn btn-default btn-lg btn-block">Start now!</a>
				
				<?php endif;  ?>
				
			</div>
		</div>
		
	</div>

</section>
