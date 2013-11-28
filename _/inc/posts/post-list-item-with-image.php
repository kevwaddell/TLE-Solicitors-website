<article class="post-list-item with-img">

	<div class="row">
	
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	
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
		
		</div>
		
		<div class="col-sm-4 col-md-4 col-lg-4 hidden-xs hidden-sm">
	
			<figure class="img">
			
			<img src="<?php echo $feat_img_url; ?>" width="<?php echo $feat_img_w; ?>" height="<?php echo $feat_img_h; ?>">
			
			<div class="inset-shadow"></div>
			</figure>
		
		</div>
	
	</div>
	
	<div class="img-corner hidden-xs hidden-sm"></div>
	
	<footer>
		<span class="glyphicon glyphicon-calendar"></span> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo $post_date; ?></time>
		
		<a href="<?php the_permalink(); ?>" class="view-btn">View Article</a>
	</footer>
	
</article>