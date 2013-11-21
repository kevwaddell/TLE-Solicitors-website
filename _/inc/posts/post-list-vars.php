<?php 
$post_date = get_the_date();

$content = get_field("content");
$intro_text = false;

if ($content) {
	
	foreach($content as $content_item) {
		
		if ($content_item['acf_fc_layout'] == "cn_intro") {
		$intro_text = $content_item['intro_txt'];	
		}
		
	}
}

$images = get_field("images");
$feat_img_id = false;

if ($images) {
	
	foreach ($images as $img_item) {
		
		if ($img_item ['acf_fc_layout'] == "featured_img") {
		$feat_img_id = $img_item['ft_img'];
		$feat_img_src = wp_get_attachment_image_src($feat_img_id,'post-list-img');
		$feat_img_url = $feat_img_src[0];
		$feat_img_w = $feat_img_src[1];
		$feat_img_h = $feat_img_src[2];	
		}
		
	}	
	
}
?>
