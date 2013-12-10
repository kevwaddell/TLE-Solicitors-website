<?php  
$slides = get_field('slides');	
$first_slide_img = get_field('first_slide_img');	
$slides_total = count($slides);
$indicator_counter = 0;
$slides_counter = 0;
//echo '<pre>';print_r($first_slide_img);echo '</pre>';	
//echo '<pre>';print_r($slides);echo '</pre>';	
?>
<section id="home-slider">
		
	<!-- <div class="caption-bg"></div> -->
			
	<div id="home-carousel" class="carousel slide">
	
	 <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#home-carousel" data-slide-to="0" class="active first"></li>
	    
	    <?php foreach ($slides as $indicator) { 
		 $indicator_counter++;
	    ?>
	     <li data-target="#home-carousel" data-slide-to="<?php echo $indicator_counter; ?>" data-toggle="tooltip" data-title="<?php echo $indicator['title']; ?>" class="tool-tip">
		     <img src="<?php echo $indicator['icon']['url']; ?>" width="<?php echo $indicator['icon']['width']; ?>" height="<?php echo $indicator['icon']['height']; ?>" alt="<?php echo $indicator['title']; ?>">
	     </li>
	    <?php } ?>
	    
	  </ol>
	
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" style="background-image: url(<?php echo $slides[0]['img']['url']; ?>);">
	   
	    <div id="slide-<?php echo $slides_counter; ?>" class="item active">
	    
	    <figure class="img" style="background-image: url(<?php echo $first_slide_img['url']; ?>);">
	    	<!-- <img src="<?php echo $first_slide_img['url']; ?>" alt="Slider image 1"> -->
	    </figure>
	      
	    </div>
	    
	    <?php foreach ($slides as $slide) { 
		 $slides_counter++; 
		 $img_url =  $slide['img']['url']; 
	    ?>
	   
	    <div id="slide-<?php echo $slides_counter; ?>" class="item">
	    
	     <figure class="img" style="background-image: url(<?php echo $img_url; ?>);">
	     	<!-- <img src="<?php echo $img_url; ?>" alt="Slider image <?php echo $slides_counter+1; ?>"> -->
	     </figure>
	     
	      <div class="carousel-caption">
	       	<p class="tag">We Specialise in&hellip;</p>
	        <p class="title"><?php echo $slide['title']; ?></p>
	      </div>
	      
	    </div>

	    <?php } ?>  
	    	
	  </div>
	
	</div>
	
	<div class="slider-corner bottom-right"></div>
	<div class="slider-corner top-right"></div>

</section>
