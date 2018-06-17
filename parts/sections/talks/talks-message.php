<?php  
$talks_message =  get_field('talks_message', 'options');		
?>
<div class="section-message bg-yellow">
	<div class="row no-gutters">
		<div class="col-6">
			<figure class="img">
			
			</figure>
		</div>
		<div class="col-6">
			<div class="text">
			<?php echo $talks_message; ?>
			</div>
		</div>	
	</div>
</div>