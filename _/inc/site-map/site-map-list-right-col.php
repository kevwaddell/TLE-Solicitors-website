<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
		
	<h2><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo $company_page->post_title; ?></a></h2>
	
	<?php if ($company_pages) { ?>
		<div class="list-block">
	
			<ul>
			
				<?php foreach ($company_pages as $company_page) { ?>
				<li><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo $company_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<h2><a href="<?php echo get_permalink($downloads_page->ID); ?>"><?php echo $downloads_page->post_title; ?></a></h2>
	
	<?php if ($downloads) { ?>
		<div class="list-block">
	
			<ul>
			
				<?php foreach ($downloads as $download) { ?>
				<li><a href="<?php echo get_permalink($download->ID); ?>"><?php echo $download->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<h2><span>Useful Links</span></h2>
	
	<?php if ($useful_pages) { ?>
		<div class="list-block">
	
			<ul>
			
				<?php foreach ($useful_pages as $useful_page) { ?>
				<li><a href="<?php echo get_permalink($useful_page->ID); ?>"><?php echo $useful_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
						
	<h2><span>Rescources</span></h2>
	
	<?php if ($rescources_pages) { ?>
		<div class="list-block">
	
			<ul>
			
				<?php foreach ($rescources_pages as $rescources_page) { ?>
				<li><a href="<?php echo get_permalink($rescources_page->ID); ?>"><?php echo $rescources_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<h2><span>Legal</span></h2>
	
	<?php if ($legal_pages) { ?>
		<div class="list-block">
	
			<ul>
			
				<?php foreach ($legal_pages as $legal_page) { ?>
									 
				<li><a href="<?php echo get_permalink($legal_page->ID); ?>"><?php echo $legal_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
</div>
