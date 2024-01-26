<?php 

/*
======================================
Backend Menu Order
======================================
*/


function wpse_custom_menu_order( $menu_ord ) {
    if ( !$menu_ord ) return true;

    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php', // Posts
        'upload.php', // Media
        'link-manager.php', // Links
        'edit-comments.php', // Comments
        'edit.php?post_type=page', // Pages
        'separator2', // Second separator
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator
    );
}
add_filter( 'custom_menu_order', 'wpse_custom_menu_order', 10, 1 );
add_filter( 'menu_order', 'wpse_custom_menu_order', 10, 1 );







/*
======================================
Additional Theme Customizer Options
======================================
*/



function register_wooflex_customizer_settings( $wp_customize ) {

    $wp_customize->add_setting(
        'small_logo',
        array(
            'default' => '',
            'type' => 'theme_mod', // you can also use 'option'
            'capability' => 'edit_theme_options',
        ),
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'small_logo',
            array(
               'label'      => __( 'Small logo for headder etc', 'theme_name' ),
               'section'    => 'title_tagline',
               'settings'   => 'small_logo' 
            )
        )
    );

    $wp_customize->add_setting(
        'footer_logo',
        array(
            'default' => '',
            'type' => 'theme_mod', // you can also use 'option'
            'capability' => 'edit_theme_options',
        ),
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_logo',
            array(
               'label'      => __( 'logo used in the footer', 'theme_name' ),
               'section'    => 'title_tagline',
               'settings'   => 'footer_logo' 
            )
        )
    );

}

function themeslug_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );

  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

add_action( 'customize_register', 'register_wooflex_customizer_settings' );

function wooflex_get_menu_by_location( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return $menu_obj;
}


/*
======================================
Blog Custom Functions
======================================
*/

function  wooflex_post_navigation(){

    $nav = '<div class="row post-nav">';

    $prev = get_previous_post_link( '<i class="fas fa-arrow-left"></i><span class="post-link-nav">%link</span>', '%title' );
    $nav .= '<div class="col-xs-12 col-sm-6">' . $prev . '</div>';

    $next = get_next_post_link( '<span class="next-link-nav">%link</span><i class="fas fa-arrow-right"></i>', '%title' );
    $nav .= '<div class="col-xs-12 col-sm-6 text-right">' . $next . '</div>';

    $nav .= '</div>';

    return $nav;
}

/*
====================================== 
Pagiantion
====================================== 
*/

function wooflex_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
    if ( null === $wp_query ) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

    $pages = paginate_links( array_merge( [
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $wp_query->max_num_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => __( '« Prev' ),
            'next_text'    => __( 'Next »' ),
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params )
    );

    if ( is_array( $pages ) ) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<section class="pagination"><ul>';

        foreach ( $pages as $page ) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</ul></section>';

        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}


/*
====================================== 
Allow SVG IMage upload
====================================== 
*/

function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
