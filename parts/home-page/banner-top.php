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
<a name="pg-top"></a>
<section class="banner-top">
	<div class="container">
		<div class="row hp-banner no-gutters">
			<div class="col-10 rel">
				<div class="img">
					<div class="event-info text-center">
						<time><?php echo date('jS F Y', strtotime($event_date. ' - 1 day')); ?><br>10:00am - <?php echo $event_time_end; ?></time>
						<h2><?php bloginfo('name'); ?><br>at the Biscuit Factory</h2>
						<p>Gemini House - Newcastle</p>
					</div>
					<div class="event-info text-center">
						<time><?php echo date('jS F Y', strtotime($event_date)); ?><br><?php echo $event_time_start; ?> - <?php echo $event_time_end; ?></time>
						<h2><?php bloginfo('name'); ?><br><?php bloginfo('description'); ?></h2>
						<p><?php echo $event_venue; ?> - <?php echo $event_place; ?></p>
					</div>
				</div>
				</div>
			<div class="col-2 d-flex flex-column align-content-stretch rel">
				<div class="links align-self-stretch">
					<a href="<?php echo $general_tickets_url; ?>" class="text-center yell-btn" target="_blank">
						<span><i class="fa fa-ticket"></i><small>Sat 17th Nov</small><br>Workshop Tickets</span>
					</a>
				</div>
				<div class="links align-self-stretch">
					<a href="<?php echo $talk_tickets_url; ?>" class="text-center blue-btn" target="_blank">
						<span><i class="fa fa-ticket"></i><small>Sun 18th Nov</small><br>General admission & Talk Tickets</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>