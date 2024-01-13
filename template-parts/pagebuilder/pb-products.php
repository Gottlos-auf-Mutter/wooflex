<!-- Pagebuilder Products -->
<section class="pb-section pb-products">

	<h2><?php the_sub_field('products_headline'); ?></h2>
	
	<div class="products">
		<?php get_template_part( 'template-parts/pagebuilder/products/loop', get_sub_field('product_type')); ?>
		
		<?php if(get_sub_field('products_button')) ?>
			<?php 
			$link = get_sub_field('products_button_link');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
			?>
		
			<a class="btn btn-primary" href=" <?php echo "$link_url" ?>" role="button">
				<?php echo "$link_title"; ?>
			</a>
		<?php endif; ?>
	</div> 

</section> <!-- pb-products -->
