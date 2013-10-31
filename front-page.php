<?php get_header('home'); ?>

<?php include (STYLESHEETPATH . '/_/inc/home-page/vars.php'); ?> 

<?php if (!$home_screen_seen) { ?>

<div id="home-screen">
	
	<!-- HOME SCREEN WRAP -->
	<div id="home-screen-wrap" class="sidenav-closed no-touch-move">

		<!-- TOP BAR START -->
		<header class="home-header" role="home-banner">
			
			<div id="home-logo" class="left50">
			<h1><span><?php bloginfo('name'); ?></span></h1>
			<h2>For added TLC think&hellip;</h2>
			</div>
			
			<div id="menu-btn-wrap" class="right50">
				<button type="button" title="menu" class="menu-btn">Menu <span class="glyphicon glyphicon-th-list"></span></button>
			</div>
			
		</header>
		<!-- TOP BAR END -->
		
		<!--SLIDER START -->
		
		<section id="home-slider" class="wireframe">
		
		<!-- <div class="caption-bg"></div> -->
				
		<div id="home-carousel" class="carousel slide">
		
		 <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#home-carousel" data-slide-to="0" class="active first"></li>
		    <li data-target="#home-carousel" data-slide-to="1" data-toggle="tooltip" data-title="Clinical Negligence" class="clinical-negligence tool-tip"></li>
		    <li data-target="#home-carousel" data-slide-to="2" data-toggle="tooltip" data-title="Personal Injury" class="personal-injury tool-tip"></li>
		    <li data-target="#home-carousel" data-slide-to="3" data-toggle="tooltip" data-title="Road Traffic Accidents" class="rta tool-tip"></li>
		    <li data-target="#home-carousel" data-slide-to="4" data-toggle="tooltip" data-title="Professional Negligence" class="professional-negligence tool-tip"></li>
		    <li data-target="#home-carousel" data-slide-to="5" data-toggle="tooltip" data-title="Corprate Litigation" class="corporate-litigation tool-tip"></li>
		  </ol>
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div id="carousel-example-1" class="item active">
		    
		    <figure class="img" style="background-image: url(http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-1.jpg?v=2);">
		    	<!-- <img src="http://muddytracks.files.wordpress.com/2011/05/whitley-bay.jpg" alt="Slider image 1"> -->
		    </figure>
		      
		    </div>
		    
		    <div id="carousel-example-2" class="item">
		    
		     <figure class="img" style="background-image: url(http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-2.jpg?v=3);">
		     	<!-- <img src="http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-2.jpg" alt="Slider image 2"> -->
		     </figure>
		     
		      <div class="carousel-caption">
		       	<p class="tag">We Specialise in&hellip;</p>
		        <p class="title">Clinical Negligence</p>
		      </div>
		      
		    </div>
		    
		    <div id="carousel-example-3" class="item">
		    
		    <figure class="img" style="background-image: url(http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-3.jpg?v=6);">
		    	<!-- <img src="http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-2.jpg" alt="Slider image 3"> -->
		    </figure>
		   
		      <div class="carousel-caption">
		       <p class="tag">We Specialise in&hellip;</p>
		       <p class="title">Personal Injury</p>
		      </div>
		    </div>
		    
		     <div id="carousel-example-4" class="item">
		    
		    <figure class="img" style="background-image: url(http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-3.jpg?v=6);">
		    	<!-- <img src="http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-2.jpg" alt="Slider image 3"> -->
		    </figure>
		   
		      <div class="carousel-caption">
		       <p class="tag">We Specialise in&hellip;</p>
		       <p class="title">Road Traffic Accidents</p>
		      </div>
		    </div>
		    
		    <div id="carousel-example-5" class="item">
		    
		    <figure class="img" style="background-image: url(http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-4.jpg?v=1);">
		    	<!-- <img src="http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-4.jpg" alt="Slider image 4"> -->
		    </figure>
		   
		      <div class="carousel-caption">
		       <p class="tag">We Specialise in&hellip;</p>
		       <p class="title">Professional Negligence</p>
		      </div>
		    </div>
		    
		     <div id="carousel-example-6" class="item">
		    
		    <figure class="img" style="background-image: url(http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-5.jpg?v=2);">
		    	<!-- <img src="http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-4.jpg" alt="Slider image 5"> -->
		    </figure>
		   
		      <div class="carousel-caption">
		       <p class="tag">We Specialise in&hellip;</p>
		       <p class="title">Corporate Litigation</p>
		      </div>
		    </div>

		  </div>
		
		</div>
		
		<div class="slider-corner bottom-right"></div>
		<div class="slider-corner top-right"></div>
		
		</section>
		
		<div id="slider-logo"><?php bloginfo('name'); ?></div>
		
		<p class="tel-num"><span class="glyphicon glyphicon-earphone"></span>0800 169 5925</p>
		
		<button type="button" title="More details" class="enter-btn">Start your claim <span class="glyphicon glyphicon-arrow-down"></span></button>
		
		<!--SLIDER END -->
	
	</div>
	
	<!-- HOME SCREEN WRAP END -->
	
	<!-- MAIN NAVIGATION SIDBAR START -->
	<div id="side-nav-wrap" class="no-touch-move">
	
		<button type="button" class="close side-nav-close">&times;</button>
	 
		<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'side-nav', 'theme_location' => 'side_menu', 'fallback_cb' => false ) );  ?>
	
		<div class="side-nav-logo"></div>
	
	</div>
