<?php 
$post_date = get_the_date();
?>

<article class="post-list-item">
	
	<header>
		<h2><a href="#">Job title to go in here</a></h2>
	</header>
	
	<div class="txt-wrap">
		<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis. Sed posuere consectetur est at lobortis.</p>
	</div>
	
	<footer>
		<span class="glyphicon glyphicon-calendar"></span> Closing date: <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>16th October 2013</time>&nbsp;&nbsp;~&nbsp;&nbsp;<span class="glyphicon glyphicon-calendar"></span> Start date: <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>16th October 2013</time>
		
		<a href="<?php the_permalink(); ?>" class="view-btn">View Position</a>
	</footer>
	
</article>