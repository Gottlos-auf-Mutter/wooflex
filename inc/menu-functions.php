<?php
/*
======================================
Activate Menus
======================================
*/

function register_wooflex_menus() {
	add_theme_support('menus');
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu'),
			'footer-menu-1' => __( 'Footer Menu 1'),
			'footer-menu-2' => __( 'Footer Menu 2'),
			'footer-menu-3' => __( 'Footer Menu 3'),
			'footer-menu-4' => __( 'Footer Menu 4'),

		)
	);
	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'footer_col_1', 'Footer Menu 1st Column' );
	register_nav_menu( 'footer_col_2', 'Footer Menu 2st Column' );
	register_nav_menu( 'footer_col_3', 'Footer Menu 3st Column' );
	register_nav_menu( 'footer_col_4', 'Footer Menu 4st Column' );
}

add_action( 'init', 'register_wooflex_menus');

/*
======================================
breadcrumb navigation
======================================
*/

function wooflex_nav_breadcrumb() {
 
 $delimiter = '&nbsp;&#47;&nbsp;';
 $home = 'Home'; 
 $before = '<span class="current-page">'; 
 $after = '</span>'; 
 
 if ( !is_home() && !is_front_page() || is_paged() ) {
 
 echo '<nav class="breadcrumb">';
 
 global $post;
 $homeLink = get_bloginfo('url');
 echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
 if ( is_category()) {
 global $wp_query;
 $cat_obj = $wp_query->get_queried_object();
 $thisCat = $cat_obj->term_id;
 $thisCat = get_category($thisCat);
 $parentCat = get_category($thisCat->parent);
 if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
 echo $before . single_cat_title('', false) . $after;
 
 } elseif ( is_day() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('d') . $after;
 
 } elseif ( is_month() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('F') . $after;
 
 } elseif ( is_year() ) {
 echo $before . get_the_time('Y') . $after;
 
 } elseif ( is_single() && !is_attachment() ) {
 if ( get_post_type() != 'post' ) {
 $post_type = get_post_type_object(get_post_type());
 $slug = $post_type->rewrite;
 echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 } else {
 $cat = get_the_category(); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo $before . get_the_title() . $after;
 }
 
 } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
 $post_type = get_post_type_object(get_post_type());
 echo $before . $post_type->labels->singular_name . $after;
 

 } elseif ( is_attachment() ) {
 $parent = get_post($post->post_parent);
 $cat = get_the_category($parent->ID); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 
 } elseif ( is_page() && !$post->post_parent ) {
 echo $before . get_the_title() . $after;
 
 } elseif ( is_page() && $post->post_parent ) {
 $parent_id = $post->post_parent;
 $breadcrumbs = array();
 while ($parent_id) {
 $page = get_page($parent_id);
 $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
 $parent_id = $page->post_parent;
 }
 $breadcrumbs = array_reverse($breadcrumbs);
 foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 
 } elseif ( is_search() ) {
 echo $before .  get_search_query() . $after;
 
 } elseif ( is_tag() ) {
 echo $before . single_tag_title('', false) . $after;

 } elseif ( is_404() ) {
 echo $before . 'Error 404' . $after;
 }
 
 if ( get_query_var('paged') ) {
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
 echo ': ' . __('Page') . ' ' . get_query_var('paged');
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
 }
 
 echo '</nav>';
 
 } 
} 
?>
