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
	<div class="container hp-banner">
		<div class="img">
			<div class="event-info">
				<label>Free</label>
				<time><?php echo date('jS F Y', strtotime($event_date. ' - 1 day')); ?> ~ 10:00am - <?php echo $event_time_end; ?></time>
				<h2><?php bloginfo('name'); ?> at the Biscuit Factory - Newcastle</h2>
				<p>Furniture Showcase ~ Workshops ~ Demos</p>
			</div>
			<div class="event-info">
				<label>Ticket Only</label>
				<time><?php echo date('jS F Y', strtotime($event_date)); ?> ~ <?php echo $event_time_start; ?> - <?php echo $event_time_end; ?></time>
				<h2><?php bloginfo('name'); ?> <?php bloginfo('description'); ?> at <?php echo $event_venue; ?> - <?php echo $event_place; ?></h2>
				<p>Regional Artisan stalls ~ Talk with the Professionals</p>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
			<div class="links link-left">
				<a href="<?php echo $general_tickets_url; ?>" class="text-center yell-btn" target="_blank">
					<span><i class="fa fa-ticket"></i><small>Sat 17th Nov</small><br>Workshop Tickets</span>
				</a>
			</div>
			</div>
			<div class="col-6">
			<div class="links link-right">
				<a href="<?php echo $talk_tickets_url; ?>" class="text-center blue-btn" target="_blank">
					<span><i class="fa fa-ticket"></i><small>Sun 18th Nov</small><br>General admission & Talk Tickets</span>
				</a>
			</div>
			</div>
		</div>
	</div>
</section>