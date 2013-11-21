<?php 
$end_date_raw = get_field('end_date');
$end_date_convert = strtotime($end_date_raw);
$end_date = date('l jS F, Y', $end_date_convert);
$content = get_field('content');

if ($content) {
	
	foreach($content as $content_item) {
		
		if ($content_item['acf_fc_layout'] == "cn_intro") {
		$intro_text = $content_item['intro_txt'];	
		}
		
	}
}

?>

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
		<span class="glyphicon glyphicon-calendar"></span>Closing date: <time><?php echo $end_date; ?></time>
		
		<a href="<?php the_permalink(); ?>" class="view-btn">View Position</a>
	</footer>
	
</article>