<?php 
$post_date = get_the_date();
?>

<article class="post-list-item with-img">

	<div class="row">
	
		<div class="col-sm-8 col-md-8 col-lg-8">
	
			<header>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header>
			
			<div class="txt-wrap">
				<?php the_excerpt(); ?>
			</div>
		
		</div>
		
		<div class="col-sm-4 col-md-4 col-lg-4">
	
			<figure class="img">
			<?php holder( array( 'height' => '150', 'width' => '245', 'theme' => 'lite-gray' , 'text'=>'Thumbnail') ); ?>
			<div class="inset-shadow"></div>
			</figure>
		
		</div>
	
	</div>
	
	<footer>
		<span class="glyphicon glyphicon-calendar"></span> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo $post_date; ?> @ <?php the_time(); ?></time>&nbsp;&nbsp;~&nbsp;&nbsp; 
		<span class="glyphicon glyphicon-comment"></span> <?php comments_popup_link('<span class="Leave a Comment', '1 Comment', '% Comments'); ?>
		
		<a href="<?php the_permalink(); ?>" class="view-btn">View Article <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
	</footer>
	
</article>