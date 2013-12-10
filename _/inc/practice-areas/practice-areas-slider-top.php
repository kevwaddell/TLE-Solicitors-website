<?php 
$panel_counter = 0;
$list_counter = 0;
?>

<section id="claim-types-section-top" class="top-panel hidden-xs">
	
		<div id="claim-types-slider" class="top-page carousel slide" data-pause="true" data-wrap="false">
		
		<div class="container">
		
		<div class="row">
					  
			  <div class="col-sm-12 col-md-8 col-lg-9">
		
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    	
				    	<?php foreach ($children as $child) : 
					    $panel_counter++;
					    $content = get_field("content", $child->ID);
					    $images = get_field("images", $child->ID);
					    $feat_img_id = false;
					    //echo '<pre>';print_r($images);echo '</pre>';
					    if ($images) {
						    
						    foreach( $images as $img_item ) {
							    
							    if ($img_item['acf_fc_layout'] == "featured_img") {
								   $feat_img_id = $img_item['ft_img'];
								   //echo '<pre>';print_r($feat_img_id);echo '</pre>';
								   $feat_img_src = wp_get_attachment_image_src($feat_img_id,'practice-slider-img');
								   $feat_img_url = $feat_img_src[0]; 
							    }
						    }
					    }
					    ?>
			    		
			    		<div class="item<?php echo ($panel_counter == 1) ? ' active':'' ; ?>"><!-- START PANEL -->
			    		
			    			<?php if ($feat_img_id) { ?>
			    			<img src="<?php echo $feat_img_url; ?>" alt="<?php echo $child->post_title; ?>">
			    			<?php } else { ?>
			    			<?php holder( array( 'height' => '450', 'width' => '840', 'theme' => 'lite-gray' , 'text'=>'Claim Type Image') ); ?>
			    			<?php } ?>
					    	
							<?php if ($content) : ?>
		
							<?php foreach( $content as $content_item ): ?>
					
							<?php if ($content_item['acf_fc_layout'] == "cn_intro") : ?>
						
							<div class="practice-info <?php echo ($panel_counter == 1) ? 'visible':'hidden' ; ?>">
								<?php echo $content_item['intro_txt']; ?>
								<a href="<?php echo get_permalink($child->ID); ?>" title="View details" class="view-btn btn btn-default btn-block">View Details</a>
							</div>
						
							<?php endif;  ?>
						
							<?php endforeach; ?>
						
							<?php endif; ?>
				    		
				    	</div><!-- END PANEL -->
				    	
				    	<?php endforeach; ?>
				    
				  </div><!-- Slides wrapper end -->
			  
			  </div><!-- Col end end -->
			  
			  <div class="col-sm-12 col-md-4 col-lg-3">

			  <!-- Indicators -->
				  <ol class="carousel-indicators row">
				  	<?php foreach ($children as $list) : 
					    $list_counter++;
					   ?>
				  	<li data-target="#claim-types-slider" data-slide-to="<?php echo $list_counter-1; ?>" class="col-sm-6 col-md-12 col-lg-12<?php echo ($list_counter == 1) ? ' active':'' ; ?>">
					<span><?php echo $list->post_title; ?></span>
					</li>
				  	<?php endforeach; ?>
				  </ol>
		  
			  </div><!-- Col end end -->
	
	</div><!-- Row end -->
			  
	</div><!-- Container end -->

	</div><!-- Carousel end -->
	

</section>
