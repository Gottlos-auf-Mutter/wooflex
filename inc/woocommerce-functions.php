<?php
/**
* ====================================
* Woocommerce Functions
* ====================================
*/

/**
 * Activate Woocommerce Suopport
 *------------------------------------------------------------------
 */
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


add_action( 'after_setup_theme', 'yourtheme_setup' );
 
function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}


/* Disable Woocommerce Css
 * ---------------------------------------------------------------- */
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );
/**
 * Change Wrappers to enable bootstrap Grid
 *------------------------------------------------------------------
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_sidebar', 'my_theme_wrapper_end', 10);

/** div.row around sidebar and main content */
function my_theme_wrapper_start() {
  echo '<div class="container">';
	echo '<div class="row">';
}

function my_theme_wrapper_end() {
  echo '</div> <!-- row -->';
	echo '</div> <!-- container -->';
}

/**
 *  Wrap Main Contentn in section to order page with bootstrap
 *------------------------------------------------------------------
 */
add_action( 'woocommerce_before_shop_loop', 'woostrap_products_grid_container_start', 4);
function woostrap_products_grid_container_start() {
	echo '<section class="products col-xl-9 col-lg-8 order-lg-2">';
}
add_action( 'woocommerce_after_main_content', 'woostrap_product_grid_container_end', 5);
function woostrap_product_grid_container_end() {
	echo '</section> <!-- products -->';
}

/* Wrap all the "before_shop_loop" Stuff in a row
 * --------------------------------------------------------------------------------------*/
add_action( 'woocommerce_before_shop_loop', 'woostrap_products_grid_info_start', 6);
function woostrap_products_grid_info_start() {
	echo '<div class="row products-info-section">';
}

add_action( 'woocommerce_before_shop_loop', 'woostrap_products_grid_info_end', 60);
function woostrap_products_grid_info_end() {
	echo '</div>';
}

/**
 * Removing the 'Add-to-cart'-button beneath products on shop/archive pages
 *------------------------------------------------------------------
 */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );



/**
* Update cart contents dynamicly via Ajax
*------------------------------------------------------------------
*/
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="nav-link header-cart-link" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Shopping Cart' ) ?>" tabindex="-1">
    	<i class="fas fa-shopping-cart"></i>
    	<div class="navbar-icon-link-badge">
    		<?php echo sprintf ( WC()->cart->get_cart_contents_count() ); ?>
    	</div>
    </a>
	<?php
	$fragments['a.header-cart-link'] = ob_get_clean();
	return $fragments;
}





// change "angeot" bagde for German Site back to sale
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

// Remove product meta 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// change "angeot" bagde for German Site back to sale
add_action( 'wp', 'woostrap_remove_sidebar_product_pages' );
function woostrap_remove_sidebar_product_pages() {
	if ( is_product() ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	}
}


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

add_action( 'woocommerce_before_single_product', 'woocommerce_template_single_title', 5 );

/* backorder text on single product page */
 
function so_42345940_backorder_message( $text, $product ){
  if ( $product->managing_stock() && $product->is_on_backorder( 1 ) ) {
      $text = __( 'Backorder: We will produce/print it for you and ship it to you within the next 10 Days' , 'woostrap' );
  }
  return $text;
}
add_filter( 'woocommerce_get_availability_text', 'so_42345940_backorder_message', 10, 2 );

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
/**
 * Remove product page tabs
 */
add_filter( 'woocommerce_product_tabs', 'my_remove_all_product_tabs', 98 );
 
function my_remove_all_product_tabs( $tabs ) {
  unset( $tabs['description'] );        // Remove the description tab
  unset( $tabs['reviews'] );       // Remove the reviews tab
  unset( $tabs['additional_information'] );    // Remove the additional information tab
  return $tabs;
}
