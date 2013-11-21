<?php 
$name = get_field('client_name');
$location = get_field('location');
?>

<article class="feedback-list-item">
	
	<div class="txt-wrap">
		<?php the_content(); ?>
	</div>
	
	<div class="details"><?php echo $name; ?>, <?php echo $location; ?></div>
	
</article>