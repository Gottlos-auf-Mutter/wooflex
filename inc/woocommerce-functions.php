<?php
/**
* ====================================
* Woocommerce Functions
* ====================================
*/

// Activate Woocommerce Suopport

function wf_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'wf_add_woocommerce_support' );


add_action( 'after_setup_theme', 'wf_setup' );
 
function wf_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}


/**
* ====================================
*  Shop / Archive Pages
* ====================================
*/

//  Removing the 'Add-to-cart'-button beneath products on shop/archive pages
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


// change "angebot" bagde for German Site back to "sale"
add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_text', 10, 3);
function woocommerce_custom_sale_text($text, $post, $_product)
{
    return '<span class="onsale">Sale</span>';
}

/**
* ====================================
* Single Product Site
* ====================================
*/


// remove Sidebar from single Product page
add_action( 'wp', 'woostrap_remove_sidebar_product_pages' );
function woostrap_remove_sidebar_product_pages() {
	if ( is_product() ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	}
}

// move Headline over Product image
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_before_single_product', 'woocommerce_template_single_title', 5 );



/**
* ====================================
* Checkout
* ====================================
*/

// Remove billing phone (and set email field class to wide)
add_filter( 'woocommerce_billing_fields', 'remove_billing_phone_field', 20, 1 );
function remove_billing_phone_field($fields) {
    $fields ['billing_phone']['required'] = false; // To be sure "NOT required"

    $fields['billing_email']['class'] = array('form-row-wide'); // Make the field wide

    unset( $fields ['billing_phone'] ); // Remove billing phone field
    return $fields;
}

// Remove shipping phone (optional)
add_filter( 'woocommerce_shipping_fields', 'remove_shipping_phone_field', 20, 1 );
function remove_shipping_phone_field($fields) {
    $fields ['shipping_phone']['required'] = false; // To be sure "NOT required"

    unset( $fields ['shipping_phone'] ); // Remove shipping phone field
    return $fields;
}

