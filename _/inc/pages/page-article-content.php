<article class="page">
				
	<header class="page-header">
	<h1><span><?php the_title(); ?></span></h1>
	
	<?php if ($position) : ?>
	<div class="head-tag"><?php echo $position; ?></div>
	<?php endif; ?>
	
	<?php if ($email) : ?>
	<div class="head-email">
	<span class="glyphicon glyphicon-envelope"></span> <a href="mailto:<?php echo $email; ?>" title="Email: <?php echo $post->post_title; ?>"><?php echo $email; ?></a></div>
	<?php endif; ?>
	
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
		
	<div class="rule-sml"></div>
	
	<?php endif; ?>
	
	<?php the_content(); ?>
	
	<?php if (!$children) { ?>
	<p class="tagline">For added TLC Think TLW Solicitors.</p>
	<?php }  ?>

</article>
