<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<section id="main-content" class="content container">

<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
		
		<?php include (STYLESHEETPATH . '/_/inc/careers/single-job-vars.php'); ?>
		
		<!-- FEATURED IMAGE START-->	
		<?php include (STYLESHEETPATH . '/_/inc/global/featured-img.php'); ?> 
		<!-- FEATURED IMAGE END -->
	
		<article class="post">
					
			<header class="page-header">
				<h1><span><?php the_title(); ?></span></h1>
				<time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><span class="glyphicon glyphicon-calendar"></span><strong>Closing Date: </strong><br><?php echo $end_date; ?></time>
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
			
			<?php if ( isset($num_jobs) || isset($salary_range) || isset($working_hrs) || isset($working_hrs) ) : ?>
			
			<div class="job-details">
			
				<div class="row">
				
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			
					<?php if ( isset($num_jobs) ) : ?>
					<p><strong>Positions available:</strong> <?php echo $num_jobs; ?></p>
					<?php endif; ?>
					
					<?php if ( isset($salary_range) ) : ?>
					<p><strong>Salary:</strong> <?php echo $salary_range; ?></p>
					<?php endif; ?>					
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					
						<?php if ( isset($working_hrs) ) : ?>
						<p><strong>Working Hours:</strong> 
							<?php foreach ($working_hrs as $hrs ) : ?>
						
							| <?php echo $hrs; ?> | 
						
							<?php endforeach; ?>
						</p>
						<?php endif; ?>

						<?php if ( isset($working_hrs) ) : ?>
						<p><strong>Contract:</strong> <?php echo $contract; ?></p>
						<?php endif; ?>
					</div>
			
				</div>
			
			</div>
			
			<?php endif; ?>
			
			<?php the_content(); ?>
			
			<?php if ( isset($person_requirements) ) : ?>
			
			<div class="rule-sml"></div>
			
			<h4>Person requirements</h4>
			
			<?php echo $person_requirements; ?>
			
			<?php endif; ?>
			
			<?php if ( isset($company_info) ) : ?>
			
			<div class="rule-sml"></div>
			
			<h4>Company information</h4>
			
			<?php echo $company_info; ?>
			
			<?php endif; ?>
			
			<?php if ( isset($ext_url) ) : ?>
			
			<a href="<?php echo $ext_url; ?>" title="Apply now" class="job-link-btn btn btn-default btn-block btn-lg" target="_blank">Apply online</a>
				
			<?php endif; ?>
			
			<div class="rule-sml"></div>
			
			<footer>
			
				<?php if ( !isset($ext_url) ) : ?>
				<a href="mailto:recruitment@tlwsolicitors.co.uk?subject=Application enquiry for <?php echo $post->post_title; ?> position" class="job-link-btn btn btn-default btn-block btn-lg visible-xs visible-sm">Apply Now</a>
				<?php endif; ?>
				
				<div class="hidden-xs hidden-sm">
				
				<?php if ( isset($job_form) ) : ?>
				
				
					<h4><?php echo $internal_message; ?></h4>
				
					<div class="form-wrap">
				
						<?php gravity_form($job_form->id, false, false, false, null, true); ?>
				
					</div>
				
				<?php endif; ?>
				
				</div>
				
						
			<?php edit_post_link( 'Edit post', '<span class="edit-link btn btn-default btn-block">', '</span>' ); ?>	
			
			</footer>
			
			<div class="sharing-links hidden-xs">
				<div class="rule"></div>
				<?php echo do_shortcode('[shareaholic app="share_buttons" id="410103"]'); ?>
			</div>
			
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
