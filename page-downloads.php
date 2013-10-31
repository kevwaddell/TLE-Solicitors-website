<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

	<div class="row">

		<div class="col-sm-4 col-md-8 col-lg-9">

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
		<article class="intro">
			<header class="page-header">
			<h1><?php the_title(); ?></h1>
			</header>
			
			<?php the_content(); ?>
		</article>
		
		<div class="rule"></div>
		
<?php endwhile; ?>

<?php endif; ?>

		<?php 
		$downloads = true;
		 ?>
		 
		 <?php if ($downloads) { ?>
		 
		 <section id="downloads-list">
		 
		 <ul class="nav nav-tabs" id="download-tabs">
		 	<li class="active"><a href="#white-papers" data-toggle="tab">White papers</a></li>
		 	<li><a href="#brochures" data-toggle="tab">Brochures</a></li>
		 	<li><a href="#documents" data-toggle="tab">Documents</a></li>
		 </ul>
		 
		 <div class="tab-content">
		  
			  <div class="tab-pane active fade in" id="white-papers">
			 	 <?php include (STYLESHEETPATH . '/_/inc/downloads/download-list-papers.php'); ?>
			  </div>
			  
			  <div class="tab-pane fade" id="brochures">
			 	 <?php include (STYLESHEETPATH . '/_/inc/downloads/download-list-brochures.php'); ?>
			  </div>
			  
			  <div class="tab-pane fade" id="documents">
			 	 <?php include (STYLESHEETPATH . '/_/inc/downloads/download-list-docs.php'); ?>
			  </div>
		  
		</div>

		</section>
		 
		 <?php } else { ?>
		 
		<div class="well no-posts-message">
			<h2>Sorry</h2>
			<p>There are no <?php the_title(); ?> no at the moment.</p>
		</div>

		 <?php } ?>

		</div>
		
		<div class="col-sm-4 col-md-4 col-lg-3">
	
			<?php get_sidebar('pages'); ?>
		
		</div>
	
	</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
