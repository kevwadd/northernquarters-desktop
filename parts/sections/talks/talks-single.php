<?php
$talks = get_field('event_talks', 'options');
$talk_post = $talks[0]['talk_post'];
$img_main_lg = wp_get_attachment_image_src($talks[0]['main_img'], 'full');
$img_main_sm = wp_get_attachment_image_src($talks[0]['main_img'], 'thumbnail');	
$img_profile_lg = wp_get_attachment_image_src($talks[0]['profile_img'], 'full');
//echo '<pre>';print_r($talks[0]['talk_post']);echo '</pre>';
?>

<div class="talks-item">
	<div class="talker-info">
		<ul class="list-inline">
			<li class="list-inline"><a href="<?php echo $talks[0]['talk_url']; ?>" target="_blank" class="website_link"><?php echo $talks[0]['talk_name']; ?></a></li>
		</ul>
	</div>
	<div class="row no-gutters">
		<div class="col-10">
			<div class="img-main" style="background-image: url(<?php echo $img_main_lg[0]; ?>)"></div>
		</div>  
		<div class="col-2">
			<div class="text">
				<figure class="img-sml" style="background-image: url(<?php echo $img_profile_lg[0]; ?>)"></figure>
				<?php echo $talks[0]['talk_description']; ?>
			</div>
			<?php if (!empty($talk_post)) { ?>
			<a href="<?php echo get_permalink($talk_post); ?>" class="view-post">View Article <i class="fa fa-angle-right fa-lg"></i></a>
			<?php } ?>
		</div>     
 	</div>
</div>