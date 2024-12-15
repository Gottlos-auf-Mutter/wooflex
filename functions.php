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

//change reply-to email address for woocommerce
add_filter( 'woocommerce_email_headers', 'wc_change_reply_to_email_address', 10, 4 );
function wc_change_reply_to_email_address( $header, $email_id, $order, $email ) {

    // HERE below set the name and the email address
    $reply_to_name  = 'Support | Gottlos-auf-Mutter';
    $reply_to_email = 'support@gottlos-auf-mutter.de';

    $header  = 'Content-Type: ' . $email->get_content_type() . "\r\n";
    $header .= 'Reply-to: ' . utf8_decode($reply_to_name) . ' <' . sanitize_email($reply_to_email) . ">\r\n";

    return $header;
}