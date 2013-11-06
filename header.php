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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
	
	<?php 
	$url = explode('/',$_SERVER['REQUEST_URI']);
	$dir = $url[1] ? $url[1] : 'home';
	?>
	
</head>

<body id="<?php echo $dir ?>" <?php body_class(); ?>>

<div id="show-main-menu" class="btn-hidden">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 col-lg-3 col-lg-offset-9">
				<button id="show-main-menu-btn">Navigation</button>
			</div>
		</div>
	</div>
</div>

<?php 
global $post;

if (has_sub_field("content", $post->ID)) {

	$remove_global_claim_form = get_sub_field('remove_gb_claim_fm', $post->ID);

}

if (has_sub_field("sidebar", $post->ID)) {

	$remove_global_claim_form = get_sub_field('remove_claim_form', $post->ID);

}

if ( !$remove_global_claim_form ) { ?>

<!-- CLAIM FORM SIDBAR START -->
<div id="claim-form-wrap" class="no-touch-move fixed">
	
	<div class="sidebar-inner">
	
	<button type="button" class="close side-form-close">&times;</button>
	<?php gravity_form(1, true, true, false, null, true); ?>
	
	</div>
	
</div>
<!-- CLAIM FORM SIDBAR SIDEBAR END -->	

<?php }  ?>

<!-- PAGE WRAP START -->
<div id="site-content" class="page-wrapper side-form-closed">
	
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
	
	<div class="breadcrumb-wrap">
		<div class="breadcrumb-inner-wrap">
			<div class="container">
				<span class="first"></span>
	    		<?php if(function_exists('bcn_display')) { bcn_display(); }?>
	    		<span class="last"></span>
	   		</div>
	   	</div>
	</div>