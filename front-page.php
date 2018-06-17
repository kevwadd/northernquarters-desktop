<?php get_header(); ?>

<?php get_template_part( 'parts/home-page/banner', 'top' ); ?>

<?php get_template_part( 'parts/home-page/welcome', 'text' ); ?>

<?php get_template_part( 'parts/sections/section', 'exhibitors' ); ?>

<?php get_template_part( 'parts/sections/section', 'talks' ); ?>

<?php //get_template_part( 'parts/sections/section', 'news' ); ?>

<?php get_template_part( 'parts/sections/section', 'form' ); ?>

<?php get_template_part( 'parts/sections/section', 'location' ); ?>

<?php get_footer(); ?>