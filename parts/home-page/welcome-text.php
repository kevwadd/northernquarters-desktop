<?php if ( have_posts() ) :?>
<?php while ( have_posts() ) : the_post(); ?>
<article id="pg-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<a name="about"></a>
		<div class="main-txt">
			<h1><?php the_title(); ?> to <?php bloginfo('name'); ?></h1>
			<div class="entry txt-cols-2">
			<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>
<?php endwhile; ?>
<?php endif; ?>