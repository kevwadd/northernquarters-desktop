<?php
function nq_scripts() {
	
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', null, '4.1.1', 'screen' );
	//wp_enqueue_style( 'fontawesome-css', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', null, '5.0.13', 'screen' );
	wp_enqueue_style( 'bhn-style', get_stylesheet_directory_uri() . '/assets/css/styles.css', null,  filemtime( get_stylesheet_directory().'/assets/css/styles.css' ), 'screen'  );
	
	//Scripts
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', null, '2.8.3', false );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.0.js', null, '3.1.0', true );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.12.9', true );
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
	wp_enqueue_script( 'bhn-script', get_stylesheet_directory_uri() . '/assets/js/functions-min.js', array( 'jquery' ), filemtime( get_stylesheet_directory().'/assets/js/functions-min.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'nq_scripts' );	
?>