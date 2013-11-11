<?php 
$promo_links_args = array(
	'post_type'	=> 'page',
	'include'	=> array(49, 109)
);

$promo_links = get_posts($promo_links_args);
//echo '<pre>';print_r($promo_links);echo '</pre>';
 ?>

<section id="promo-links">
	
	<div class="container">
		
		<div class="row">
		
		<?php foreach ($promo_links as $promo_link) { 
		$btn_title = get_field('btn_title', $promo_link->ID);	
		?>
		<div class="col-sm-6 col-md-6">
				
				<a href="newsletter/" class="btn btn-default btn-lg btn-block">
					<?php echo $btn_title; ?>
					<span class="<?php echo $promo_link->post_name; ?>"></span>
				</a>
				
		</div>
		<?php } ?>
		
		</div>
	
	</div>

</section>