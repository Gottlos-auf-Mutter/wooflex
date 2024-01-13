
<div class="row">

	<div class="col-12">
			<h2 class="text-xs-center">Unsere Bestseller</h2>
	</div>

	<?php
			$args = array(
	            'post_type'      => 'product',
	            'posts_per_page' => 4,
	        );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<article class="product col-6 col-md-3 ">
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

	<div class="col-12">
			<button type="button" class="btn btn-primary btn-sm mt-3">Mehr Umhängetaschen</button>
	</div>

</div><!-- row -->
