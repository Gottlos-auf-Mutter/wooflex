<?php
/*
======================================
Include Scripts
======================================
*/

function wooflex_script_enqueue() {
	//css
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/assets/css/style.css', array(), rand(111,9999), 'all');


	//js
	//wp_enqueue_script( 'jquery' );
	//wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/woostrap.js', array(), rand(111,9999), true);

	//wefonts
	//wp_enqueue_script( 'fontawesome-brands', get_template_directory_uri() . '/fonts/fontawesome/js/brands.min.js', array(), '5.6.3', false);
}

add_action( 'wp_enqueue_scripts', 'wooflex_script_enqueue' );
