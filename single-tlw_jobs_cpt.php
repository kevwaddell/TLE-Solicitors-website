<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9">
		
		<?php include (STYLESHEETPATH . '/_/inc/careers/single-job-vars.php'); ?>
		
		<!-- FEATURED IMAGE START-->	
		<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
		<!-- FEATURED IMAGE END -->
	
		<article class="post">
					
			<header class="page-header">
				<h1><span><?php the_title(); ?></span></h1>
				<time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><span class="glyphicon glyphicon-calendar"></span><strong>Closing Date:</strong> <?php echo $end_date; ?></time>
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
			
			<?php the_content(); ?>
			
			<div class="rule-sml"></div>
			
			<footer>
			
				<div class="job-footer-info">
	
				
				</div>
						
			<?php edit_post_link( 'Edit post', '<span class="edit-link btn btn-default btn-block">', '</span>' ); ?>	
			
			</footer>
			
			<div class="rule"></div>
			
			<div class="sharing-links">
				<?php echo do_shortcode('[shareaholic app="share_buttons" id="410103"]'); ?>
			</div>
			
		</article>

	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</section>
<!-- MAIN CONTENT END -->

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
