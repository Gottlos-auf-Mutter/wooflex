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
