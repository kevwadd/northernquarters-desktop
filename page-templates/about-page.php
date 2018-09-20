<?php
/*
Template Name: About page template
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) :?>
<?php while ( have_posts() ) : the_post(); ?>
<?php if (has_post_thumbnail()) { ?>
<?php 
$feat_img = get_the_post_thumbnail_url();	
//echo '<pre>';print_r($event_date);echo '</pre>';
?>
<a name="pg-top"></a>
<section class="banner-top">
	<div class="container slim-page-banner">
		<div class="img" style="background-image: url(<?php echo $feat_img; ?>)">
			<h1 class="animated fadeInUp"><?php the_title(); ?></h1>
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
			<div class="entry">
			<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>