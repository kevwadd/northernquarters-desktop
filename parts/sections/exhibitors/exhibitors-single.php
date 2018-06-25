<?php
$exhibits = get_field('event_exhibitors', 'options');
$exhibit_post = $exhibits[0]['exhibitor_post'];
$img_main_lg = wp_get_attachment_image_src($exhibits[0]['main_img'], 'full');
$img_main_sm = wp_get_attachment_image_src($exhibits[0]['main_img'], 'thumbnail');	
$img_profile_lg = wp_get_attachment_image_src($exhibits[0]['profile_img'], 'full');
//echo '<pre>';print_r($talks[0]['talk_post']);echo '</pre>';
?>

<div class="exhibitor-item">
	<div class="exhibit-info">
		<ul class="list-inline">
			<li class="list-inline"><a href="<?php echo $exhibits[0]['exhibit_url']; ?>" target="_blank" class="website_link"><i class="fa fa-external-link"></i><?php echo $exhibits[0]['exhibit_name']; ?></a></li>
		</ul>
	</div>
	<div class="row no-gutters">
		<div class="col-2">
			<div class="text">
				<?php if (!empty($img_profile_lg)) { ?>
				<figure class="img-sml">
					<img src="<?php echo $img_profile_lg[0]; ?>" class="img-fluid">
				</figure>
				<?php } ?>
				<?php echo $exhibits[0]['exhibit_description']; ?>
			</div>
			<?php if (!empty($exhibit_post)) { ?>
			<a href="<?php echo get_permalink($exhibit_post); ?>" class="view-post">View Article <i class="fa fa-angle-right fa-lg"></i></a>
			<?php } ?>
		</div>     
		<div class="col-10">
			<div class="img-main" style="background-image: url(<?php echo $img_main_lg[0]; ?>)"></div>
		</div>  
 	</div>
</div>