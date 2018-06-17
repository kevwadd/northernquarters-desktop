<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content ="width=device-width,user-scalable=yes" />
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="sr-only" href="#content">Skip to content</a>
	
	<?php get_template_part( 'parts/global/main', 'masthead' ); ?>
	
	<main id="content" class="site-content">