<?php
$talks = get_field('event_talks', 'options');
?>

<div id="talks-carousel" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		<?php foreach ($talks as $k => $talk) { 
		$talk_post = $talk['talk_post'];
		$img_main_lg = wp_get_attachment_image_src($talk['main_img'], 'full');
		$img_main_sm = wp_get_attachment_image_src($talk['main_img'], 'thumbnail');	
		$img_profile_lg = wp_get_attachment_image_src($talk['profile_img'], 'full');	
		?>
		<div class="talks-item carousel-item<?php echo ($k == 0) ? ' active':''; ?>">
			<div class="talker-info">
				<ul class="list-inline">
					<li class="list-inline">
						<?php if (empty($talk['talk_url'])) { ?>
						<span class="talk-name"><i class="fa fa-external-link"></i><?php echo $talk['talk_name']; ?></span>
						<?php } else { ?>
						<a href="<?php echo $talk['talk_url']; ?>" target="_blank" class="website_link"><i class="fa fa-external-link"></i><?php echo $talk['talk_name']; ?></a>
						<?php } ?>
					</li>
				</ul>
			</div>
			<div class="row no-gutters">
				<div class="col-10">
					<div class="img-main" style="background-image: url(<?php echo $img_main_lg[0]; ?>)"></div>
				</div>  
				<div class="col-2">
					<div class="text">
						<?php if (!empty($img_profile_lg)) { ?>
						<figure class="img-sml" style="background-image: url(<?php echo $img_profile_lg[0]; ?>)"></figure>
						<?php } ?>
						<?php echo $talk['talk_description']; ?>
					</div>
					<?php if (!empty($talk_post)) { ?>
					<a href="<?php echo get_permalink($talk_post); ?>" class="view-post">View Article <i class="fa fa-angle-right fa-lg"></i></a>
					<?php } ?>
				</div>     
		 	</div>
		</div>
		<?php } ?>
	  </div>
	  <ol class="carousel-indicators">
		  <?php foreach ($talks as $k => $t) { ?>
		  <li data-target="#talks-carousel" data-slide-to="<?php echo $k; ?>"<?php echo ($k == 0) ? ' class="active"':''; ?>></li>
		  <?php } ?>
	  </ol>
	  <a class="carousel-control-prev" href="#talks-carousel" role="button" data-slide="prev">
	    <span class="fa fa-angle-left fa-lg" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#talks-carousel" role="button" data-slide="next">
	    <span class="fa fa-angle-right fa-lg" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	  <div class="carousel-loader"></div>
</div>
