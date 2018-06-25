<?php
$exhibits = get_field('event_exhibitors', 'options');
?>

<div id="exhibitors-carousel" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		<?php foreach ($exhibits as $k => $ex) { 
		$ex_post = $ex['exhibitor_post'];
		$img_main_lg = wp_get_attachment_image_src($ex['main_img'], 'full');
		$img_main_sm = wp_get_attachment_image_src($ex['main_img'], 'thumbnail');	
		$img_profile_lg = wp_get_attachment_image_src($ex['profile_img'], 'full');	
		?>
		<div class="exhibitor-item carousel-item<?php echo ($k == 0) ? ' active':''; ?>">
			<div class="exhibit-info">
				<ul class="list-inline">
					<li class="list-inline"><a href="<?php echo $ex['exhibit_url']; ?>" target="_blank" class="website_link"><i class="fa fa-external-link"></i><?php echo $ex['exhibit_name']; ?></a></li>
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
						<?php echo $ex['exhibit_description']; ?>
					</div>
					<?php if (!empty($ex_post)) { ?>
					<a href="<?php echo get_permalink($ex_post); ?>" class="view-post">View Article <i class="fa fa-angle-right fa-lg"></i></a>
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
		  <?php foreach ($exhibits as $k => $t) { ?>
		  <li data-target="#exhibitors-carousel" data-slide-to="<?php echo $k; ?>"<?php echo ($k == 0) ? ' class="active"':''; ?>></li>
		  <?php } ?>
	  </ol>
	  <a class="carousel-control-prev" href="#exhibitors-carousel" role="button" data-slide="prev">
	    <span class="fa fa-angle-left fa-lg" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#exhibitors-carousel" role="button" data-slide="next">
	    <span class="fa fa-angle-right fa-lg" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	  <div class="carousel-loader"></div>
</div>

