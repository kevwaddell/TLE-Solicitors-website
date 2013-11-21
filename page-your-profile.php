<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		

	<?php 
	$images = get_field("images");
	$content = get_field("content");
	?>	
	
	<!-- FEATURED IMAGE START-->	
    <?php include (STYLESHEETPATH . '/_/inc/global/featured-img-fw.php'); ?> 
    <!-- FEATURED IMAGE END -->
		
	<article class="page">
		
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

		
		<?php the_content(); ?>
		
	</article>
		
<?php endwhile; ?>
<?php endif; ?>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
