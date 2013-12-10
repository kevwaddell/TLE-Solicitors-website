<article class="page">
				
	<header class="page-header">
	<h1><span><?php the_title(); ?></span></h1>
	</header>
			
	<div class="rule mag-bottom-20"></div>
	
	<?php if ($content) : ?>
	<div class="intro center lrg">
		<?php foreach( $content as $content_item ): ?>

		<?php if ($content_item['acf_fc_layout'] == "cn_intro") : ?>
	

		<p><?php echo $content_item['intro_txt']; ?></p>
	
		<?php endif;  ?>
	
		<?php endforeach; ?>
		
	</div>
	
	<div class="rule-sml"></div>
	
	<?php endif; ?>
	
	<?php the_content(); ?>
	
	<?php if (!$children) { ?>
	
	<div class="rule"></div>
	
	<?php }  ?>
	
	<p class="tagline">For added TLC Think TLW Solicitors.</p>
	
</article>
