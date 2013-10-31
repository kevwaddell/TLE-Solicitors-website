<?php 
$post_date = get_the_date();
?>

<article class="post-list-item">
	
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	
	<div class="txt-wrap">
		<?php the_excerpt(); ?>
	</div>
	
	<footer>
		<span class="glyphicon glyphicon-calendar"></span> <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo $post_date; ?> <?php the_time(); ?></time>&nbsp;&nbsp;~&nbsp;&nbsp; 
		<span class="glyphicon glyphicon-comment"></span> <?php comments_popup_link('<span class="Leave a Comment', '1 Comment', '% Comments'); ?>
		
		<a href="<?php the_permalink(); ?>" class="view-btn">View Article <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
	</footer>
	
</article>