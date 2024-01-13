
<?php
	$productsnumber = get_sub_field('products_number');

	$args = array(
        'post_type'      => 'product',
        'posts_per_page' => $productsnumber,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'desc',

    );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

        <?php 
        // get_template_part('template-parts/pagebuilder/products/content-product.php'); ?> 

        <article class="product">
            <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                <?php
                    woocommerce_show_product_sale_flash( $post, $product );
                        if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                        else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" />';
                        the_title( '<h3>', '</h3>' );
                    ?>
                </a>
        </article>
	<?php endwhile;
	wp_reset_query();
?>



