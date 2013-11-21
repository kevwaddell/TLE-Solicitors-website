<div class="col-sm-6 col-md-6 col-lg-4">

	<?php 
	$file = get_field('download_file');
	$cover = get_field('cover_img');
	//echo '<pre>';print_r($cover);echo '</pre>';
	?>
	 
	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		 	
	<figure class="download-img">
	<img src="<?php echo $cover['sizes']['brochure-cover']; ?>" alt="<?php the_title_attribute(); ?>" width="<?php echo $cover['sizes']['brochure-cover-width']; ?>" height="<?php echo $cover['sizes']['brochure-cover-height']; ?>">
	</figure> 
	
	<div class="download-btns">
	
	<a href="<?php echo $file; ?>" title="Download" target="_blank" class="btn btn-default btn-block download-btn">Download</a>
	<a href="<?php echo $file; ?>" title="Preview" class="btn btn-default btn-block preview-btn fancybox-pdf">Preview</a>
	
	</div>

</div>
