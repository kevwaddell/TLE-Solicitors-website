<?php if (!$is_iphone) : ?>

<div id="claim-form-wrap" class="<?php echo ($home_screen_seen) ? "fixed":"abs"; ?> <?php echo $home_screen_class; ?>">
	
	<div class="sidebar-inner">
	
	<button type="button" class="close side-form-close">&times;</button>
	<?php gravity_form(1, true, true, false, null, true); ?>
	
	</div>
	
</div>

<?php endif;  ?>