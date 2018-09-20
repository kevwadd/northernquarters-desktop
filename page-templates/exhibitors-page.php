<?php
/*
Template Name: Exhibitors page template
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) :?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if (has_post_thumbnail()) { ?>
<?php 
$feat_img = get_the_post_thumbnail_url();	
$event_date = get_field('event_date', 'options');	
//echo '<pre>';print_r($event_date);echo '</pre>';
?>
<a name="pg-top"></a>
<section class="banner-top">
	<div class="container page-banner">
		<div class="img" style="background-image: url(<?php echo $feat_img; ?>)">
			<h1 class="animated fadeInUp"><?php the_title(); ?><br><span><?php echo date('Y', strtotime($event_date)); ?></span></h1>
		</div>
	</div>
</section>
<?php } ?>
<article <?php post_class(); ?>>
	<div class="container">
		<div class="main-txt">
			<?php if (!has_post_thumbnail()) { ?>
			<h1><?php the_title(); ?></h1>
			<?php } ?>
			<div class="entry txt-cols-2">
			<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>
<?php
$exhibitors = get_field('event_exhibitors', 'options');	
?>

<div class="rule"></div>
<section id="exhibitor-list" class="page-section">
	<div class="container">
	<?php foreach ($exhibitors as $k => $ex) { 
		$ex_post = $ex['exhibitor_post'];
		$img_main_lg = wp_get_attachment_image_src($ex['main_img'], 'full');
		$img_main_sm = wp_get_attachment_image_src($ex['main_img'], 'thumbnail');	
		$img_profile_lg = wp_get_attachment_image_src($ex['profile_img'], 'full');	
		?>
		<div class="exhibitor-list-item">
			<?php if (!empty($img_main_lg)) { ?>
			<div class="img-main" style="background-image: url(<?php echo $img_main_lg[0]; ?>)"></div>
			<?php } ?>
			<?php if (!empty($img_profile_lg)) { ?>
			<div class="row">
				<div class="col-9">
					<div class="text">
						<h2><?php echo $ex['exhibit_name']; ?></h2>
						<?php echo $ex['exhibit_description']; ?>
					</div>
				</div>  
				<div class="col-3">
					<figure class="img-sml">
						<img src="<?php echo $img_profile_lg[0]; ?>" class="img-fluid">
					</figure>
					<?php if (!empty($ex_post)) { ?>
					<a href="<?php echo get_permalink($ex_post); ?>" class="view-post">View Article <i class="fa fa-angle-right fa-lg"></i></a>
					<?php } ?>
				</div>     
		 	</div>
			<?php } else { ?>
			<div class="text">
				<h2><?php echo $ex['exhibit_name']; ?></h2>
				<?php echo $ex['exhibit_description']; ?>
				<?php if (!empty($ex_post)) { ?>
				<a href="<?php echo get_permalink($ex_post); ?>" class="view-post">View Article <i class="fa fa-angle-right fa-lg"></i></a>
				<?php } ?>
			</div>
			<?php } ?>
			
		 	<a href="<?php echo $ex['exhibit_url']; ?>" target="_blank" class="website_link"><i class="fa fa-external-link"></i><?php echo $ex['exhibit_name']; ?></a>
		</div>
		<?php } ?>
	</div>	
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>