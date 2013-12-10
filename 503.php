<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?> &rsaquo; <?php echo $this->g_opt['mamo_pagetitle']; ?></title>
<?php
	global $is_iphone;
	if ( $is_iphone ) { ?>
	
	<meta name="viewport" content="width=320; initial-scale=0.9; maximum-scale=1.0; user-scalable=0;" />
<?php } ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/_/css/offline.css" type="text/css" media="all">

<?php 
 ?>
</head>

<body>

	<div id="wrapper">
		
		<div id="header">
			<h1><?php bloginfo('name'); ?></h1>
		</div>
	
		<div id="content">
			<?php echo $this->mamo_template_tag_message(); ?>
		</div>
 
		<div id="footer">
			<p>Freephone: 0800 169 5925 or Email <a href="mailto:info@tlwsolicitors.co.uk">info@tlwsolicitors.co.uk</a></p>
			<a href="/login/" class="login-link" title="Login">Login</a>
		</div>

	</div>

</body>
</html>