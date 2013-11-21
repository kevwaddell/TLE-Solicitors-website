<?php 

if ($post->post_name == "our-team") {
$slug = $post->post_name;
$id = $post->ID;
} else {
$slug = $team_page->post_name;
$id = $team_page->ID;
}

$num_cols = 4;
$col_counter = 0;
$panel_counter = 1;

$team_args = array(
'post_type'	=> 'page',
'posts_per_page'	=> -1,
'post_parent'	=> $id,
'orderby'	=> 'menu_order',
'order'	=> 'ASC'
);
$team = get_posts($team_args);

$team_total = count($team);
$panels_total = ceil($team_total/$num_cols);

//'<pre>';print_r($panels_total);echo '</pre>';
 ?>

<section id="<?php echo $slug; ?>-section">

	<span class="icon"></span>
	
	<?php if ($team_page) { ?>
	<h2><?php echo $team_page->post_title; ?></h2>
	<?php }  ?>

	<!-- Container start -->
	<div class="container">
	
		<div id="our-team-slider" class="carousel slide" data-pause="true" data-wrap="false">
		
		  <?php if ($panels_total > 1) { ?>

		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		  	<?php for ($p = 0; $p<$panels_total; $p++) { ?>
		  	<li data-target="#our-team-slider" data-slide-to="<?php echo $p; ?>"<?php echo ($p == 0) ? ' class="active"':'' ; ?>></li>
		  	<?php } ?>
		  </ol>
		  
		  <?php }  ?>
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		   
		    <div class="item active"><!-- START PANEL -->
		    
		    	<div class="row"><!-- START ROW -->
		    	
		    	
		    	<?php foreach ($team as $profile) { 
			    $col_counter++;
			    $position = get_field('position', $profile->ID);
			    $email = get_field('email', $profile->ID);
			    $profile_img_id = get_field('profile_image', $profile->ID);
			    		
			    if ($profile_img_id) {
		    	$profile_img_src = wp_get_attachment_image_src($profile_img_id ,'profile-img');
	    		$profile_img_url = $profile_img_src[0];
	    		$profile_img_w = $profile_img_src[1];
	    		$profile_img_h = $profile_img_src[2];
	    		}		    	
	    		?>
		    	
		    	<div class="col-sm-3 col-md-3">
			    		
		    		<div class="profile-info">
		    			<figure>
		    				<div class="border">
		    					<?php if ($profile_img_id) { ?>
		    					<img src="<?php echo $profile_img_url; ?>" alt="<?php echo $profile->post_title; ?>" width="<?php echo $profile_img_w; ?>" height="<?php echo $profile_img_h; ?>">
		    					<?php } else { ?>
		    					<?php holder( array( 'height' => '270', 'width' => '268', 'theme' => 'lite-gray' , 'text'=>'Profile image') ); ?>
		    					<?php } ?>
						    </div>
		    			</figure>
		    			
		    			<p class="name"><?php echo $profile->post_title; ?></p>
		    			<p class="position"><?php echo $position; ?></p>
		    			<a href="mailto:<?php echo $email; ?>" class="email-link"><span class="glyphicon glyphicon-envelope"></span> <?php echo $email; ?></a>
		    			
		    			<a href="<?php echo get_permalink($profile->ID); ?>" class="more-info-link btn btn-default btn-block">More details</a>
		    			
		    		</div>
		    		
	    		</div>
	    		
	    		<!-- Check if column counter equals 4 then add a new panel -->
	    		<?php if ( $col_counter == $num_cols && $panel_counter < $panels_total) { 
		    	$col_counter = 0;	
		    	$panel_counter++;
	    		?>
		    	
		    		</div> <!-- END ROW -->
		    	
		    	</div> <!-- END PANEL -->
	    		
	    		<div class="item"> <!-- START PANEL -->
		    	
		    		<div class="row"> <!-- START ROW -->
	    		<?php }  ?>
	    		<!-- End column check -->
		    	
		    	<?php } ?>
		    		    
		    	</div><!-- END ROW -->
		    
		    </div><!-- END PANEL -->
		    
		  </div>
		  <!-- Wrapper for slides -->
		  
		  <?php if ($panels_total > 1) { ?>
		  <!-- Controls -->
		  <a class="carousel-control left" href="#our-team-slider" data-slide="prev"></a>
		  <a class="carousel-control right" href="#our-team-slider" data-slide="next"></a>
		  <?php } ?>
		  
	</div>
	
 </div>

</section>
