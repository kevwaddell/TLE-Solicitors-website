<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
		
	<h2><a href="<?php echo get_permalink($news_page_id); ?>"><?php echo $news_page->post_title; ?></a></h2>
	
	<?php if ($topics_nopractice) { ?>
		<div class="list-block">
			<ul>
		<?php foreach ($topics_nopractice as $topic) { ?>

				<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
			
		<?php } ?>
			</ul>
		</div>
			
	<?php } ?>

	
	<?php if ($topics) { ?>
					
	<h2><span><?php echo $news_page->post_title; ?>: Topics</span></h2>
	
			<div class="list-block">
			
				<ul>
					<?php foreach ($topics as $topic) { ?>
					<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
					<?php } ?>
				</ul>
				
			</div>
			
	<?php } ?>
	
	<h2><span><?php echo $news_page->post_title; ?>: Subjects</span></h2>
	
	<?php if ( function_exists('wp_tag_cloud') ) : ?>
		<div class="list-block">
			<?php wp_tag_cloud('smallest=14&largest=14&unit=px&format=list'); ?>
		</div>
	
	<?php endif; ?>
		
</div>