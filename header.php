<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head id="www-wordpress-test-dev" data-template-set="tlw-base-theme">

	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<meta name="viewport" content="user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="format-detection" content="telephone=yes">
	
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; | '; }
		      elseif (is_category()) {
		         single_cat_title(''); echo ' | '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page()) && (!is_front_page())) {
		         wp_title(''); echo ' | '; }
		      elseif (is_404()) {
		         echo 'Not Found | '; }
		      if (is_home() || is_front_page()) {
		         bloginfo('name'); echo ' | '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' | page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_category()) {
		         single_cat_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page()) && (!is_front_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home() || is_front_page()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
		   
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad-retina.png" />
	<link rel="apple-touch-startup-image" href="<?php bloginfo('template_directory'); ?>/_/img/apple-start-up-img.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
	
	<?php 
	$url = explode('/',$_SERVER['REQUEST_URI']);
	$dir = $url[1] ? $url[1] : 'home';
	global $is_iphone;
	?>
	
</head>

<body id="<?php echo $dir ?>" <?php body_class(); ?>>

<div id="show-main-menu" class="btn-hidden hidden-xs hidden-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-8 col-lg-3 col-lg-offset-9">
				<button id="show-main-menu-btn">Navigation</button>
			</div>
		</div>
	</div>
</div>

<?php if (!$is_iphone) : ?>

<?php 
global $post;
$post_id = $post->ID;

if (is_home() || is_category() || is_tag() || is_date() ) {
$news_page_id = get_option( 'page_for_posts');	
$post_id = $news_page_id;
}

if ( get_field("content", $post_id) ) : ?>

<?php while (has_sub_field("content", $post_id)) : ?>

		<?php if (get_row_layout() == "cn_form" ) : 
		$claim_form_active = get_sub_field('gb_claim_fm');		
		?>
		
			<?php if ($claim_form_active) : 
			$claim_form = get_sub_field('form');		
			?>
		
		<!-- CLAIM FORM SIDBAR START -->
		<div id="claim-form-wrap" class="no-touch-move fixed hidden-xs">
			
			<div class="sidebar-inner">
			
			<button type="button" class="close side-form-close">&times;</button>
			
			<h3>Make a Claim</h3>
			<?php gravity_form($claim_form->id, false, true, false, null, true); ?>
			
			</div>
			
		</div>
		<!-- CLAIM FORM SIDBAR SIDEBAR END -->	

		
			<?php endif; ?>
			
		<?php endif;  ?>

<?php endwhile ; ?>

<?php endif;  ?>

<?php endif;  ?>

<!-- PAGE WRAP START -->
<div id="site-content" class="page-wrapper side-form-closed">
	
	<!-- TOP BAR START -->
	<header class="header" role="banner">
			
			<div class="container">
			
				<div class="row">
				
					<div id="logo" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
					</div>
					
					<?php if (!$is_iphone) : ?>
					<div id="top-nav" class="col-md-9 col-lg-9 hidden-xs hidden-sm">
						<?php wp_nav_menu(array( 'container' => 'nav', 'container_id' => 'main-nav', 'theme_location' => 'main_menu', 'fallback_cb' => false ) ); ?>
					</div>
					<?php endif;  ?>
					
				</div>
			
			</div>
		
	</header>
	<!-- TOP BAR END -->
	
	<div class="breadcrumb-wrap hidden-xs">
		<div class="breadcrumb-inner-wrap">
			<div class="container">
				<span class="first"></span>
	    		<?php if(function_exists('bcn_display')) { bcn_display(); }?>
	    		<span class="last"></span>
	   		</div>
	   	</div>
	</div>