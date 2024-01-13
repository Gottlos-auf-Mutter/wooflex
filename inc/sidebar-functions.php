<?php
/*
======================================
Sidebar Function
======================================
*/

function woostrap_sidebar_widget_setup () {

	register_sidebar(
		array(
			'name'	=> 'sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description'	=> 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => "</aside>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		)
	);

	register_sidebar(
		array(
			'name'	=> 'shop sidebar',
			'id'	=> 'sidebar-shop',
			'class'	=> 'custom',
			'description'	=> 'Shop Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s px-3 px-lg-0 mr-lg-4">',
			'after_widget'  => "</aside>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		)
	);

}

add_action( 'widgets_init', 'woostrap_sidebar_widget_setup');
