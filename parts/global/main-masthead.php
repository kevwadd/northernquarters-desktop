<?php
$event_venue = get_field('event_venue', 'options');	
$event_place = get_field('event_place', 'options');	
$event_date = get_field('event_date', 'options');	
$event_time_start = get_field('event_time_start', 'options');
$event_time_end = get_field('event_time_end', 'options');
$gbl_social = get_field('gbl_social_links', 'options');	
?>

<header id="masthead" class="header-normal" role="banner">
	<div class="container"><div class="row no-gutters">
		<div class="masthead-left col-3">
			<a id="logo" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><span class="sr-only"><?php bloginfo('name'); ?><br><?php bloginfo('description'); ?></span></a>
		</div>
		<div class="masthead-right col-9 text-right">
			<div class="event-date"><time><i class="fa fa-calendar"></i> <?php echo date('j M Y', strtotime($event_date)); ?>  <i class="fa fa-clock-o"></i> <?php echo $event_time_start; ?> - <?php echo $event_time_end; ?> <i class="fa fa-map-marker"></i> <?php echo $event_venue; ?> - <?php echo $event_place; ?></time></div>
			<div class="social-links">
				<ul class="list-inline">
				<?php foreach ($gbl_social as $social) { ?>
				<li class="list-inline-item"><a href="<?php echo $social['url']; ?>" target="_blank" class="social-link"><span class="sr-only"><?php echo $social['name']; ?></span><i class="fa <?php echo $social['icon']; ?>"></i></a></li>
				<?php } ?>
				</ul>
			</div>
			<nav id="top-nav">
				<?php wp_nav_menu(array( 
				'container' => 'false', 
				'menu' => 'Main nav', 
				'menu_class'  => 'list-inline',
				'fallback_cb' => false 
				) ); 
				?>
			</nav>
		</div>
	</div></div>
</header><!-- #masthead -->