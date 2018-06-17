<?php
$general_tickets_url = get_field('general_tickets_url', 'options');	
$talk_tickets_url = get_field('talk_tickets_url', 'options');
$stall_enquiry_email = get_field('stall_enquiry_email', 'options');	
$event_venue = get_field('event_venue', 'options');	
$event_place = get_field('event_place', 'options');	
$event_date = get_field('event_date', 'options');	
$event_time_start = get_field('event_time_start', 'options');
$event_time_end = get_field('event_time_end', 'options');
?>

<section class="banner-top">
	<div class="container">
		<div class="row hp-banner no-gutters">
			<div class="col-10 rel">
				<div class="img">
					<div class="event-info text-center">
						<time><?php echo date('jS F Y', strtotime($event_date)); ?><br><?php echo $event_time_start; ?> - <?php echo $event_time_end; ?></time>
						<h2><?php echo $event_venue; ?><br><?php echo $event_place; ?></h2>
						<p>The destination in the North East for all things interiors</p>
					</div>
				</div>
				</div>
			<div class="col-2 d-flex flex-column align-items-start rel">
				<div class="links">
					<a href="<?php echo $general_tickets_url; ?>" class="text-center yell-btn" target="_blank"><span><i class="fa fa-ticket"></i>General Tickets</span></a>
				</div>
				<div class="links blue-btn">
					<a href="<?php echo $talk_tickets_url; ?>" class="text-center blue-btn" target="_blank"><span><i class="fa fa-comment"></i>Talk Tickets</span></a>
				</div>
				<div class="links yell-btn">
					<a href="mailto:<?php echo $stall_enquiry_email; ?>" class="text-center yell-btn"><span><i class="fa fa-cubes"></i>Stand Enquiry</span></a>
				</div>
			</div>
		</div>
	</div>
</section>