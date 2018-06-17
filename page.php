<?php get_header(); ?>
<?php if ( have_posts() ) :?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="">
	<div class="container">
		<div class="main-txt">
			<h1><?php the_title(); ?></h1>
			<div class="entry">
			<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>