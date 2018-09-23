<?php
$workshops = get_field('event_workshops', 'options');	
//echo '<pre>';print_r($talks);echo '</pre>';
?>

<div class="rule"></div>
<a name="workshops"></a>
<section class="page-section">
	<div class="container">
	<h2 class="section-header"><span>Workshops</span></h2>
	<?php if (empty($workshops)) { ?>
	<?php get_template_part( 'parts/sections/workshops/workshops', 'message' ); ?>
	<?php } else { 
	$ws_count = count($workshops);		
	?>
	
	<?php if ($ws_count > 1) { ?>
	<?php get_template_part( 'parts/sections/workshops/workshops', 'carousel' ); ?>
	<?php } else { ?>
	<?php get_template_part( 'parts/sections/workshops/workshops', 'single' ); ?>
	<?php } ?>
	
	<?php } ?>

	</div>
</section>