<?php
$event_address = get_field('gbl_event_address', 'options');
$directions_link = get_field('directions_link', 'options');	
?>
<div class="rule no-mag-bot"></div>
<section id="location-map" class="page-section">
	<div class="container">
		<h2 class="section-header no-mag-top"><span>Location</span></h2>
		<?php if (!empty($event_address)) { ?>
		<div class="address-box">
			<address>
			<?php echo $event_address; ?>
			</address>
			<?php if (!empty($directions_link)) { ?>
			<a href="<?php echo $directions_link; ?>" class="btn btn-light btn-block" target="_blank">Directions<i class="fa fa-angle-right fa-lg"></i></a>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
	<div id="map">
		<?php echo do_shortcode('[wpgmza id="1"]'); ?>
	</div>
</section>