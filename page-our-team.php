<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
	<?php 
	$people = array( 
		array('post_name' => 'peter-mckenna', 'post_title' => 'Peter McKenna'),  
		array('post_name' => 'john-burn', 'post_title' => 'John Burn') ,
		array('post_name' => 'sarah-spruce', 'post_title' => 'Sarah Spruce'),
		array('post_name' => 'lorraine whitney', 'post_title' => 'Lorraine Whitney'),
		array('post_name' => 'susan-wood', 'post_title' => 'Susan Wood'),
		array('post_name' => 'tony-wight', 'post_title' => 'Tony Wight'), 
		array('post_name' => 'claire-redhead', 'post_title' => 'Claire Redhead')
	);
	
	//echo '<pre>';print_r($people);echo '</pre>';
	
	$feat_img_id = true;
	?>	
			
			<?php if ($feat_img_id) { ?>
				
			<figure class="feat-img">
				
				<div class="corner-top"></div>
				<div class="corner-bottom"></div>
			
				<div class="img">
					<?php holder( array( 'height' => '350', 'width' => '850', 'theme' => 'lite-gray' , 'text'=>'Featured image') ); ?>
					
					<div class="inner-shadow"></div>
				</div>

			</figure>
				
			<?php }  ?>

			<article class="page<?php echo ( $children ) ? ' intro':''; ?>">
							
				<header class="page-header">
				<h1><?php the_title(); ?></h1>
				</header>
				
				<?php the_content(); ?>
				
			</article>
		
			<?php if ( $people ): ?>	
			
			<div class="rule"></div>
			
			<section id="people-grid" class="grid-list">
			
				<div class="row">
	
					<?php foreach ( $people as $person ) : 
						
					//echo '<pre>';print_r($person);echo '</pre>';
					?>	
					
					<div class="col-sm-6 col-md-6 col-lg-6">
					
					<article id="grid-item-<?php echo $person[post_name]; ?>" class="grid-list-item">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-12 col-lg-6">
								<figure class="profile-img">
								 <?php holder( array( 'height' => '313', 'width' => '253', 'theme' => 'lite-gray' , 'text'=>'Profile image') ); ?>
								</figure>
							</div>
							
							<div class="col-sm-12 col-md-12 col-lg-6 right-col">
								
								<div class="txt-wrap">
								
									<h2><?php echo $person[post_title]; ?></h2>
									<h3>Position</h3>
									<a href="mailto:name@email.com" title="Email Name"><span class="glyphicon glyphicon-send"> name@email.com</a>
								</div>
								
							</div>

						</div>
					</article>
					
					<a href="#" title="View Details" class="view-more">
						More Details <span class="glyphicon glyphicon-circle-arrow-right"></span>
					</a>
					
					</div>
					
					<?php endforeach; ?>
					
					<?php wp_reset_postdata();?>
			
				</div>
						
			</section>
			
			<div class="rule"></div>
			
			<div class="sharing-links">
				<?php echo do_shortcode('[shareaholic app="share_buttons" id="410103"]'); ?>
			</div>
			
			<?php endif; ?>
	
		<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3">
	
	<?php get_sidebar('pages'); ?>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
