<?php get_header('home'); ?>

<?php include (STYLESHEETPATH . '/_/inc/home-page/vars.php'); ?> 

<?php if (!$home_screen_seen) { ?>

<div id="home-screen">
	
	<!-- HOME SCREEN WRAP -->
	<div id="home-screen-wrap" class="sidenav-closed no-touch-move">

		<!-- TOP BAR START -->
		<?php include (STYLESHEETPATH . '/_/inc/home-page/home-screen-header.php'); ?>		
		<!-- TOP BAR END -->
		
		<!--SLIDER START -->
		<?php include (STYLESHEETPATH . '/_/inc/home-page/slider.php'); ?>		
		<!--SLIDER END -->
		
		<div id="slider-logo"><?php bloginfo('name'); ?></div>
		
		<p class="tel-num"><span class="glyphicon glyphicon-earphone"></span>0800 169 5925</p>
		
		<button type="button" title="More details" class="enter-btn">Start your claim</button>
	
	</div>
	
	<!-- HOME SCREEN WRAP END -->
	
	<!-- MAIN NAVIGATION SIDEBAR START -->
	
	<?php include (STYLESHEETPATH . '/_/inc/home-page/side-nav.php'); ?>	
	
	<!-- MAIN NAVIGATION SIDEBAR END -->	

</div>

<?php }  ?>

<!-- CLAIM FORM SIDEBAR START -->
<?php include (STYLESHEETPATH . '/_/inc/global/claim-form-sidebar.php'); ?>
<!-- CLAIM FORM SIDBAR SIDEBAR END -->	

<!-- PAGE WRAP START -->
<div id="home-page-content" class="page-wrapper side-form-closed <?php echo $home_screen_class; ?>">
	
	<!-- TOP BAR START -->
	<?php include (STYLESHEETPATH . '/_/inc/home-page/home-page-content-header.php'); ?>	
	<!-- TOP BAR END -->
	
	<!-- PAGE BANNER -->
	<?php include (STYLESHEETPATH . '/_/inc/home-page/home-page-banner.php'); ?>
	<!-- PAGE BANNER END-->
	
	<!-- NEWSLETTER + CONTACT US LINKS -->
	<?php include (STYLESHEETPATH . '/_/inc/home-page/promo-links.php'); ?>
	<!-- NEWSLETTER + CONTACT US LINKS END -->
	
	<!-- PRACTICE PANELS -->
	<?php include (STYLESHEETPATH . '/_/inc/home-page/practice-panels.php'); ?>
	<!-- PRACTICE PANELS END -->
	
	<!-- TESTIMONIAL SECTION START-->
	<?php include (STYLESHEETPATH . '/_/inc/home-page/feed-back-panel.php'); ?>
	<!-- TESTIMONIAL SECTION END-->
	
	<?php include (STYLESHEETPATH . '/_/inc/global/social-panel.php'); ?> 
		
	
<?php get_footer('home'); ?>
