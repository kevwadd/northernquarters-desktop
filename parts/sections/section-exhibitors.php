<?php
$exhibitors = get_field('event_exhibitors', 'options');	
?>

<div class="rule"></div>
<a name="exhibitors"></a>
<section class="page-section">
	<div class="container">
	<h2 class="section-header"><span>Exhibitors</span></h2>
	
	<?php if (empty($exhibitors)) { ?>
	<?php get_template_part( 'parts/sections/exhibitors/exhibitors', 'message' ); ?>
	<?php } else { 
	$exhibitors_count = count($exhibitors);		
	?>
	
	<?php if ($exhibitors_count > 1) { ?>
	<?php get_template_part( 'parts/sections/exhibitors/exhibitors', 'carousel' ); ?>
	<?php } else { ?>
	<?php get_template_part( 'parts/sections/exhibitors/exhibitors', 'single' ); ?>
	<?php } ?>
	
	<?php } ?>
	</div>	
</section>