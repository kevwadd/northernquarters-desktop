<?php
$general_tickets_url = get_field('general_tickets_url', 'options');	
$talk_tickets_url = get_field('talk_tickets_url', 'options');
$stall_enquiry_email = get_field('stall_enquiry_email', 'options');		
?>

<div id="tickets-sb-btns" class="closed">
	<h2><i class="fa fa-ticket"></i>Tickets</h2>
	<a href="<?php echo $general_tickets_url; ?>" target="_blank">Workshops<i class="fa fa-angle-right"></i></a>
			
	<a href="<?php echo $talk_tickets_url; ?>" target="_blank">General admission<i class="fa fa-angle-right"></i></a>
	
	<a href="<?php echo $talk_tickets_url; ?>" target="_blank">Talks<i class="fa fa-angle-right"></i></a>
</div>
