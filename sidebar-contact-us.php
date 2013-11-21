<aside class="sidebar">
		
<?php $freephone_box_active = get_field('sb_freephone_active', 'option'); ?>

 <?php if ($freephone_box_active) { 
	 $freephone_box_title =  get_field('freephone_box_title', 'option');
	 $freephone_box_number = get_field('freephone_tel', 'option');
 ?>
 <div class="sidebar-freephone">
	<h3><?php echo $freephone_box_title; ?></h3>
	<p><span class="glyphicon glyphicon-earphone"></span><?php echo $freephone_box_number; ?></p>
</div>
 <?php } ?> 
 
 <div class="sidebar-block">
	<h2>Route finder</h2>

<div id="control" class="block-content">
<div class="form-group">
	<label for="start">Enter Your Post code:</label>
	<input type="text" class="form-control" maxlength="9" id="start">
</div>
<button onclick="calcRoute();" class="btn btn-default btn-block">Show route <span class="glyphicon glyphicon-road"></span></button>
 </div>
	
</div>
	
	<?php if ( get_field("sidebar") ) : ?>

	<?php foreach( get_field("sidebar", $post->ID) as $sb_item ): ?>

		<?php if ($sb_item['acf_fc_layout'] == "sb_panel") : 	?>
		
		<div class="sidebar-block">
			<h2><?php echo $sb_item['panel_title']; ?></h2>
		
			<div class="block-content">
			<?php echo $sb_item['panel_content']; ?>
			</div>
			
		</div>
		
		<?php endif; ?>			
			
	<?php endforeach; ?>
	
	<?php endif; ?>	
				
</aside>
