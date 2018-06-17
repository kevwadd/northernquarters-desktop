<?php
$talks = get_field('event_talks', 'options');	
//echo '<pre>';print_r($talks);echo '</pre>';
?>

<div class="rule"></div>
<a name="talks"></a>
<section class="page-section">
	<div class="container">
	<h2 class="section-header"><span>Talks</span></h2>
	<?php if (empty($talks)) { ?>
	<?php get_template_part( 'parts/sections/talks/talks', 'message' ); ?>
	<?php } else { 
	$talks_count = count($talks);		
	?>
	
	<?php if ($talks_count > 1) { ?>
	<?php get_template_part( 'parts/sections/talks/talks', 'carousel' ); ?>
	<?php } else { ?>
	<?php get_template_part( 'parts/sections/talks/talks', 'single' ); ?>
	<?php } ?>
	
	<?php } ?>

	</div>
</section>