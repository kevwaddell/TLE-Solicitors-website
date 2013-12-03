<?php if (isset($social_respone_page)) { 
	
$social_resp_content = $social_respone_page->post_content;
$page_content = apply_filters('the_content', $social_resp_content );
?>

<div class="rule-sml mag-bottom-20"></div>

<article class="page">
				
	<h2><?php echo $social_respone_page->post_title; ?></h2>
	
	<?php if ($social_respone_page_content) : ?>
	
		<?php foreach( $social_respone_page_content as $content_item ): ?>

		<?php if ($content_item['acf_fc_layout'] == "cn_intro") : ?>
	
		<p><strong><?php echo $content_item['intro_txt']; ?></strong></p>
	
		<?php endif;  ?>
	
		<?php endforeach; ?>
	
	<?php endif; ?>
	
	<?php echo $page_content; ?>
	
	<p class="tagline">For added TLC Think TLW Solicitors.</p>

</article>

<?php } ?>