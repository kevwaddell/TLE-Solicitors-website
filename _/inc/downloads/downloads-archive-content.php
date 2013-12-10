<article>
			
	<header class="page-header">
	<h1><span><?php echo $page->post_title; ?></span></h1>
	</header>
	
	<div class="rule mag-bottom-20"></div>
	
	<?php if ($content) : ?>

	<?php foreach( $content as $content_item ): ?>

	<?php if ($content_item['acf_fc_layout'] == "cn_intro") : ?>

	<div class="intro center lrg">
		<p><?php echo $content_item['intro_txt']; ?></p>
	</div>

	<?php endif;  ?>

	<?php endforeach; ?>
	
	<div class="rule-sml mag-bottom-20"></div>
	
	<?php endif; ?>
		
	<?php echo $page_content; ?>
			
</article>

<div class="rule"></div>
