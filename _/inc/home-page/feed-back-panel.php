<?php 
$feedback_args = array(
'post_type'	=> 'tlw_testimonial_cpt',
'posts_per_page'	=> 5,
'meta_key'	=> 'quote',
'orderby'	=> 'rand'
);

$feedback = get_posts($feedback_args);
$feedback_counter = 0;

//echo '<pre>';print_r($feedback);echo '</pre>';

 ?>

<section id="testimonials">
	<span class="icon"></span>
	
	<div class="container">
	
			<span class="bracket bracket-left"></span>
			
			<div id="testy-carousel" class="carousel slide">
				
				<div class="carousel-inner">
				
				<?php foreach ($feedback as $quote) { 
				$feedback_counter++;
				$quote_txt = get_field('quote', $quote->ID);	
				$client_name = get_field('client_name', $quote->ID);		
				$location = get_field('location', $quote->ID);	
				?>
					<div class="quote item <?php echo ($feedback_counter == 1) ? " active":""; ?>">
						<blockquote><?php echo $quote_txt; ?></blockquote>
						
						<p><?php echo $client_name; ?>, <?php echo $location; ?></p>
					</div>
				<?php } ?>
			
				</div>
			
			</div>
			
			<span class="bracket bracket-right"></span>
	</div>

	</section>