<!-- MAIN NAVIGATION SIDEBAR END -->	

</div>

<?php }  ?>

<!-- CLAIM FORM SIDBAR START -->
<div id="claim-form-wrap" class="no-touch-move <?php echo ($home_screen_seen) ? "fixed":"abs"; ?> <?php echo $home_screen_class; ?>">
	
	<div class="sidebar-inner">
	
	<button type="button" class="close side-form-close">&times;</button>
	<?php gravity_form(1, true, true, false, null, true); ?>
	
	</div>
	
</div>
<!-- CLAIM FORM SIDBAR SIDEBAR END -->	

<!-- PAGE WRAP START -->
<div id="home-page-content" class="page-wrapper side-form-closed <?php echo $home_screen_class; ?>">
	
	<!-- TOP BAR START -->
	<header class="header" role="banner">
			
			<div class="container">
			
				<div class="row">
				
					<div id="logo" class="col-sm-3 col-md-3">
						<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
					</div>
					
					<div id="top-nav" class="col-sm-9 col-md-9">
						<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'main-nav', 'theme_location' => 'main_menu', 'fallback_cb' => false ) ); ?>
					</div>
					
				</div>
			
			</div>
		
	</header>
	<!-- TOP BAR END -->
	
	<!-- PAGE BANNER -->
	<section id="page-banner-lrg">
		
		<div class="container">
		
			<div class="banner-img" style="background-image: url(http://tlw-wireframes.dev/wp-content/themes/tlwwireframedesign1/_/img/slide-4.jpg);">
				<?php //holder( array( 'height' => '540', 'width' => '1140', 'theme' => 'lite-gray' , 'text'=>'Banner image') ); ?>
				
				<p class="tag">For Added TLC Think&hellip;</p>
			</div>
					
			<div class="page-banner-corner"></div>
			
			<div id="home-banner-btn" class="promo-wrap">
				<div class="promo-top">
					<p class="normal caps">Freephone:</p>
					<p class="italic"><span class="glyphicon glyphicon-earphone"></span> 0800 169 5925</p>
				</div>
				
				<div class="promo-bottom">
					<p>or use our online<br>claim form for a no obligation enquiry&hellip;</p>
					<button class="claim-btn btn btn-default btn-lg btn-block">Start now! <span class="glyphicon glyphicon-chevron-right"></span></button>
				</div>
			</div>
			
		</div>
	
	</section>
	<!-- PAGE BANNER END-->
	
	<section id="panels">
	
		<div class="container">
			<div class="row">
			
			<?php foreach ($panels as $post) : 
			setup_postdata($post);
			$postid = get_the_ID();
			
			$children_args = array(
				'orderby' => 'menu_order',
				'order'	=> 'ASC',
				'post_parent' => $postid,
				'post_type' => 'page',
				'post_status' => 'publish'
			);
			
			$children = get_children($children_args);
			?>
				<div id="<?php echo $post->post_name; ?>-panel" class="panel-outer">
					
					<div class="panel-wrap">
					
						<span id="<?php echo $post->post_name; ?>-icon" class="icon"></span>
						
						<a href="<?php the_permalink(); ?>" class="<?php echo $post->post_name; ?>-link parent-link" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						
						<button class="panel-list-btn btn btn-default btn-block list-closed">
							View Practice Areas 
							<span class="glyphicon glyphicon-chevron-down down"></span>
							<span class="glyphicon glyphicon-chevron-up up"></span>
						</button>
						
						<?php if ($children) { ?>
						<div class="panel-list-wrap list-closed">
							<ul>
								<?php foreach($children as $child): ?>
								
								<li><a href="<?php echo get_permalink($child->ID); ?>" title="<?php echo $child->post_title; ?>"><?php echo $child->post_title; ?></a></li>
								
								<?php endforeach;  ?>
							</ul>
						</div>
						<?php } ?>
						
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="claim-btn btn btn-default btn-lg btn-block">Find out more <span class="glyphicon glyphicon-chevron-right"></span></a>
						
					</div>
					
				</div>
			<?php 
			endforeach; 
			wp_reset_postdata(); 
			?>
			</div>
		</div>
		
	</section>
	
	<!-- TESTIMONIAL SECTION START-->
	<section id="testimonials" class="wireframe">
		<span class="icon"></span>
		
		<div class="container">
		
				<span class="bracket bracket-left"></span>
				
				<div id="testy-carousel" class="carousel slide">
					
					<div class="carousel-inner">
					
						<div class="quote item active">
							<blockquote>I would like to thank everyone concerned for their friendly and efficient service. I had never dealt with the firm before, but they were reassuring and never condescending when dealing with my queries.</blockquote>
							
							<p>Mrs P King, Barnsley</p>
						</div>
						
						<div class="quote item">
							<blockquote>I would like to thank everyone concerned for their friendly and efficient service. I had never dealt with the firm before, but they were reassuring and never condescending when dealing with my queries.</blockquote>
							
							<p>Mr R Tick, Manchester</p>
						</div>
						
						<div class="quote item">
							<blockquote>I would like to thank everyone concerned for their friendly and efficient service. I had never dealt with the firm before, but they were reassuring and never condescending when dealing with my queries.</blockquote>
							
							<p>Mrs G Smith, Newcastle</p>
						</div>
						
						<div class="quote item">
							<blockquote>I would like to thank everyone concerned for their friendly and efficient service. I had never dealt with the firm before, but they were reassuring and never condescending when dealing with my queries.</blockquote>
							
							<p>Mr J Longname, Worcester</p>
						</div>
						
						<div class="quote item">
							<blockquote>I would like to thank everyone concerned for their friendly and efficient service. I had never dealt with the firm before, but they were reassuring and never condescending when dealing with my queries.</blockquote>
							
							<p>Mrs K Small, Cardiff</p>
						</div>
					
					</div>
				
				</div>
				
				<span class="bracket bracket-right"></span>
		</div>
	
	</section>
	<!-- TESTIMONIAL SECTION END-->
	
	<?php include (STYLESHEETPATH . '/_/inc/global/social-panel.php'); ?> 
		
	
<?php get_footer('home'); ?>
