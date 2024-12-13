<?php

require get_template_directory() . '/inc/include-functions.php';
require get_template_directory() . '/inc/menu-functions.php';
require get_template_directory() . '/inc/themesupport-functions.php';
require get_template_directory() . '/inc/sidebar-functions.php';
require get_template_directory() . '/inc/woocommerce-functions.php';
require get_template_directory() . '/inc/wf-blocks-functions.php';
require get_template_directory() . '/inc/acf-blocks.php';
require get_template_directory() . '/inc/wooflex-functions.php';
require get_template_directory() . '/inc/wf-shortcode-functions.php';

//disable Google Fonts from Mailpoet
add_filter('mailpoet_display_custom_fonts', function () {return false;});

//remove author from oembed
add_filter( 'oembed_response_data', 'disable_embeds_filter_oembed_response_data_' );
function disable_embeds_filter_oembed_response_data_( $data ) {
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}