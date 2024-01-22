<?php
/*
======================================
Sidebar Function
======================================
*/

function wooflex_sidebar_widget_setup () {

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

add_action( 'widgets_init', 'wooflex_sidebar_widget_setup');


function wooflex_register_widget_areas() {

  register_sidebar( array(
    'name'          => 'Footer Widgets Top',
    'id'            => 'footer_widgets_top',
    'description'   => 'Area for widgets that go at the top of the footer',
    'before_widget' => '<section class="footer-widgets footer-top>',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer Widgets Middle',
    'id'            => 'footer_widgets_middle',
    'description'   => 'Area for footer widgets that go between Logo and Menu',
    'before_widget' => '<section class="footer-widgets footer-middle>',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  
  register_sidebar( array(
    'name'          => 'Footer Widgets Bottom',
    'id'            => 'footer_widgets_bottom',
    'description'   => 'Area for widgets that go on the bottom of the footer',
    'before_widget' => '<section class="footer-widgets footer-bottom>',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

}

add_action( 'widgets_init', 'wooflex_register_widget_areas' );
