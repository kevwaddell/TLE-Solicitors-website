<?php get_header(); ?>

<!-- MAIN CONTENT START -->
<section id="main-content" class="content container">

<div class="row">

	<div class="col-sm-8 col-md-8 col-lg-9 col-sm-push-4 col-md-push-4 col-lg-push-3">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
	<?php 
	$children_args = array(
	'post_type'		=> 'page',
	'post_parent'	=> $post->ID,
	'orderby'		=> 'menu_order',
	'order'			=> 'ASC',
	'posts_per_page'	=> -1
	);
	$children = get_posts($children_args);
	
	
	$feat_img_id = true;
	?>	
			<article class="page intro">
				
				<header class="page-header">
				<h1><?php the_title(); ?></h1>
				</header>
				
				<?php the_content(); ?>
				
				<div id="contact-form">
				
				<?php gravity_form(2, true, true, false, null, true); ?>
				
				</div>
				
			</article>
			
		<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div>
	
	<div class="col-sm-4 col-md-4 col-lg-3 col-sm-pull-8 col-md-pull-8 col-lg-pull-9">
		<aside class="sidebar">
		
			<div class="promo-message">
				<p><span class="glyphicon glyphicon-phone-alt"></span> Call Free on:</p>
				<h3>0800 169 5925</h3>
				<p><span class="glyphicon glyphicon-comment"></span> For a no obligation enquiry</p>
			</div>
		
			<div class="sidebar-map">
			<?php holder( array( 'height' => '300', 'width' => '360', 'theme' => 'wordpress' , 'text'=>'Map image') ); ?>
			</div>
			
			<div class="sidebar-block">
				
				<h2>Address</h2>
				
				<div class="block-content">
				<p class="large-txt bold">TLW Solicitors</p>
				<p>9 Hedley Court</p>
				<p>Orion Business Park</p>
				<p>North Shields</p>
				<p>Tyne & Wear</p>
				<p>NE29 7ST</p>
				</div>
			
			</div>
			
			<div class="sidebar-block">
				
				<h2>Useful numbers</h2>
				
				<div class="block-content">
				<p><strong>Freephone: </strong> 0800 169 5925</p>
				<p><strong>Office Tel: </strong> 0191 293 1500</p>
				<p><strong>Tax: </strong> 0191 293 1501</p>
				</div>
			
			</div>
			
			<div class="sidebar-block">
				
				<h2>Contact emails</h2>
				
				<div class="block-content">
				<p><a href="mailto:info@tlwsolicitors.co.uk">info@tlwsolicitors.co.uk</a></p>
				<p><a href="mailto:enquiries@tlwsolicitors.co.uk">enquiries@tlwsolicitors.co.uk</a></p>
				</div>
			
			</div>
			
		</aside>
		
	</div>

</div>

</section>
<!-- MAIN CONTENT END -->

<?php get_footer(); ?>
