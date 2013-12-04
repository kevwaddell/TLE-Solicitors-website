<?php if ($downloads && is_single() && $post->post_type == "tlw_downloads_cpt") { ?>
		
<div class="sidebar-block hidden-xs hidden-sm">

	<h2 class="link"><a href="<?php echo get_permalink($downloads_page->ID); ?>"><?php echo $downloads_page->post_title; ?></a></h2>

	<ul class="links">
		<?php foreach ($downloads as $download) { ?>
		<li<?php echo ($download->ID == $post->ID)? ' class="current-parent"':''; ?>><a href="<?php echo get_permalink($download->ID); ?>"><?php echo $download->post_title; ?></a></li>
		<?php } ?>
	</ul>
</div>

<?php } ?>
