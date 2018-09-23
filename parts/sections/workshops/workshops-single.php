<?php
$workshops = get_field('event_workshops', 'options');	
$workshops_post = $workshops[0]['talk_post'];
$img_main_lg = wp_get_attachment_image_src($workshops[0]['main_img'], 'full');
$img_main_sm = wp_get_attachment_image_src($workshops[0]['main_img'], 'thumbnail');	
$img_profile_lg = wp_get_attachment_image_src($workshops[0]['profile_img'], 'full');
//echo '<pre>';print_r($talks[0]['talk_post']);echo '</pre>';
?>

<div class="workshop-item">
	<div class="workshop-info">
		<ul class="list-inline">
			<li class="list-inline"><a href="<?php echo $workshops[0]['workshop_url']; ?>" target="_blank" class="website_link"><i class="fa fa-external-link"></i><?php echo $workshops[0]['workshop_name']; ?></a></li>
		</ul>
	</div>
	<div class="row no-gutters">
		<div class="col-2">
			<div class="text">
				<?php if (!empty($img_profile_lg)) { ?>
				<figure class="img-sml" style="background-image: url(<?php echo $img_profile_lg[0]; ?>)"></figure>
				<?php } ?>
				<?php echo $workshops[0]['workshop_description']; ?>
			</div>
			<?php if (!empty($workshops_post)) { ?>
			<a href="<?php echo get_permalink($workshops_post); ?>" class="view-post">View Article <i class="fa fa-angle-right fa-lg"></i></a>
			<?php } ?>
		</div>     
		<div class="col-10">
			<div class="img-main" style="background-image: url(<?php echo $img_main_lg[0]; ?>)"></div>
		</div>  
 	</div>
</div>