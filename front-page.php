<?php get_header(); ?>

<?php get_template_part( 'parts/home-page/banner', 'top' ); ?>

<?php get_template_part( 'parts//sections/section', 'sponsors' ); ?>

<?php get_template_part( 'parts/home-page/welcome', 'text' ); ?>

<?php get_template_part( 'parts/sections/section', 'exhibitors' ); ?>

<?php get_template_part( 'parts/sections/section', 'talks' ); ?>

<?php get_template_part( 'parts/sections/section', 'workshops' ); ?>

<?php //get_template_part( 'parts/sections/section', 'news' ); ?>

<?php get_footer(); ?>