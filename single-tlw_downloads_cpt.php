<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
		
		<?php include (STYLESHEETPATH . '/_/inc/downloads/downloads-single-vars.php'); ?>
		
		<!-- FEATURED IMAGE START-->	
		<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
		<!-- FEATURED IMAGE END -->
	
		<article class="post">
					
			<header class="page-header">
				<h1><span><?php the_title(); ?></span></h1>
			</header>
			
			<div class="rule mag-bottom-20"></div>
			
			<?php if ($content) : ?>
				
				<?php foreach( $content as $content_item ): ?>
		
					<?php if ($content_item['acf_fc_layout'] == "cn_intro") : ?>
			
			<div class="intro center lrg">
				<p><?php echo $content_item['intro_txt']; ?></p>
			</div>
			
					<?php endif;  ?>
			
				<?php endforeach; ?>
				
			<div class="rule-sml"></div>
			
			<?php endif; ?>
			
				<div class="row">
			
					<div class="col-sm-6 col-md-6 col-lg-6">
					
					<figure class="cover-img">
					<img src="<?php echo $cover['sizes']['sidebar-img']; ?>" alt="<?php the_title_attribute(); ?>" width="<?php echo $cover['sizes']['sidebar-img-width']; ?>" height="<?php echo $cover['sizes']['sidebar-img-height']; ?>">
					</figure>	
						
					</div>
			
					<div class="col-sm-6 col-md-6 col-lg-6">
						
						<?php the_content(); ?>
						
					</div>
			
				</div>
			
			<div class="rule-sml"></div>
			
			<footer>

			<div class="download-links">
				<div class="row">
				
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<a href="<?php echo $file; ?>" class="btn btn-default btn-block download-btn" title="Download" target="_blank">Download Brochure</a>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hidden-xs">
					<a href="<?php echo $file; ?>" class="btn btn-default btn-block preview-btn fancybox-pdf" title="Download">Preview Brochure</a>	
					</div>
				
				</div>
			</div>
			
			<?php edit_post_link( 'Edit post', '<span class="edit-link btn btn-default btn-block">', '</span>' ); ?>	
			
			</footer>
			
		</article>

	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</section>
<!-- MAIN CONTENT END -->

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
