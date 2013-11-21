<article class="post-list-item">
	
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	
	<div class="txt-wrap">
		<?php if ($intro_text) : ?>
				
		<p><?php echo $intro_text; ?></p>
		
		<?php else: ?>
		
		<?php the_excerpt(); ?>
		
		<?php endif; ?>

	</div>
	
	<footer>
		<span class="glyphicon glyphicon-calendar"></span> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo $post_date; ?> <?php the_time(); ?></time>
		
		<a href="<?php the_permalink(); ?>" class="view-btn">View Article</a>
	</footer>
	
</article>