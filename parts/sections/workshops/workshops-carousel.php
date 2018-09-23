<?php
$workshops = get_field('event_workshops', 'options');	
?>

<div id="workshops-carousel" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		<?php foreach ($workshops as $k => $ws) { 
		$ws_post = $ws['workshop_post'];
		$img_main_lg = wp_get_attachment_image_src($ws['main_img'], 'full');
		$img_main_sm = wp_get_attachment_image_src($ws['main_img'], 'thumbnail');	
		$img_profile_lg = wp_get_attachment_image_src($ws['profile_img'], 'full');	
		?>
		<div class="workshop-item carousel-item<?php echo ($k == 0) ? ' active':''; ?>">
			<div class="workshop-info">
				<ul class="list-inline">
					<li class="list-inline"><a href="<?php echo $ws['workshop_url']; ?>" target="_blank" class="website_link"><i class="fa fa-external-link"></i><?php echo $ws['workshop_name']; ?></a></li>
				</ul>
			</div>
			<div class="row no-gutters">
				<div class="col-2">
					<div class="text">
						<?php if (!empty($img_profile_lg)) { ?>
						<figure class="img-sml" style="background-image: url(<?php echo $img_profile_lg[0]; ?>)"></figure>
						<?php } ?>
						<?php echo $ws['workshop_description']; ?>
					</div>
					<?php if (!empty($ws_post)) { ?>
					<a href="<?php echo get_permalink($ws_post); ?>" class="view-post">View Article <i class="fa fa-angle-right fa-lg"></i></a>
					<?php } ?>
				</div>     
				<div class="col-10">
					<div class="img-main" style="background-image: url(<?php echo $img_main_lg[0]; ?>)"></div>
				</div>  
		 	</div>
		</div>
		<?php } ?>
	  </div>
	  <ol class="carousel-indicators">
		  <?php foreach ($workshops as $k => $t) { ?>
		  <li data-target="#workshop-carousel" data-slide-to="<?php echo $k; ?>"<?php echo ($k == 0) ? ' class="active"':''; ?>></li>
		  <?php } ?>
	  </ol>
	  <a class="carousel-control-prev" href="#workshop-carousel" role="button" data-slide="prev">
	    <span class="fa fa-angle-left fa-lg" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#workshop-carousel" role="button" data-slide="next">
	    <span class="fa fa-angle-right fa-lg" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	  <div class="carousel-loader"></div>
</div>

